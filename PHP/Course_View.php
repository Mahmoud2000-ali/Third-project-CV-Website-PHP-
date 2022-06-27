<?php
include "../connectDB.php";
include '../function.php';
$users = CourseView($_GET['id']);

// print_r($id);
// die();
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

        <h1 class="font_h1_viewCV">Course "NetWork Management Admin"</h1>
        <div class="informationViewCV">
            <div class="PDateCV">
                <p class="textDate">From <?php echo $users['start_Date'] ?> To <?php echo $users['end_Date'] ?>,totally <?php echo $users['numberHours'] ?> training hours</p>
            </div>
            <br>

            <div>
                <p>Institution was "<?php echo $users['institution'] ?> Training Center"</p>
            </div>

            <div class="divPic">
                <img class="Pic" src="<?php echo '../Img/' . $users['file'] ?>" alt="NotFound">
            </div>
        </div>

</body>

</html>