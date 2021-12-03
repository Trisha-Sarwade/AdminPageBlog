<?php 
#table-blog
if (isset($_POST["submit"])) {
    /*$id=$_POST["blogid"];*/
    $conn = mysqli_connect('localhost', 'root', '', 'blog');
    $interviewer=$_POST["Interviewer"];
    $interviewee=$_POST["Interviewee"];
    $title=$_POST["title"];
    $dept=$_POST["Department"];
    $series=$_POST["Series"];
    $placenintern=$_POST["placeNintern"];
    $desc=$_POST["Desc"];
    $company=$_POST["company"];
    $qsummary=$_POST["QSummary"];
    $ques=$_POST["Ques"];
    $ans=$_POST["Answer"];
    $pic=$_POST["pic"];
    $linkedin=$_POST["linkedin"];
    $fb=$_POST["fb"];
    $ig=$_POST["ig"];


    $sql="INSERT INTO blog(Interviewer, Interviewee, Title, Department, Series, placeNintern, Description, Company, FacebookLink, linkedinList, InstaLink, photo) VALUES('$interviewer', '$interviewee', '$title', '$dept', '$series', '$placenintern', '$desc', '$company','$fb', '$linkedin', '$ig', '$pic',)";
    $sql2="INSERT INTO conversation(QSummary, Question, Answer) VALUES('$qsummary','$ques','$ans')";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql2);
    header("location: ../admin.php?error=none");
    
    require_once 'functions.inc.php';

    if (emptyInputSignup($interviewer,$interviewee,$title,$dept,$series,$placenintern,$desc,$company,$fb,$linkedin,$ig,$pic) !== false) {
        header("location: ../admin.php?error=emptyinput");
        exit();
    }  
    if (emptyInputConvo($qsummary,$ques,$ans) !== false) {
        header("location: ../admin.php?error=emptyconvo");
        exit();
    }
    

    
}

else {
    header("location: ../admin.php");
}