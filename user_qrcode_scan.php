<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scan QR Code</title>

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

</head>

<!-- content -->

<body>
    <section class="grid place-items-center h-screen py-5 px-5 md:px-10">
        <div class="qr-code pb-8 px-8 rounded-xl">
            <div class="py-8">
                <h1 class="text-shade-black font-inter text-xl text-center tracking-wide">
                    QRIDE
                </h1>
            </div>
            <div class="flex justify-center flex-col pt-5">
                <img src="./assets/images/qr-code-placeholder.png" alt="qr code placeholder">
            </div>
        </div>
        <input type="file" accept="image/*" capture="camera" style="display: none;" id="cameraInput">
        <button type="button" id="scanBtn"
            class="bg-shade-yellow text-shade-deep-blue font-roboto text-lg p-3 rounded-2xl w-full hover:text-shade-white hover:bg-shade-blue"
            onclick="openCamera()">
            Scan
        </button>
    </section>

    <script>
    function openCamera() {
        document.getElementById('cameraInput').click();
    }
    </script>
    <!-- custom js -->
    <script src="./src/script.js"></script>


</body>

</html>