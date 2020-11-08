<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
    <style>
        p,#submit{
            margin-left: 80px;
        }
        h1,h2{
            text-align: center;
        }
    </style>
</head>
<body class='bg-secondary'>
    <div class="container">
    <?php
        require_once "connection.php";
        $code=$_GET['code'];
        $usn=$_SESSION['name'];

        $_SESSION['subject_code']=$_GET['code'];
        $query="select max(test) as num from enrolled where usn='$usn' and subject_id='$code'";
        $num=$database->query($query);
        $ans=$num->fetch_assoc();
        $_SESSION['test_num']=$ans['num']+1;
        $test_num=$_SESSION['test_num'];
        
        $query="select * from questions where subject_id='$code' and test_num='$test_num';";
        
        $tests=$database->query($query);

        if ($tests->num_rows > 0){
            echo "<h1 class='mt-5'>Questions</h1>";
            echo "<form class='mb-5' action='submit_answers.php' method='post'";
                echo "<div class='mt-5'>";
                    while($row = $tests->fetch_assoc()){
                        echo "<p>";
                        
                            echo "<b>".$row['number'].".".$row['description']."</b><br>";
                            for($i=1;$i<8;$i++){
                                if($row['option'.$i]!=null){
                                    echo "<input class='mt-3 mr-3' type=".$row['type']." name=".$row['number']."[]"." value=".$row['option'.$i].">".$row['option'.$i]."<br>";
                                }else{
                                    break;
                                }
                            }
                                                
                        echo "<hr/></p>";
                    }
                    echo "<input id='submit' class='btn btn-dark' type=submit>";
                echo "</div>";
            echo "</form>";
            }
        else{
            echo "<h2> No test Available</h2>";
        }
            
    ?>
    </div>
</body>
</html>