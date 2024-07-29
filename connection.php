<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comment'];

    if (!empty($fullname) || !empty($email) || !empty($phone) || !empty($comments)){
        $host = "localhost";
        $dbUsername = "tcaterer_dbentries";
        $dbPassword = "T2Caterers@2024";
        $dbName = "tcaterer_dbcontact";
        
        // Create Connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error ());
        } else {
            $SELECT = "SELECT phone FROM tcaterer_dbentries WHERE phone = ? LIMIT 1";
            $INSERT = "INSERT INTO tcaterer_dbentries (fullname, email, phone, comments) VALUES (?, ?, ?, ?)";
            
            // Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("i", $phone);
            $stmt->execute();
            $stmt->bind_result($phone);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssis", $fullname, $email, $phone, $comments);
                $stmt->execute();
                
                // Send email
                $to = "info@t2caterers.com";
                $subject = "New Contact Form Submission by ".$fullname;
                $message = "
                Name: $fullname\n
                Phone: $phone\n
                Email: $email\n
                Message: $comments
                ";
                $headers = "From: $email\r\n";
                $headers .= "CC: t2caterers@gmail.com";  // Add CC email address here

                if (mail($to, $subject, $message, $headers)) {
                    include('thank-you.php');
                } else {
                    echo "Sorry, something went wrong while sending the email. Please try again.";
                }
            } else {
                include('error.php');
            }

            $stmt->close();
            $conn->close();
        }
    } else {
        echo "All Fields are required";
        die();
    }
?>
