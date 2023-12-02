<?php
include("auth_session.php");
$farePrices = array(
    'BALUYUT BRIDGE/OLD PUBLIC MARKET' => array('base' => 40, '1_student' => 40, '2_students' => 40, '2_or_more_students' => 60),
    'ALLIED ROUNDABOUT/PUREGOLD DOLORES' => array('base' => 50, '1_student' => 50, '2_students' => 50, '2_or_more_students' => 60),
    'NEW PUBLIC MARKET UP TO PETRON MCARTHUR' => array('base' => 50, '1_student' => 50, '2_students' => 50, '2_or_more_students' => 60),
    'GREENVILLE JASA EXIT' => array('base' => 50, '1_student' => 50, '2_students' => 50, '2_or_more_students' => 60),
    'LAGUNDI MEXICO DIVERSION LAGUNDI BRGY.HALL' => array('base' => 60, '1_student' => 60, '2_students' => 60, '2_or_more_students' => 80),
    'SM PAMP./ROBINSONS' => array('base' => 60, '1_student' => 60, '2_students' => 60, '2_or_more_students' => 80),
    'DOLORES INTERSECTION' => array('base' => 100, '1_student' => 100, '2_students' => 100, '2_or_more_students' => 100)

);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['fares'] as $destination => $fare) {
        $farePrices[$destination] = array(
            'base' => $fare['base'],
            '1_student' => $fare['1_student'],
            '2_students' => $fare['2_students'],
            '2_or_more_students' => $fare['2_or_more_students']
        );
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Price List</title>

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
</head>

<body>
    <!-- link for sidebar -->
    <?php include ('./includes/price_sidebar.php') ?>

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
        <div class="bg-shade-light-gray min-h-screen px-0 py-10 sm:px-8 lg:px-28">
            <div
                class="pl-10 flex items-center gap-3 before:content before:block before:bg-shade-black before:rounded-md before:h-8 before:w-3 sm:pl-0">
                <h3 class="font-roboto text-shade-black uppercase text-lg">
                    Price List
                </h3>
            </div>
            <div class="px-8 sm:px-0">
                <div class="mx-auto p-4 my-8 bg-shade-white rounded-lg w-full">
                    <h3 class="font-roboto text-lg text-shade-dark-gray text-center">
                        Fare Price
                    </h3>
                </div>
            </div>
            <div class="relative bg-shade-white overflow-x-auto">
                <form method="post">
                    <div class="flex justify-end gap-3 py-5 px-5">
                        <input type="button" value="Edit Price"
                            class="font-inter bg-shade-blue text-shade-white p-3 cursor-pointer">
                        <input type="submit" value="Save Changes" id="saveButton"
                            class="font-inter bg-shade-blue text-shade-white p-3 cursor-pointer">
                    </div>
                    <table class="text-center w-full text-sm">
                        <thead class="font-roboto text-shade-white p-10 text-base bg-shade-lighter-blue">
                            <tr>
                                <th scope="col" class="px-6 py-10 !font-[400] !tracking-normal">
                                    Destination
                                </th>
                                <th scope="col" class="px-6 py-10 !font-[400] !tracking-normal">
                                    Base Price
                                </th>
                                <th scope="col" class="px-6 py-10 !font-[400] !tracking-normal">
                                    1 Student
                                </th>
                                <th scope="col" class="px-6 py-10 !font-[400] !tracking-normal">
                                    2 Students
                                </th>
                                <th scope="col" class="px-6 py-10 !font-[400] !tracking-normal">
                                    2 or more students
                            </tr>
                        </thead>
                        <tbody class="font-roboto text-base text-shade-dark-gray tracking-normal">
                            <?php foreach ($farePrices as $destination => $fares) { ?>
                            <tr>
                                <td
                                    class="border-t-0 border-b-[1px] border-r-[1px] border-l-[1px] border-shade-gray py-10 px-6 uppercase text-shade-blue font-[500]">
                                    <?php echo $destination; ?>
                                </td>
                                <td class="border-t-0 border-b-[1px] border-r-[1px] border-shade-gray">
                                    <input type="text" name="fares[<?php echo $destination; ?>][base]"
                                        class="bg-shade-white border-none text-center"
                                        value="<?php echo $fares['base']; ?>">

                                </td>
                                <td class="border-t-0 border-b-[1px] border-r-[1px] border-shade-gray">
                                    <input type="text" name="fares[<?php echo $destination; ?>][1_student]"
                                        class="bg-shade-white border-none text-center"
                                        value="<?php echo  $fares['1_student']; ?>">
                                </td>
                                <td class="border-t-0 border-b-[1px] border-r-[1px] border-shade-gray">
                                    <input type="text" name="fares[<?php echo $destination; ?>][2_students]"
                                        class="bg-shade-white border-none text-center"
                                        value="<?php echo  $fares['2_students']; ?>">
                                </td>
                                <td class="border-t-0 border-b-[1px] border-r-[1px] border-shade-gray">
                                    <input type="text" name="fares[<?php echo $destination; ?>][2_or_more_students]"
                                        class="bg-shade-white border-none text-center"
                                        value="<?php echo  $fares['2_or_more_students']; ?>">
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
            </div>
    </section>


    <script>
    // edit price
    const editButtons = document.querySelector('input[type="button"]');
    const inputFields = document.querySelectorAll('input[type="text"]');
    const saveButton = document.getElementById("saveButton");

    editButtons.addEventListener("click", () => {
        inputFields.forEach((input) => {
            input.focus()

        });
    });

    function saveToLocalStorage() {
        const farePrices = {};

        inputFields.forEach((input) => {
            const name = input.getAttribute("name");
            const value = input.value;
            farePrices[name] = value;
        });

        localStorage.setItem("farePrices", JSON.stringify(farePrices));
    }

    function loadFromLocalStorage() {
        const savedFarePrices = localStorage.getItem("farePrices");

        if (savedFarePrices) {
            const farePrices = JSON.parse(savedFarePrices);

            inputFields.forEach((input) => {
                const name = input.getAttribute("name");
                if (farePrices[name] !== undefined) {
                    input.value = farePrices[name];
                }
            });
        }
    }

    saveButton.addEventListener("click", () => {
        saveToLocalStorage();
        alert("Fare price(s) saved");
    });

    window.addEventListener("load", loadFromLocalStorage);
    </script>


    <!-- custom js -->
    <script src="./src/script.js"></script>

    <!-- flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>