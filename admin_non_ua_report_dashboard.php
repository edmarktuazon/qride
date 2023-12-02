<?php
    session_start();
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);
    $adminUsername = isset($data['admin_username']) ? $data['admin_username'] : '';

    if (!isset($_SESSION["username"]) && empty($adminUsername)) {
        header("Location: admin_login.php");
        exit();
    }

    if (isset($_SESSION["username"])) {
        // echo "Logged in as: " . $_SESSION["username"];
    } elseif (!empty($adminUsername)) {
        // echo "Logged in as: " . $adminUsername;
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $json_data = file_get_contents('php://input');
    
        $data = json_decode($json_data, true);

        $driverName = isset($data['driver_name']) ? $data['driver_name'] : '';
        $plateNumber = isset($data['plate_number']) ? $data['plate_number'] : '';
        $emailAddress = isset($data['email_address'])? $data['email_address'] : '';
        $complainantNumber = isset($data['complainant_number'])? $data['complainant_number'] : '';
        $rating = isset($data['rating'])? $data['rating'] : '';
        $reason = isset($data['message'])? $data['message'] : '';
        $activity = isset($_POST['activity']) ? $_POST['activity'] : date("Y-m-d H:i:s");
        

        $con = mysqli_connect("localhost", "root", "", "qride_database");
        
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $driverImageUrl = isset($data['driver_image_url']) ? $data['driver_image_url'] : '';

    $query = "INSERT INTO non_ua_reports (driver_name, plate_number, complainant_number, rating, reason, email_address, driver_image_url, activity) VALUES ('$driverName', '$plateNumber', '$complainantNumber', '$rating', '$reason', '$emailAddress', '$driverImageUrl', '$activity')";


    if (mysqli_query($con, $query)) {
        // echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// delete data from the non_ua_reports table
    if (isset($_GET['delete_id'])) {
        $con = mysqli_connect("localhost", "root", "", "qride_database");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $deleteId = $_GET['delete_id'];
    
    // Delete row from database
    $deleteQuery = "DELETE FROM non_ua_reports WHERE id = $deleteId";
    if (mysqli_query($con, $deleteQuery)) {
    // echo "Row deleted successfully.";
    } else {
        echo "Error deleting row: " . mysqli_error($con);
    }
        mysqli_close($con);
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Non UA Reports</title>

    <!-- tab logo image -->
    <link rel="shortcut icon" href="./assets/images/UA-Logo.png" type="image/x-icon">

    <!-- output -->
    <link rel="stylesheet" href="./dist/output.css" />
    <!-- custom -->
    <link rel="stylesheet" href="./src/custom.css" />

    <!-- font inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- sweetalert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>

</head>

<body>
    <!-- link for sidebar -->
    <?php include('./includes/non_ua_report_sidebar.php'); ?>

    <!-- content -->
    <section class="sm:ml-64">
        <div class="hidden bg-white px-8 py-10 sm:flex lg:pl-28">
            <div class="space-y-2">
                <h1 class="font-roboto text-shade-black font-[900] text-3xl lg:text-5xl">
                    Welcome, <?php echo $_SESSION['username']; ?> 🎉
                </h1>
                <p class="font-roboto text-shade-gray">
                    Here are the report in your QRide account today.
                </p>
            </div>
        </div>
        <div class="bg-shade-light-gray min-h-screen px-0 py-10 sm:px-8 lg:px-28">
            <div
                class="pl-10 flex items-center gap-3 before:content before:block before:bg-shade-black before:rounded-md before:h-8 before:w-3 sm:pl-0">
                <h3 class="font-roboto text-shade-black  uppercase text-lg">
                    Today's report
                </h3>
            </div>
            <div class="bg-white mt-10 relative overflow-x-auto">
                <div class="grid justify-end gap-5 mb-10 mx-5 sm:mx-0 sm:flex">
                    <div class="flex items-center relative">
                        <input type="text" id="driverSearch" placeholder="Search by Driver Name"
                            class="relative overflow-hidden w-full bg-transparent py-2 px-10 text-shade-dark-gray"
                            style="border: 1px solid #949494;">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" fill="#949494"
                            viewBox="0 0 50 50" class="absolute left-[8px]
                       ">
                            <path
                                d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z">
                            </path>
                        </svg>
                    </div>
                    <div class="export-button">
                        <button id="exportBtn" class="bg-shade-yellow font-inter p-2 text-shade-deep-blue w-full">
                            Export As
                        </button>
                        <div class="hidden mt-2 bg-shade-blue" id="exportBtnMenu">
                            <button id="export-pdf" class="export-menu font-inter p-2 text-shade-white border-b-[1px] border-shade-gray 
                                hover:bg-shade-yellow hover:text-shade-deep-blue">Export
                                to
                                PDF</button>
                            <button id="export-excel" class="export-menu font-inter p-2 text-shade-white border-b-[1px] border-shade-gray
                                hover:bg-shade-yellow hover:text-shade-deep-blue">Export
                                to
                                Excel</button>
                            <button id="export-csv" class="export-menu font-inter p-2 text-shade-white
                            hover:bg-shade-yellow hover:text-shade-deep-blue">Export to
                                CSV</button>
                        </div>
                    </div>
                </div>
                <table class="w-full base">
                    <thead class="text-base font-roboto text-shade-dark-gray !border-b-[1px] border-shade-gray">
                        <tr>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Driver
                            </th>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Plate no.
                            </th>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Reason
                            </th>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Email Address
                            </th>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Complainant no.
                            </th>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Rating
                            </th>
                            <th scope="col" class="bg-blue px-6 py-6 !font-[400] !tracking-normal">
                                Activity
                            </th>
                        </tr>
                    </thead>
                    <!-- table data -->
                    <tbody class="font-roboto text-center">
                        <?php 
                    $con = mysqli_connect("localhost", "root", "", "qride_database");
                        if (mysqli_connect_errno()) {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                    $query = "SELECT * FROM non_ua_reports";
                    $result = mysqli_query($con, $query);

                   while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class='table-row'>";
                    echo "<td class='driver-info grid grid-cols-[54px,_120px] items-center py-4 font-medium text-shade-dark-gray-blue tracking-normal mt-3 gap-4'>
                    <img src='" . $row['driver_image_url'] . "' alt='Driver's Image' class='h-12 w-12 object-contain rounded-full'>
                    <p class='driver-name'>" . $row['driver_name'] . "</p>
                    </td>";
                    echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $row['plate_number'] . "</td>";
                    echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $row['reason'] . "</td>";
                    echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $row['email_address'] . "</td>";
                    echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $row['complainant_number'] . "</td>";
                    echo "<td><div class='rating flex flex-row justify-center items-center gap-2'>";
                    $ratingValue = intval($row['rating']); 
                    for ($i = 1; $i <= 5; $i++) {
                        $checked = ($i <= $ratingValue) ? 'checked' : '';
                        echo "<input type='radio' name='rating_" . $row['id'] . "' value='$i' class='mask mask-star-2 bg-shade-yellow' $checked disabled />";
                    }
                    echo "</div></td>";
                    echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $row['activity'] . "</td>";
                    echo "<td class='delete-btn'><a href=\"javascript:void(0);\" onclick=\"confirmDelete('" . $row['id'] . "');\" class='p-[11px] text-shade-white' style='background-color: rgb(220 38 38);'> 
                  Delete
                </a>
             </td>";
               echo "<td>
                <form action='non_ua_archive_report.php' method='post'>
                <input type='hidden' name='report_id' value='" . $row['id'] . "'>
                <button type='submit' class='archive-btn bg-shade-blue font-inter p-2 text-shade-white'>Archive</button>
                </form>
                </td>";
            echo "</tr>";
            }
            mysqli_close($con);
        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"
        integrity="sha512-r22gChDnGvBylk90+2e/ycr3RVrDi8DIOkIGNhJlKfuyQM4tIRAI062MaV8sfjQKYVGjOBaZBOA87z+IhZE9DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("driverSearch");
        searchInput.addEventListener("input", function() {
            filterTableByDriverName(this.value);
        });

        function filterTableByDriverName(searchTerm) {
            const tableRows = document.querySelectorAll(".table-row");

            tableRows.forEach((row) => {
                const driverName = row.querySelector(".driver-name").innerText.toLowerCase();
                if (driverName.includes(searchTerm.toLowerCase())) {
                    row.style.display =
                        "";
                } else {
                    row.style.display =
                        "none";
                }
            });
        }

    });
    </script>

    <script>
    document.getElementById("export-pdf").addEventListener("click", exportToPDF);
    document.getElementById("export-excel").addEventListener("click", exportToExcel);
    document.getElementById("export-csv").addEventListener("click", exportToCSV);

    const exportBtn = document.getElementById("exportBtn");
    const exportBtnMenu = document.getElementById("exportBtnMenu");
    const exportMenu = document.querySelectorAll(".export-menu");

    exportMenu.forEach((menu) => {
        menu.addEventListener("click", () => {
            exportBtnMenu.classList.add("hidden");
        });
    });

    const openExportMenu = () => {
        if (exportBtnMenu.classList.contains("hidden")) {
            exportBtnMenu.classList.remove("hidden");
            exportBtnMenu.classList.add("grid");

        } else {
            exportBtnMenu.classList.add("hidden");
        }
    };


    exportBtn.addEventListener("click", openExportMenu);

    function exportToPDF() {
        const originalTable = document.querySelector("table");
        const clonedTable = originalTable.cloneNode(true);
        removeButtonsForExport(clonedTable); // Remove delete and archive buttons from the cloned table
        const pdfOptions = {
            margin: 10,
            filename: 'Non-UA-Report-Data.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'landscape'
            }
        };

        html2pdf(clonedTable, pdfOptions);
    }


    function exportToExcel() {
        const originalTable = document.querySelector("table");
        const clonedTable = originalTable.cloneNode(true);
        removeButtonsForExport(clonedTable);

        const workbook = XLSX.utils.table_to_book(clonedTable);

        // Convert the workbook to an ArrayBuffer
        const arrayBuffer = XLSX.write(workbook, {
            bookType: 'xlsx',
            type: 'array'
        });

        // Create a Blob from the ArrayBuffer
        const blob = new Blob([arrayBuffer], {
            type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        });

        // Create a download link
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = "Non-UA-Report-Data.xlsx";

        // Append the link to the document body before clicking it
        document.body.appendChild(a);
        a.click();

        // Remove the link from the document after clicking it
        document.body.removeChild(a);
    }


    function exportToCSV() {
        const table = document.querySelector("table");
        const csv = [];

        // Get headers
        const headers = [];
        const headerCols = table.querySelectorAll("th");
        for (let j = 0; j < headerCols.length; j++) {
            headers.push(headerCols[j].innerText);
        }
        csv.push(headers.join(","));

        // Get data rows
        const rows = table.querySelectorAll("tr");
        for (let i = 0; i < rows.length; i++) {
            const row = [];
            const cols = rows[i].querySelectorAll("td");
            for (let j = 0; j < cols.length; j++) {
                row.push(cols[j].innerText);
            }
            csv.push(row.join(","));
        }

        const csvContent = "data:text/csv;charset=utf-8," + csv.join("\n");
        const encodedUri = encodeURI(csvContent);
        const link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Non-UA-Report-Data.csv");
        link.click();
    }


    function removeButtonsForExport(table) {
        // Select and remove delete and archive buttons from the table
        const buttons = table.querySelectorAll(".delete-btn, .archive-btn");
        buttons.forEach(button => button.parentNode.removeChild(button));
    }
    </script>



    <!-- custom js -->
    <script src="./src/nonUaReport.js"></script>



    <!-- sweetalert2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.js"></script>

    <!-- flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>