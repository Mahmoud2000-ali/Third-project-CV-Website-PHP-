<?php

include "../connectDB.php";
include '../function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];
    if (empty($_POST['title'])) {
        $errors[] = 'the title is empty';
    }
    if (empty($_POST['start_month'])) {
        $errors[] = 'the start month is empty';
    }
    if (empty($_POST['end_month'])) {
        $errors[] = 'the end month is empty';
    }
    if (empty($_POST['institution'])) {
        $errors[] = 'the institution is empty';
    }
    if (empty($_POST['description'])) {
        $errors[] = 'the description is empty';
    }
    if (empty($errors)) {
        createExperience($_POST['category'], $_POST['title'], $_POST['start_month'], $_POST['end_month'], $_POST['institution'], $_POST['description']);
    } else {
        foreach ($errors as $error) {
?>
            <p><?php echo $error ?></p>
<?php
        }
    }
}

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

        <div class="informationAddE">

            <form class="mt-4" method="POST">

                <div class="category">
                    <label for="">Experiences Category:</label>
                    <select name="category">
                        <option value="Job">Job</option>
                        <option value="Freelancer">Freelancer</option>
                        <option value="Self_learning">Self learning</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="title">
                    <label for="">Experiences Title:</label>
                    <input type="text" name="title" id="title">
                </div>

                <div class="start_month">
                    <label for="">Start Month:</label>
                    <input type="date" name="start_month" id="start_month">
                </div>

                <div class="end_month">
                    <label for="">End Month:</label>
                    <input type="date" name="end_month" id="end_month">
                </div>

                <div class="institution">
                    <label for="">Institution:</label>
                    <input type="text" name="institution" id="institution">
                </div>

                <div class="description">
                    <label>Description:</label>
                    <textarea class="TextareaAddE" name="description" id="description" cols="50" rows="7"></textarea>
                </div>

                <div class="SaveBut">
                    <button type="submit" class="btnSave">Save</button>
                    <button type="reset" class="btnReset" >Reset</button>
                </div>
            </form>

        </div>
    </div>


    <div class="imagDiv">
        <div class="imagBorderAddE">
            <img class="p3" src="../images/p3.PNG">
        </div>
    </div>
    </div>
</body>

</html>