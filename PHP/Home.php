<?php
include "../connectDB.php";
include '../function.php';
$users = getInformation("information");
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/MyStyle.css">
    </head>
    <body>
        <header>
            
            <nav class="navigation" >
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

            <h1 class="font_h1">Personal Information</h1>
            <div class="informationHome">
                
                <div class="fullName">
                    <label class="classLabel">Full Name:</label>
                    <p class="Par"><?php echo $users[0]['full_name'] ?></p>
                </div>

                <div class="gender">
                    <label class="classLabel">Gender:</label>
                    <p class="Par"><?php echo $users[0]['gender'] ?></p>
                </div>

                <div class="Birth_Date">
                    <label class="classLabel">Birth Date:</label>
                    <p class="Par"><?php echo $users[0]['Birth_Date'] ?></p>
                </div>
                
                <div class="nationality">
                    <label class="classLabel">Nationality:</label>
                    <p class="Par"><?php echo $users[0]['nationality'] ?></p>
                </div>

                <div class="placeB">
                    <label class="classLabel">Place Of Birth:</label>
                    <p class="Par"><?php echo $users[0]['placeB'] ?></p>
                </div>

                <div class="jobTitle">
                    <label class="classLabel">Job Title:</label>
                    <p class="Par"><?php echo $users[0]['jobTitle'] ?></p>
                </div>

                <div class="yearEx">
                    <label class="classLabel">Year Of Experience:</label>
                    <p class="Par"><?php echo $users[0]['yearEx'] ?></p>
                </div>
            </div>

            <div class="imagDiv">
                <div class="imagBorderH">
                    <img class="imgImg" src="<?php echo $users[0]['pathImag'] ?>" alt="NotFound"> 
                </div>
            </div>
        </div>
    </body>
</html> 