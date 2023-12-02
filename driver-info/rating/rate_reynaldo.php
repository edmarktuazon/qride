<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rate your driver</title>

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

    <!-- sweetalert2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.css">

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
    <section class="custom-layout">
        <form method=" post" name="submit_form"
            class="bg-[#F6F5F5] grid items-center gap-14 rounded-tr-3xl rounded-tl-3xl w-full py-8 px-8 mt-48 md:rounded-3xl md:px-14 md:mt-0"
            style="min-height: calc(100vh - 13rem) !important">
            <div class="grid content-between">
                <h5 class="text-shade-black font-roboto text-lg font-[500] text-center">
                    Rate your Driver
                </h5>
            </div>
            <div class="flex items-center gap-5">
                <img src="../../assets/images/driver-image/reynaldo/driver-profile-image.jpg" alt="Driver's Image"
                    class="h-32 object-contain sm:h-48">
                <input type="hidden" name="driver_image_url" id="driver_image_url"
                    value="./assets/images/driver-image/reynaldo/driver-profile-image.jpg">
                <div class="flex flex-col gap-2">
                    <span class=" text-shade-blue font-[900] font-roboto text-base">
                        Name
                    </span>
                    <h3 class="text-shade-black font-normal text-2xl">
                        Reynaldo Seranno
                    </h3>
                </div>
            </div>
            <input type="hidden" id="driver_name" name="driver_name" value="Reynaldo Seranno"
                class="p-0 w-full border-none text-shade-black font-normal text-2xl">
            <input type="hidden" id="toda" name="toda" value="SJMP TODA"
                class="p-0 w-full border-none text-shade-black text-base font-normal">
            <input type="hidden" id="plate_number" name="plate_number" value="1760 XT"
                class="p-0 w-full border-none text-shade-black text-base font-normal ">
            <textarea name="message" id="message" cols="30" rows="25"
                class="hidden bg-[#D9D9D9] w-full border-none  rounded-xl text-shade-black text-base font-normal"></textarea>
            <div class="rating flex flex-row justify-center items-center gap-5">
                <input type="radio" id="rating1" name="rating_1" value="1" class="mask mask-star-2 bg-shade-yellow"
                    checked />
                <input type="radio" id="rating2" name="rating_1" value="2" class="mask mask-star-2 bg-shade-yellow" />
                <input type="radio" id="rating3" name="rating_1" value="3" class="mask mask-star-2 bg-shade-yellow" />
                <input type="radio" id="rating4" name="rating_1" value="4" class="mask mask-star-2 bg-shade-yellow" />
                <input type="radio" id="rating5" name="rating_1" value="5" class="mask mask-star-2 bg-shade-yellow" />
            </div>
            <label for="email_address" class="grid gap-4 mb-10 w-full text-shade-blue font-[900] font-roboto text-sm">
                Enter your Email (Required)
                <input type="hidden" id="email_address" name="email_address"
                    class="py-3 pl-3 bg-[#D9D9D9] rounded-xl w-full border-none font-inter font-medium text-shade-black text-lg" />
            </label>
            <label for="complainant_number"
                class="hidden gap-4 w-full text-shade-blue font-[900] font-roboto text-base">
                Enter your Mobile Number (Required)
                <input type="hidden" id="complainant_number" name="complainant_number"
                    class="bg-[#D9D9D9] w-full border-none  rounded-xl text-shade-black text-base font-normal" />
            </label>
            <div class="flex gap-5 items-end">
                <button type="button" id="submitReynaldoReport"
                    class="bg-shade-yellow text-shade-deep-blue font-roboto text-lg p-4 rounded-2xl w-full hover:text-shade-white hover:bg-shade-blue">
                    Click here to submit report for UA Student only
                </button>
                <button type="button" id="submitReynaldoReportNonUa"
                    class="bg-shade-yellow text-shade-deep-blue font-roboto text-lg p-4 rounded-2xl w-full hover:text-shade-white hover:bg-shade-blue">
                    Click here to submit report for Non UA Student
                </button>
            </div>
        </form>
    </section>


    <!-- custom js -->
    <script src="../../src/script.js"></script>
    <script src="../../src/nonUaReport.js"></script>
    <script src="../../src/sms.js"></script>
    <script src="../../src/smsV2.js"></script>

</body>

</html>