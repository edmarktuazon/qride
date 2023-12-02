<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Information</title>

    <!-- tab logo image -->
    <link rel="shortcut icon" href="../assets/images/qride-trike-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../dist/output.css" />
    <!-- custom -->
    <link rel="stylesheet" href="../src/custom.css" />

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

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


</head>

<body>
    <!-- navbar -->
    <header class="custom-padding bg-shade-yellow py-5">
        <nav class="flex items-center justify-between">
            <img src="../assets/images/qride-trike-logo.png" alt="" class="w-[86px] h-16">
            <img src="../assets/images/UA-Logo.png" alt="" class="w-16 h-16">
        </nav>
    </header>

    <!-- content -->
    <section class="custom-padding max-w-3xl mx-auto">
        <div class="space-y-2 mt-10">
            <h1 class="text-shade-black font-inter font-[600] text-xl">Welcome Assumptionist 🎉</h1>
            <h2 class="text-shade-blue uppercase font-[600] text-xl">Meet your driver</h2>
        </div>

        <!-- info -->
        <div class="space-y-5 py-10">
            <div class="flex items-center gap-5">
                <img src="../assets/images/driver-image/charlon/driver-profile-image.jpg"
                    class="h-32 object-contain sm:h-48">
                <label for="driver_name" class="flex flex-col gap-2 
                w-full text-shade-blue font-[900] font-roboto text-base">
                    Name
                    <input type="text" id="driver_name" name="driver_name" value="Charlon Layug"
                        class="w-full p-0 bg-shade-white border-none text-shade-black font-normal text-base sm:text-2xl">
                </label>
            </div>
            <div class="space-y-2">
                <div class="flex">
                    <label for="toda" class="grid grid-cols-[113px,_1fr] gap-10 
                w-full text-shade-blue font-[900] font-roboto text-base">
                        TODA
                        <input type="text" id="toda" name="toda" value="UA MAIN GATE UNISITE SUBDIVISION DEL PILAR CSFP"
                            class="p-0 w-full bg-shade-white border-none text-shade-black text-base font-normal">
                    </label>
                </div>
                <div class="flex">
                    <label for="plate_number" class="grid grid-cols-[113px,_1fr] justify-start gap-10 
                w-full text-shade-blue font-[900] font-roboto text-base">
                        PLATE NO.
                        <input type="text" id="plate_number" name="plate_number" value="712WBD"
                            class="p-0 w-full bg-shade-white border-none text-shade-black text-base font-normal ">
                    </label>
                </div>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper !mb-10">
                <div class="my-14">
                    <h2 class="w-full text-shade-blue font-[900] font-roboto text-base">
                        TRICYCLE IDENTIFICATION
                    </h2>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full h-full rounded-xl !left-[-76px]">
                        <img src="../assets/images/driver-image/charlon/trike-image-01.jpg" alt="trike image"
                            class="object-cover">
                    </div>
                    <div class="swiper-slide w-full h-full rounded-xl !left-[-76px]">
                        <img src="../assets/images/driver-image/charlon/trike-image-02.jpg" alt="trike image"
                            class="object-cover">
                    </div>
                    <div class="swiper-slide w-full h-full rounded-xl !left-[-76px]">
                        <img src="../assets/images/driver-image/charlon/trike-image-03.jpg" alt="trike image"
                            class="object-cover">
                    </div>
                </div>
            </div>
            <a href="../driver-info/confirmation/report_confirmation_for_charlon.php">
                <button
                    class="bg-shade-yellow text-shade-deep-blue font-roboto text-lg p-3 rounded-2xl w-full hover:text-shade-white hover:bg-shade-blue">
                    Report
                </button>
            </a>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        centeredSlides: true,
        spaceBetween: 10,
        grabCursor: true,
    });
    </script>
    <!-- custom js -->
    <script src="../src/script.js"></script>
</body>

</html>