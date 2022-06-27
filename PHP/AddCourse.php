<?php
include "../connectDB.php";
include '../function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $isFile = '';
    $isUrl = '';
    if (empty($_POST['courseName'])) {
        $errors[] = 'the course name is empty';
    }
    if (empty($_POST['numberHours'])) {
        $errors[] = 'the number Hours is empty';
    }
    if (empty($_POST['start_Date'])) {
        $errors[] = 'the start Date is empty';
    }
    if (empty($_POST['end_Date'])) {
        $errors[] = 'the end Date is empty';
    }
    if (empty($_POST['start_Date'])) {
        $errors[] = 'the start Date name is empty';
    }
    if (empty($_POST['institution'])) {
        $errors[] = 'the Institution is empty';
    }
    if (empty($_POST['notes'])) {
        $errors[] = 'the notes is empty';
    }

    if(isset($_POST['attachment'])){
        if ($_POST['attachment'] == "url") {
            $isUrl = $_POST['url'];
        } else {
           // $isFile = $_FILES['file'];
           $file = $_FILES['file'];
            $fileName= $file['name'];
            //print_r($fileName);
            $temp = $file['tmp_name'];
            $folder = "../Img/".$fileName;
            move_uploaded_file($temp,$folder);
          $isFile=$fileName;
        }
    }else{
        $errors[] = 'the attachment name is empty';
    }

 

    if (empty($errors)) {
        createCours($_POST['courseName'], $_POST['numberHours'], $_POST['start_Date'], $_POST['end_Date'], $_POST['institution'], $isUrl, $isFile, $_POST['notes']);
    }else{
        foreach ($errors as $error){
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


        <div class="informationAddC">
            <form action="" method="post"  enctype="multipart/form-data">
                <div class="courseName">
                    <label for="">Course Name:</label>
                    <input type="text" name="courseName" id="courseName">
                </div>

                <div class="numberHours">
                    <label for="">Number of Hours:</label>
                    <input type="number" name="numberHours" id="numberHours">
                </div>

                <div class="start_Date">
                    <label for="">Start Date:</label>
                    <input type="date" name="start_Date" id="start_Date">
                </div>

                <div class="end_Date">
                    <label for="">End Date:</label>
                    <input type="date" name="end_Date" id="end_Date">
                </div>

                <div class="institution">
                    <label for="">Institution:</label>
                    <input type="text" name="institution" id="institution">
                </div>

                <div class="attachment">
                    <label for="">Attachment:</label>

                    <input class="radio" type="radio" name="attachment" value="file"> File
                    <input class="radio" type="radio" name="attachment" value="url"> URL

                </div>

                <div class="url">
                    <label for="">URL:</label>
                    <input type="url" name="url" id="url">
                </div>

                <div class="file">
                    <label for="">File:</label>
                    <input type="file" name="file" id="file">
                </div>

                <div class="notes">
                    <label>Notes:</label>
                    <textarea class="TextareaAddC" name="notes" id="notes" cols="30" rows="7"></textarea>
                </div>

                <div class="SaveBut">
                    <button type="submit" class="btnSave">Save</button>
                    <button type="reset" class="btnReset" >Reset</button>
                    
                </div>
                
            </form>
        </div>
        <div class="imagDiv">
            <div class="imagBorderAddC">
                <img class="p2" src="../images/p2.PNG">
            </div>
        </div>
    </div>
</body>

</html>