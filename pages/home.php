<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href="../styles/output.css" rel="stylesheet" />
    <title>Avaleht - ShiningRP</title>
</head>

<?php include("./modules/navbar.php") ?>

<body class="bg-background">


    <?php include("./modules/caroussel.php") ?>

    <!-- Start Playing Section -->
    <div class="container mx-auto text-left">
        <div class="text-white mt-16 mb-6 ">
            <h2 class="text-3xl font-semibold ml-[160px]">Alusta mängimist</h2>
        </div>
        <div class="flex flex-col items-center mb-16">
            <!-- First Image and Text -->
            <div class="relative">
                <img src="../assets/SP_firstpic.png" alt="First Image"
                    class="h-[352px] w-[1120px] object-cover rounded-t-md">
                <div class="absolute top-4 left-4 text-white">
                    <p class="text-2xl font-bold ml-[32px] mt-[32px]">Logi discordiga sisse..</p>
                    <a href="landing.php">
                        <iconify-icon icon="logos:discord-icon" width="50" height="40"
                            class="ml-10 mt-2"></iconify-icon>
                    </a>
                </div>
            </div>

            <!-- Second Image and Text -->
            <div class="relative">
                <img src="../assets/SP_secpic.png" alt="Second Image" class="h-[352px] w-[1120px] object-cover">
                <div class="absolute top-4 right-4 text-white">
                    <p class="text-2xl font-bold mr-[32px] mt-[32px]">Täida whitelist..</p>
                    <a href="whitelist-form.php">
                        <iconify-icon icon="pajamas:review-list" width="60" height="62" class="ml-24"></iconify-icon>
                    </a>
                </div>
            </div>

            <!-- Third Image and Text -->
            <div class="relative">
                <img src="../assets/SP_thirdpic.png" alt="Third Image"
                    class="h-[352px] w-[1120px] object-cover rounded-b-md">
                <div class="absolute top-4 left-4 text-white">
                    <p class="text-2xl font-bold ml-[32px] mt-[32px]">Ja hakka mängima!</p>
                    <a href="#">
                        <iconify-icon icon="simple-icons:fivem" width="50" height="40"
                            class="ml-10 mt-3"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- News Section -->
    <div class="container-none mx-auto bg-alter text-left">
        <div class="text-black mt-16 mb-6 ">
            <h2 class="text-3xl font-semibold ml-[160px] mt-16">Visioon</h2>
        </div>
        <div class="flex flex-col items-center ">
            <!-- First Image and Text -->
            <div class="flex flex-row mb-16">
                <img src="../assets/SP_secpic.png" alt="Second Image" class="h-72 w-72">
            </div>

            <!-- Second Image and Text -->
            <div class="flex flex-row gap-64 mb-16">
                <h1>blah blah blah blah</h1>  
                <img src="../assets/SP_secpic.png" alt="Second Image" class="h-72 w-72">
                
            </div>

            <!-- Third Image and Text -->
            <div class="relative">
                <img src="../assets/SP_thirdpic.png" alt="Third Image"
                    class="h-[352px] w-[1120px] object-cover rounded-b-md">
                <div class="absolute top-4 left-4 text-white">
                    <p class="text-2xl font-bold ml-[32px] mt-[32px]">Ja hakka mängima!</p>
                    <a href="#">
                        <iconify-icon icon="simple-icons:fivem" width="50" height="40"
                            class="ml-10 mt-3"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include("./modules/footer.php") ?>

</html>