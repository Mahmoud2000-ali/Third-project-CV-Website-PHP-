<?php 

include 'connectDB.php';


function getInformation($table)
{
    $sta = $GLOBALS['conn']->prepare("SELECT * FROM $table");
    $sta->execute();
    return $sta->fetchAll();
}

function CourseView($id)
{
    $sta = $GLOBALS['conn']->prepare("SELECT * FROM cours WHERE `id` = ?");
    $sta->execute([
        $id,
    ]);
    
    return $sta->fetch();
}

function createExperience($category, $title, $start_month, $end_month, $institution, $description)
{
    $sta = $GLOBALS['conn']->prepare('INSERT INTO experiences (`category`, `title`, `start_month`, `end_month`, `institution`, `description`) Values(?,?,?,?,?,?)');
    $sta->execute(array(
        $category,
        $title,
        $start_month,
        $end_month,
        $institution,
        $description
    )
);
}

function createCours($courseName, $numberHours, $start_Date, $end_Date, $institution, $url, $file ,$notes)
{
 

    $sta = $GLOBALS['conn']->prepare('INSERT INTO cours (`courseName`, `numberHours`, `start_Date`, `end_Date`, `institution`, `url`,`file` ,`notes`) Values(?,?,?,?,?,?,?,?)');
    $sta->execute(array(
        $courseName,
        $numberHours,
        $start_Date,
        $end_Date,
        $institution,
        $url,
        $file,
        $notes
    )
);
}
