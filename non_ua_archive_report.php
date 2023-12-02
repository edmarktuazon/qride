<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reportId = isset($_POST['report_id']) ? $_POST['report_id'] : '';

    if (!empty($reportId)) {
        // Perform the archive process and move the data to the archive_report table
        $con = mysqli_connect("localhost", "root", "", "qride_database");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // Fetch the report data from the reports table
        $query = "SELECT * FROM non_ua_reports WHERE id = '$reportId'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        

        // Convert the rating to an integer (assuming it's stored as a string)
        $rating = intval($row['rating']);

        // Insert the report data into the archive_report table
       $archiveQuery = "INSERT INTO archive_report (driver_name, plate_number, reason, email_address, complainant_number, rating, activity, driver_image_url)
                         VALUES ('" . $row['driver_name'] . "', '" . $row['plate_number'] . "', '" . $row['reason'] . "', '" .$row['email_address'] . "', '" . $row['complainant_number'] . "', '$rating', '" . $row['activity'] . "', '" . $row['driver_image_url'] . "')";
        mysqli_query($con, $archiveQuery);

        // Remove the report from the non_ua_reports table
        $deleteQuery = "DELETE FROM non_ua_reports WHERE id = '$reportId'";
        mysqli_query($con, $deleteQuery);

        mysqli_close($con);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Archived Reports</title>

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



</head>

<body>
    <!-- link for sidebar -->
    <?php include('./includes/archive_sidebar.php'); ?>

    <section class="sm:ml-64">
        <div class="hidden bg-white px-8 py-10 sm:flex lg:pl-28">
            <div class="space-y-2">
                <h1 class="font-roboto text-shade-black font-[900] text-3xl lg:text-5xl">
                    Welcome, <?php echo $_SESSION['username']; ?> 🎉
                </h1>
                <p class="font-roboto text-shade-gray">
                    Here are the archived reports in your QRide account today.
                </p>
            </div>
        </div>
        <div class="bg-shade-light-gray min-h-screen px-0 py-10 sm:px-8 lg:px-28">
            <div
                class="pl-10 flex items-center gap-3 before:content before:block before:bg-shade-black before:rounded-md before:h-8 before:w-3 sm:pl-0">
                <h3 class="font-roboto text-shade-black  uppercase text-lg">
                    Today's archived reports
                </h3>
            </div>
            <div class="bg-white mt-10 relative overflow-x-auto">
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
                                Complainant no.
                            </th>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Rating
                            </th>
                            <th scope="col" class="px-6 py-6 !font-[400] !tracking-normal">
                                Activity
                            </th>
                        </tr>
                    </thead>
                    <tbody class="font-roboto text-center">
                        <?php
    $con = mysqli_connect("localhost", "root", "", "qride_database");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $archiveQuery = "SELECT * FROM archive_report";
    $archiveResult = mysqli_query($con, $archiveQuery);

    while ($archiveRow = mysqli_fetch_assoc($archiveResult)) {
        echo "<tr>";
        echo "<td class='grid grid-cols-[54px,_120px] items-center py-4 font-medium text-shade-dark-gray-blue tracking-normal mt-3 gap-4'>
                    <img src='" . $archiveRow['driver_image_url'] . "' alt='Driver\'s Image' class='h-12 w-12 object-contain rounded-full'>
                    <p>" . $archiveRow['driver_name'] . "</p>
                </td>";
        echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $archiveRow['plate_number'] . "</td>";
        echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $archiveRow['reason'] . "</td>";
         echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $archiveRow['email_address'] . "</td>";
        echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $archiveRow['complainant_number'] . "</td>";
        echo "<td><div class='rating flex flex-row justify-center items-center gap-2'>";
        $ratingValue = intval($archiveRow['rating']);
        for ($i = 1; $i <= 5; $i++) {
            $checked = ($i <= $ratingValue) ? 'checked' : ''; 
            echo "<input type='radio' name='rating_" . $archiveRow['id'] . "' value='$i' class='mask mask-star-2 bg-shade-yellow' $checked disabled />";
        }
        echo "</div></td>";
        echo "<td class='py-3 text-shade-dark-gray tracking-normal font-[400]'>" . $archiveRow['activity'] . "</td>";
        echo "</tr>";
    }

    mysqli_close($con);
    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>

</html>