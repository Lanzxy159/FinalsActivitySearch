<?php
require_once 'dbConfig.php'; 
require_once 'models.php';



if (isset($_POST['SubmitNew'])) {
    $First_name = $_POST['Firstname'];
    $Last_name = $_POST['Lastname'];
    $Years_experience = $_POST['Years_experience'];
    $Job_title = $_POST['Job_title'];
    $Specialization = $_POST['Specialization'];
    $City = $_POST['City'];
    $Age = $_POST['Age'];
    $SubmitNewApplication = SubmitNewApplication($pdo, $First_name, $Last_name,
    $Years_experience,$Job_title,$Specialization,$City, $Age);
    if ($SubmitNewApplication) {
            header("Location: ../index.php");
            exit();
        } else {
            echo "Insert failed. Please try again.";
        }
}




if (isset($_POST['SearchApplication'])) {
    $Search = $_POST['Search'];
    $SearchApplication = SearchApplication($pdo, $Search);
    if ($SearchApplication) {
            header("Location:../Search.php");
            exit();
        } else {
            echo "Insert failed. Please try again.";
        }
}

?>
