<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css  -->
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Roboto google font  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <section>
        <div class="header">
            <div class="container">
                <div class="logo">
                    <img src="./assets/images/SparkLogo.png" alt="logo_img">
                </div>

                <div class="menu-icon" onclick="toggleSidebar()">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <div class="sidebar" id="sidebar">
                    <div class="close-icon" onclick="toggleSidebar()">&times;</div>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="sparkplane">
                    <img src="./assets/images/SparkPlane.png" alt="logo_img">
                </div>
                <div class="sparkwave">
                    <img src="./assets/images/SparkWave1.png" alt="logo_img">
                </div>

                <div class="headline">YOUR FINANCIAL FREEDOM <br> AT YOUR FINGERTIPS</div>
                <div class="sparkwave1">
                    <img src="./assets/images/SparkWave2.png" alt="logo_img">
                </div>

                <div class="sGirl d-flex justify-content-center">
                    <img src="./assets/images/SparkGirl.png" alt="logo_img">
                </div>
                <div class="badge training">Training and Mentorship</div>
                <div class="badge top-skill">Top Skill Courses</div>
                <div class="network">
                    <img src="./assets/images/SparkNetwork.png" alt="logo_img">
                </div>

                <div class="fram">
                    <img src="./assets/images/SparkFram.png" alt="logo_img">
                </div>

            </div>
        </div>
    </section>