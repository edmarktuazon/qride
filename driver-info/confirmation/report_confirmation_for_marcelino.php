<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation</title>

    <!-- tab logo image -->
    <link rel="shortcut icon" href="../../assets/images/UA-Logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../../dist/output.css" />
    <!-- custom -->
    <link rel="stylesheet" href="../../src/custom.css" />

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
    <header class="custom-padding bg-shade-yellow">
        <nav class="flex items-center justify-between">
            <img src="../../assets/images/qride-trike-logo.png" alt="" class="w-[86px] h-16">
            <img src="../../assets/images/UA-Logo.png" alt="" class="w-16 h-16">
        </nav>
    </header>

    <!-- content -->
    <section class="custom-layout custom-height">
        <div class="custom-content">
            <div class="flex items-center gap-5">
                <img src="../../assets/images/driver-image/marcelino/driver-profile-image.jpg" alt="Driver's Image"
                    class="h-32 object-contain sm:h-48">
                <div class="flex flex-col gap-2">
                    <span class=" text-shade-blue font-[900] font-roboto text-sm">
                        Name
                    </span>
                    <h3 class="text-shade-black font-normal text-2xl">
                        Marcelino M. Parungao
                    </h3>
                </div>
            </div>
            <div class="py-28">
                <h3 class="text-center text-shade-black font-roboto text-xl font-[500]">
                    Do you want to continue?
                </h3>
            </div>
            <div class="flex flex-col items-center justify-center gap-5">
                <a href="../../driver-info/concern/concern_for_marcelino.php" class="w-full">
                    <button
                        class="bg-shade-yellow h-[53px] text-shade-deep-blue font-roboto text-lg p-3 rounded-2xl w-full hover:text-shade-white hover:bg-shade-blue">
                        Proceed
                    </button>
                </a>
                <a href="../../driver-info/marcelino_info.php" class="w-full">
                    <button
                        class="border-[1px] border-shade-yellow h-[53px] text-shade-deep-blue font-roboto text-lg p-3 rounded-2xl w-full hover:text-shade-white hover:bg-shade-blue hover:border-none">
                        Cancel
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- custom js -->
    <script src="../../src/script.js"></script>
</body>

</html>