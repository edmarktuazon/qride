<?php
   include("auth_session.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <!-- tab logo image -->
    <link rel="shortcut icon" href="./assets/images/qride-trike-logo.png" type="image/x-icon">

    <!-- output -->
    <link rel="stylesheet" href="./dist/output.css">
    <!-- custom -->
    <link rel="stylesheet" href="./src/custom.css">

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

    <style>
    .loader {
        position: relative;
        width: 130px;
        height: 100px;
        background-repeat: no-repeat;
        background-image: linear-gradient(#0277bd, #0277bd),
            linear-gradient(#29b6f6, #4fc3f7), linear-gradient(#29b6f6, #4fc3f7);
        background-size: 80px 70px, 30px 50px, 30px 30px;
        background-position: 0 0, 80px 20px, 100px 40px;
    }

    .loader:after {
        content: "";
        position: absolute;
        bottom: 10px;
        left: 12px;
        width: 10px;
        height: 10px;
        background: #fff;
        border-radius: 50%;
        box-sizing: content-box;
        border: 10px solid #000;
        box-shadow: 78px 0 0 -10px #fff, 78px 0 #000;
        animation: wheelSk 0.75s ease-in infinite alternate;
    }

    .loader:before {
        content: "";
        position: absolute;
        right: 100%;
        top: 0px;
        height: 70px;
        width: 70px;
        background-image: linear-gradient(#fff 45px, transparent 0),
            linear-gradient(#fff 45px, transparent 0),
            linear-gradient(#fff 45px, transparent 0);
        background-repeat: no-repeat;
        background-size: 30px 4px;
        background-position: 0px 11px, 8px 35px, 0px 60px;
        animation: lineDropping 0.75s linear infinite;
    }

    @keyframes wheelSk {

        0%,
        50%,
        100% {
            transform: translatey(0)
        }

        30%,
        90% {
            transform: translatey(-3px)
        }
    }

    @keyframes lineDropping {
        0% {
            background-position: 100px 11px, 115px 35px, 105px 60px;
            opacity: 1;
        }

        50% {
            background-position: 0px 11px, 20px 35px, 5px 60px
        }

        60% {
            background-position: -30px 11px, 0px 35px, -10px 60px
        }

        75%,
        100% {
            background-position: -30px 11px, -30px 35px, -30px 60px;
            opacity: 0;
        }
    }
    </style>
</head>

<body class="h-full">
    <!-- 
    <div class="relative h-screen grid place-items-center bg-shade-yellow z-50 overflow-hidden">
        <span class="loader"></span>
    </div> -->

    <!-- link for sidebar -->
    <?php include ('./includes/home_sidebar.php') ?>

    <!-- content -->
    <section class="sm:ml-64">
        <div class="hidden bg-shade-white px-8 py-10 sm:flex lg:pl-28">
            <div class="space-y-2">
                <h1 class="font-roboto text-shade-black font-[900] text-3xl lg:text-5xl">
                    Welcome, <?php echo $_SESSION['username']; ?> 🎉
                </h1>
                <p class="font-roboto text-shade-gray">
                    Here are the report in your QRide account today.
                </p>
            </div>
        </div>
        <div class="bg-shade-light-gray min-h-screen w-full px-8 py-10 sm:px-8 lg:px-28">
            <div class="flex items-center mb-20">
                <div class="flex items-center gap-5">
                    <!-- <img src="display_image.php?user_id=1" alt="User Image"> -->
                    <div class="flex flex-col gap-1">
                        <span class="text-shade-green">
                            Active
                        </span>
                        <h2 class="font-roboto text-shade-black text-2xl md:text-3xl">
                            <?php echo $_SESSION['username']; ?>
                    </div>
                </div>
            </div>
            <div
                class="flex items-center gap-3 before:content before:block before:bg-black before:rounded-md before:h-8 before:w-3">
                <h3 class="font-roboto text-shade-black  uppercase text-lg">
                    Admin workspace
                </h3>
            </div>
            <div class="flex flex-col w-full gap-10 mt-10 lg:flex lg:flex-row">
                <div class="bg-shade-white rounded-xl p-10 h-[300px] w-full sm:max-w-[500px]">
                    <div class="grid grid-cols-1 gap-4 h-[300px]">
                        <div class="order-1">
                            <h4 class="font-roboto text-shade-black  text-2xl lg:text-3xl">
                                Reports
                            </h4>
                        </div>
                        <div class="order-2 h-0">
                            <a href="admin_report_dashboard.php"
                                class="uppercase text-center block w-full rounded-lg text-shade-white p-3 font-roboto bg-shade-blue lg:w-64">
                                Open Report
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-shade-white rounded-xl p-10 h-[300px] w-full sm:max-w-[500px]">
                    <div class="grid grid-cols-1 gap-4 h-[300px]">
                        <div class="order-1">
                            <h4 class="font-roboto text-shade-black  text-2xl lg:text-3xl">
                                Update Price
                            </h4>
                        </div>
                        <div class="order-2 h-0">
                            <a href="admin_price_dashboard.php"
                                class="uppercase text-center block w-full rounded-lg text-shade-white p-3 font-roboto bg-shade-blue lg:w-64">
                                Price List
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- custom js -->
    <script src="./src/script.js"></script>

    <!-- flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <script>
    function searchReports() {
        const input = document.getElementById("reportSearch");
        const filter = input.value.toUpperCase();
        const table = document.querySelector("table");
        const rows = table.querySelectorAll("tr");

        for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
            const cells = rows[i].querySelectorAll("td");
            let shouldShow = false;

            for (let j = 0; j < cells.length; j++) {
                const cellText = cells[j].innerText.toUpperCase();
                if (cellText.includes(filter)) {
                    shouldShow = true;
                    break;
                }
            }

            rows[i].style.display = shouldShow ? "" : "none";
        }
    }
    </script>
</body>

</html>