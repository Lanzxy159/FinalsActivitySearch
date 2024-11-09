<?php 


function AllApplications($pdo){
    $sql = "SELECT * FROM MedicalJobs ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();    
    return $stmt->fetchAll();

}

function SubmitNewApplication($pdo, $First_name, $Last_name,
$Years_experience,$Job_title,$Specialization,$City, $Age){
    $sql = "INSERT INTO MedicalJobs(Firstname,Lastname,Years_experience,Job_title,Specialization,City,Age)  VALUES(?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$First_name, $Last_name,
    $Years_experience,$Job_title,$Specialization,$City, $Age]);
    if ($executeQuery) {
        return true;
    }
    else{
    }
}

function SearchApplication($pdo, $Search){
    $sql = "SELECT * FROM MedicalJobs 
    WHERE Firstname =  LIKE %?% ";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$Search]);
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
    else{
    }

}


?>