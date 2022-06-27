<?php
include "../connectDB.php";
include "../function.php";
$users = getInformation("cours");
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
    <div class="containerViewC">
        <h1 class="font_h1_viewC">All Course Information</h1>

        <table>
            <tr class="t1">
                <th rowspan="2">#</th>
                <th rowspan="2">Course Name</th>
                <th rowspan="2">Total Hours</th>
                <th colspan="2">Date</th>
                <th rowspan="2">Institution</th>
                <th rowspan="2">Attachment</th>
                <th rowspan="2">Notes</th>
            </tr>

            <tr class="t1">
                <th>From</th>
                <th>To</th>
            </tr>
            
            <?php

            foreach ($users as $user) {

            ?>

                <tr class="t2">
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['courseName'] ?></td>
                    <td><?php echo $user['numberHours'] ?></td>
                    <td><?php echo $user['start_Date'] ?></td>
                    <td><?php echo $user['end_Date'] ?></td>
                    <td><?php echo $user['institution'] ?></td>
                    <td><a href="<?php echo empty($user['file']) ? $user['url'] : 'Course_View.php?id=' . $user['id']  ?>" style="color: blue;">View</td>
                    <td><?php echo $user['notes'] ?></td>
                </tr>
            <?php
            }

            ?>
        </table>

    </div>
</body>

</html>