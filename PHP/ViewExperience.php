<?php
include "../connectDB.php";
include '../function.php';
$users = getInformation("experiences");

?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/MyStyle.css">
</head>

<body>
    <header>

        <nav class="navigation">
            <ul class="nav_links">
                <li><a href="Home.php">Personal Information</a></li>
                <li><a href="ViewCourses.php">Courses Information</a></li>
                <li><a href="ViewExperience.php">Experiences Information</a></li>
                <li><a href="AddCourse.php">Add Course</a></li>
                <li><a href="AddExperience.php">Add Experiences</a></li>
            </ul>
        </nav>
        <div><img class="logo" src="../images/al.png"></div>
    </header>
    <div class="container">

        <h1 class="font_h1_ViewE">All Experiences Information</h1>
        <div class="informationViewE">

            <?php
            foreach ($users as $user) {
            ?>
                <p class="pInformation"> <?php echo $user['title'] ?> <sub class="subInformation"><?php echo $user['institution'] ?> / <?php echo $user['category'] ?></sub></p>

                <p class="PDate">From <?php echo $user['start_month'] ?> To <?php echo $user['end_month'] ?></p>

                <p style="margin-top: 35px; margin-bottom: 50px;">
                    <?php echo $user['description'] ?>
                </p>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>