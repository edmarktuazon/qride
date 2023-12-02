<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- tab logo image -->
    <link rel="shortcut icon" href="./assets/images/UA-Logo.png" type="image/x-icon">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <!-- navbar -->
    <header class="bg-shade-yellow py-5 px-5 md:px-10">
        <nav class="flex items-center justify-between">
            <img src="./assets/images/qride-trike-logo.png" alt="" class="w-[86px] h-16">
            <img src="./assets/images/UA-Logo.png" alt="" class="w-16 h-16">
        </nav>
    </header>

    <!-- content -->
    <section>
        <div class="bg-hero-bg-pattern-img bg-center bg-cover bg-no-repeat h-[510px] w-full"></div>
        <div class="w-full bg-[#F6F5F5] py-10 -mt-44 relative rounded-tr-3xl rounded-tl-3xl  px-5 z-50 md:px-10">
            <div class="grid gap-10">
                <div class="p-4 mx-auto rounded-full bg-white">
                    <img src="./assets/images/qride-trike-logo.png" alt="qride logo" class="w-auto h-28 md:h-32">
                </div>
                <h1 class="uppercase text-center text-shade-deep-blue text-4xl font-bold
                    md:text-5xl">
                    QRIDE
                </h1>
            </div>
            <div class="py-14">
                <h3 class="text-center text-shade-blue-purple font-roboto text-xl font-[500]">
                    Ensuring your Safety and
                    Fairness in every Ride
                </h3>
            </div>

            <a href="./user_qrcode_scan.php" class="flex justify-center">
                <button type="button"
                    class="bg-shade-yellow text-shade-deep-blue font-roboto text-lg p-3 rounded-2xl w-full max-w-[200px] hover:text-shade-white hover:bg-shade-blue">
                    Get Started
                </button>
            </a>

        </div>
    </section>

    <!-- custom js -->
    <script src="./src/script.js"></script>
</body>

</html>