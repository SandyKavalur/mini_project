<?php
    require "connection.php";

    $id=$_POST['id'];
    $name=$_POST['name'];
    $role=$_POST['role'];
    $sem=$_POST['sem'];
    $password=$_POST['password'];

    $insert="insert into users values ('$id','$name','$role',$sem,'$password');";
    
    if($database->query($insert))
    {
        if($role=='student'){
            // $test=0;
            // $get_subjects="select subject_id from subjects where sem=$sem";
            // $insert_enrolled="insert into enrolled (usn,subject_id,test) values ('$id',?,$test);";

            // $subjects_result=$database->query($get_subjects);
            // $enrolled_result=$database->prepare($insert_enrolled);
            // $enrolled_result->bind_param("s",$code);

            // if ($subjects_result->num_rows > 0) {
            //     // output data of each row
            //     while($row = $subjects_result->fetch_assoc()) {
            //       $code=$row['subject_id'];
            //       $enrolled_result->execute();
            //     }
            // }

        }
        header("Location: ./login.html");
    }
    else{
        echo "error";
    }