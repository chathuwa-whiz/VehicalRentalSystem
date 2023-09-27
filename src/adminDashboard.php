<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminDashboard.css">
    <title>Dashboard</title>
</head>
<body>
    
    <!-- main headding row -->
    <div class="head">
        <!-- heading left -->
        <div class="headingLeft">
            <div class="headingLogoContainer">
                <img class="headingLogo" src="../asset/home/logo.png" alt="">
            </div>
        </div>

        <!-- heading center -->
        <div class="headingCenter">
            <a class="headingCenterItem" href="#">Home</a>
            <a class="headingCenterItem" href="../src/aboutus.html">About</a>
            <a class="headingCenterItem" href="../src/services.html">Services</a>
            <a class="headingCenterItem" href="../src/contactus.html">Contact</a>
            <a href="../src/item.html">item page</a>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem">Hotline +94 717654324</div>
        </div>
    </div>

    <!-- main body -->
    <div class="body">
        
        <!-- vehicle container -->
        <div class="vehicleContainer">
            <div class="vehicleItem">
                <!-- left side contents -->
                <div class="vehicleItemLeft">
                    <span class="vehicleItemId">001</span>
                    <span class="vehicleItemBrand">SUZUKI</span>
                    <span class="vehicleItemModel">Alto</span>
                </div>
                <!-- right side contents -->
                <div class="vehicleItemRight">
                    <button class="vehicleItemEdit">Edit</button>
                    <button class="vehicleItemDelete">Delete</button>
                </div>
            </div>
        </div>

        <!-- users container -->
        <div class="userContainer"></div>
        
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by Autolanka
    </div>

</body>
</html>