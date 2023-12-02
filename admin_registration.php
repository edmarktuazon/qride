<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <link rel="shortcut icon" href="./assets/images/qride-trike-logo.png" type="image/x-icon">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.27/sweetalert2.min.css">

</head>

<body>
    <?php
require('db.php');
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    $username = stripslashes($_POST['username']);
    $email = stripslashes($_POST['email']);
    $mobileNumber = stripslashes($_POST['mobile_number']);
    $password = stripslashes($_POST['password']);
    $activity = date("Y-m-d H:i:s");

    // Check if all fields are empty
    if (empty($username) || empty($email) || empty($mobileNumber) || empty($password)) {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'All fields are required',
                text: 'Please fill in all the required fields.',
            }).then(() => {
                location.href = 'admin_registration.php';
            });
        </script>";
    } else {
        // Check if the username or email already exists
        $checkQuery = "SELECT * FROM admin_accounts WHERE username = '$username' OR email = '$email'";
        $checkResult = mysqli_query($con, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Username or email already exists',
                    text: 'Please choose a different username or email.',
                }).then(() => {
                    location.href = 'admin_registration.php';
                });
            </script>";
        } else {
            // If username and email are unique, proceed with registration
            $query = "INSERT INTO `admin_accounts` (username, password, email, mobile_number, activity)
                      VALUES ('$username', '" . md5($password) . "', '$email', '$mobileNumber', '$activity')";

            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Registration successful',
                        confirmButtonText: 'Proceed to login'
                    }).then(() => {
                        location.href = 'admin_login.php';
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Registration failed',
                        text: 'An error occurred while registering. Please try again.',
                    }).then(() => {
                        location.href = 'admin_registration.php';
                    });
                </script>";
            }
        }
    }
} else {
    // Your registration form HTML here
?>

    <section class="bg-hero-bg-pattern-gradient bg-cover bg-no-repeat bg-center w-full h-full">
        <div class="grid grid-cols-1 h-full lg:grid-cols-2">
            <div
                class="bg-hero-bg-pattern-img bg-cover bg-no-repeat bg-center h-full py-0
                rounded-none px-0 flex items-center justify-end flex-col w-full lg:px-8 xl:px-0 lg:flex lg:justify-center lg:rounded-r-full lg:py-32">
                <form
                    class="text-center w-full min-h-[644px] grid gap-8 place-items-center py-10 px-10 rounded-tr-[50px] rounded-tl-[50px] bg-shade-light-gray  lg:px-8 lg:bg-transparent lg:py-0 lg:grid lg:rounded-none lg:gap-10 xl:px-0"
                    method="post" name="login">
                    <div>
                        <div class="grid place-items-center mb-4 lg:hidden">
                            <img src="./assets/images/qride-trike-logo.png" alt="" class="w-full h-28 md:h-32">
                        </div>
                        <h1 class="uppercase text-shade-deep-blue font-bold text-3xl md:text-5xl">
                            Sign up
                        </h1>
                    </div>
                    <div class="space-y-5 block items-center flex-col w-full lg:flex">
                        <!-- username -->
                        <div class="relative lg:w-[350px] xl:w-[528px]">
                            <input type="text" name="username" placeholder="Username"
                                class="py-3 pl-12 bg-shade-white rounded-xl w-full border-none lg:w-[350px] xl:w-[528px] font-inter font-medium text-shade-dim-gray text-lg" />
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26"
                                    fill="none">
                                    <path
                                        d="M22.1454 22.0983C22.7434 21.9783 23.0979 21.3509 22.7928 20.8227C22.1116 19.6432 21.0378 18.6068 19.6637 17.8171C17.8954 16.8008 15.7288 16.25 13.5 16.25C11.2711 16.25 9.10454 16.8008 7.33626 17.8171C5.96219 18.6068 4.8883 19.6432 4.2071 20.8226C3.90202 21.3509 4.2565 21.9783 4.85458 22.0983L5.62944 22.2538C10.8247 23.2964 16.1753 23.2964 21.3705 22.2538L22.1454 22.0983Z"
                                        fill="#00AEF9" />
                                    <ellipse cx="13.5" cy="8.66667" rx="5.625" ry="5.41667" fill="#00AEF9" />
                                </svg>
                            </div>
                        </div>
                        <!-- email address -->
                        <div class="relative">
                            <div class="relative lg:w-[350px] xl:w-[528px]">
                                <input type="email" name="email" placeholder="Email address"
                                    class="py-3 pl-12 bg-shade-white rounded-xl w-full border-none lg:w-[350px] xl:w-[528px] font-inter font-medium text-shade-dim-gray text-lg" />
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="17" viewBox="0 0 23 17"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.87868 0.87868C0 1.75736 0 3.17157 0 6V11C0 13.8284 0 15.2426 0.87868 16.1213C1.75736 17 3.17157 17 6 17H17C19.8284 17 21.2426 17 22.1213 16.1213C23 15.2426 23 13.8284 23 11V6C23 3.17157 23 1.75736 22.1213 0.87868C21.2426 0 19.8284 0 17 0H6C3.17157 0 1.75736 0 0.87868 0.87868ZM4.36851 4.0124C3.90197 3.71683 3.28416 3.85543 2.98859 4.32197C2.69302 4.7885 2.83162 5.40631 3.29816 5.70188L10.4296 10.22C11.0832 10.634 11.9168 10.634 12.5704 10.22L19.7018 5.70188C20.1684 5.40631 20.307 4.7885 20.0114 4.32197C19.7158 3.85543 19.098 3.71683 18.6315 4.0124L11.5 8.53049L4.36851 4.0124Z"
                                            fill="#00AEF9" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                        <!-- mobile number -->
                        <div class="relative">
                            <div class="relative lg:w-[350px] xl:w-[528px]">
                                <input type="number" name="mobile_number" placeholder="Phone number"
                                    class="py-3 pl-12 bg-shade-white rounded-xl w-full border-none lg:w-[350px] xl:w-[528px] font-inter font-medium text-shade-dim-gray text-lg"
                                    inputmode="numeric" pattern="[0-9]*" />
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="#00AEF9">
                                        <path
                                            d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- password -->
                        <div class="relative">
                            <div class="relative lg:w-[350px] xl:w-[528px]">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="py-3 pl-12 bg-shade-white rounded-xl w-full border-none lg:w-[350px] xl:w-[528px] font-inter font-medium text-shade-dim-gray text-lg" />
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M17 7.33333V6.5C17 3.73858 14.7614 1.5 12 1.5V1.5C9.23858 1.5 7 3.73858 7 6.5V7.33333"
                                            stroke="#A5D268" stroke-width="2" stroke-linecap="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.62868 7.04543C0.75 7.92411 0.75 9.33832 0.75 12.1667V15.6667C0.75 19.438 0.75 21.3236 1.92157 22.4952C3.09315 23.6667 4.97876 23.6667 8.75 23.6667H15.25C19.0212 23.6667 20.9069 23.6667 22.0784 22.4952C23.25 21.3236 23.25 19.438 23.25 15.6667V12.1667C23.25 9.33832 23.25 7.92411 22.3713 7.04543C21.4926 6.16675 20.0784 6.16675 17.25 6.16675H6.75C3.92157 6.16675 2.50736 6.16675 1.62868 7.04543ZM12 15.8334C13.0987 15.8334 13.75 15.0341 13.75 14.3334C13.75 13.6327 13.0987 12.8334 12 12.8334C10.9013 12.8334 10.25 13.6327 10.25 14.3334C10.25 15.0341 10.9013 15.8334 12 15.8334ZM15.75 14.3334C15.75 15.9432 14.5856 17.2991 13 17.7076V20.1667H11V17.7076C9.41441 17.2991 8.25 15.9432 8.25 14.3334C8.25 12.4004 9.92893 10.8334 12 10.8334C14.0711 10.8334 15.75 12.4004 15.75 14.3334Z"
                                            fill="#00AEF9" />
                                    </svg>
                                </div>
                                <div class="absolute right-5 top-[11px] cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30"
                                        fill="none" id="svgTogglePassword">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.31292 13.2977C4.8523 10.7523 8.43264 6.25 14.4999 6.25C20.5672 6.25 24.1476 10.7523 25.687 13.2977C26.1177 14.01 26.3331 14.3661 26.3114 14.963C26.2896 15.5598 26.0401 15.9116 25.5412 16.6153C23.7484 19.1436 19.7603 23.75 14.4999 23.75C9.2396 23.75 5.25149 19.1436 3.45872 16.6153C2.95975 15.9116 2.71027 15.5598 2.68851 14.963C2.66675 14.3661 2.88214 14.01 3.31292 13.2977ZM14.4999 20C17.1693 20 19.3333 17.7614 19.3333 15C19.3333 12.2386 17.1693 10 14.4999 10C11.8306 10 9.6666 12.2386 9.6666 15C9.6666 17.7614 11.8306 20 14.4999 20Z"
                                            fill="#00AEF9" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- submit btn -->
                        <div class="mt-8">
                            <button type="submit" name="submit" class="register-button bg-shade-yellow text-shade-black font-roboto rounded-full py-3 px-10
                            font-black text-xl cursor-pointer hover:bg-shade-deep-blue hover:text-shade-white">
                                Register
                            </button>
                        </div>
                        <!-- upload image -->
                        <!-- <div class="relative">
                            <div class="relative lg:w-[350px] xl:w-[528px]">
                                <label for="admin_image" class="grid gap-2 text-shade-deep-blue font-roboto font-[500]">
                                    Upload Photo
                                    <input type="file" name="admin_image" accept="image/*"
                                        class="bg-shade-white rounded-xl w-full border-none lg:w-[350px] xl:w-[528px] font-inter font-medium text-shade-dim-gray text-lg" />
                                </label>
                            </div>
                        </div> -->
                    </div>
                    <div class="space-y-6">
                        <!-- <p
                            class="text-center font-roboto font-[500] text-base text-shade-black lg:text-lg lg:text-shade-white">
                            or use your other accounts
                        </p>
                        <div class="flex flex-wrap justify-center items-center gap-2">
                            <a href="javascript:void(0)">
                                <img src="./assets/images/Facebook-logo 1.svg" alt="">
                            </a>
                            <a href="javascript:void(0)">
                                <img src="./assets/images/Instagram-logo-1.svg" alt="">
                            </a>
                            <a href="javascript:void(0)">
                                <img src="./assets/images/Google__G__Logo 1.svg" alt="">
                            </a>
                        </div> -->
                        <p class="font-roboto font-[500] text-base text-shade-black lg:text-lg lg:text-shade-white">
                            Already have an account?
                            <a href="admin_login.php" class="text-shade-blue underline lg:text-shade-yellow">
                                Sign in here
                            </a>
                        </p>
                        <p class="text-shade-black font-inter lg:text-shade-white">
                            QRide | 2023
                        </p>
                    </div>
                </form>
                <?php
    }
?>
            </div>
            <div class="min-h-screen hidden items-center justify-center flex-col px-8 lg:flex">
                <img src="./assets/images/qride-trike-logo.png" alt="qride logo" class="w-full max-w-[739px]">
                <h1 class="text-shade-yellow text-5xl font-roboto font-black leading-tight">
                    Ensuring Safety and <br> Fairness in Every Ride!
                </h1>
            </div>
        </div>
    </section>

    <!-- custom js -->
    <script src="./src/script.js"></script>
</body>

</html>