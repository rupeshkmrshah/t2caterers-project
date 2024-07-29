<?php
// Database connection
$servername = "localhost";
$username = "enter_dbName";
$password = "enter_dbPassword";
$dbname = "enter_dbName";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Search functionality
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

// Prepare SQL query
$sql = "SELECT * FROM tcaterer_dbentries WHERE fullname LIKE '%$search%'";

// Add sorting
switch ($sort) {
    case 'name':
        $sql .= " ORDER BY fullname $order";
        break;
    case 'date':
        $sql .= " ORDER BY date $order";
        break;
    case 'day':
        $sql .= " ORDER BY DAYNAME(date) $order";
        break;
    default:
        $sql .= " ORDER BY id $order";
}

$result = $conn->query($sql);

// Check if search was performed and no results were found
$searchPerformed = !empty($search);
$noResults = $searchPerformed && $result->num_rows === 0;

// Close the connection
$conn->close();
?>
<?php
// PHP code remains the same as before
?>

<?php include('header.php') ?>
    <style>
        .h1 {
            font-family: 'Playball', cursive;
            color: #d4a762;
            text-align: center;
            margin: 20px 20px;
            font-weight: 600 !important;
        }
       
       .no-results {
            background-color: #ffebee;
            border: 1px solid #ffcdd2;
            color: #b71c1c;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
       
        .search-sort {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        input[type="text"], select {
            padding: 10px;
            border: 1px solid #d4a762;
            border-radius: 4px;
        }
        input[type="submit"], button {
            background-color: #d4a762;
            color: #000;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-weight:600;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #000;
            color: #d4a762;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            transition:all ease 0.5s;
            font-weight:600;
        }
        .table-responsive {
            overflow-x: auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 600px;
        }
        th, td {
            border: 1px solid #d4a762;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #d4a762;
            color: #000;
        }
        @media (max-width: 768px) {
            .search-sort {
                flex-direction: column;
            }
            input[type="text"], select, input[type="submit"] {
                width: 100%;
            }
        }
    </style>
    <div class="container">
        <h1 class="h1">Data <span style="color:#000;">Display</span></h1>
        
        <div class="search-sort">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search by name" value="<?php echo htmlspecialchars($search); ?>">
                <select name="sort">
                    <option value="id" <?php echo $sort == 'id' ? 'selected' : ''; ?>>Default</option>
                    <option value="name" <?php echo $sort == 'name' ? 'selected' : ''; ?>>Name</option>
                    <option value="date" <?php echo $sort == 'date' ? 'selected' : ''; ?>>Date</option>
                    <option value="day" <?php echo $sort == 'day' ? 'selected' : ''; ?>>Day</option>
                </select>
                <select name="order">
                    <option value="ASC" <?php echo $order == 'ASC' ? 'selected' : ''; ?>>Ascending</option>
                    <option selected value="DESC" <?php echo $order == 'DESC' ? 'selected' : ''; ?>>Descending</option>
                </select>
                <input type="submit" value="Apply">
                <select id="exportFormat" placeholder="Select Format">
                    <option value="select-option" disabled selected>Select your option</option>
                    <option value="xlsx">.xlsx</option>
                    <option value="csv">.csv</option>
                </select>
                <button onclick="exportTableData()">Export</button>
            </form>
        </div>

        <div class="table-responsive">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date & Time</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["fullname"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["comments"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["date"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No results found</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
    
    <!-- Data export function start here -->
    
    <script>
        function exportTableData() {
            // Get the table element
            var table = document.querySelector("table");
            
            // Get the selected format
            var format = document.getElementById("exportFormat").value;
            
            // Get the table data
            var data = [];
            for (var i = 0; i < table.rows.length; i++) {
                var row = table.rows[i];
                var rowData = [];
                for (var j = 0; j < row.cells.length; j++) {
                    rowData.push(row.cells[j].innerText);
                }
                data.push(rowData);
            }
            
            // Create a worksheet
            var ws = XLSX.utils.aoa_to_sheet(data);
            
            // Create a workbook
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
            
            if (format === "xlsx") {
                // Generate XLSX file
                var wbout = XLSX.write(wb, {bookType:'xlsx', type: 'binary'});
                
                // Convert to blob
                var blob = new Blob([s2ab(wbout)], {type:"application/octet-stream"});
                
                // Save file
                saveAs(blob, 'export.xlsx');
            } else if (format === "csv") {
                // Generate CSV
                var csv = XLSX.utils.sheet_to_csv(ws);
                
                // Convert to blob
                var blob = new Blob([csv], {type: "text/csv;charset=utf-8"});
                
                // Save file
                saveAs(blob, 'export.csv');
            }
        }
    
        // Utility function to convert string to ArrayBuffer
        function s2ab(s) {
            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;
        }
    </script>
    
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver/dist/FileSaver.min.js"></script>

<!-- Data export function start here -->

<?php include('footer.php') ?>