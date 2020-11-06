<?php
    include "./dbconn.php";

    if(isset($_POST['submit']))
    {
        // Counting No fo skilss
        $count = count($_POST["mytext"]);
        $count1 = count($_POST["answer"]);
        //Getting post values
        $skill=$_POST["mytext"];
        $answer = $_POST["answer"];
        $cor_ans = "";
        
        if($count1 > 1){
            $type = "checkbox";
        }else{
            $type = "radio";
        }
        // for($i=0; $i<$count1; $i++)
        // {
        //     $options1[$i] = $answer[$i];
        // }
        $options[0]=null; $options[1]=null; $options[2]=null; $options[3]=null; $options[4]=null; $options[5]=null; $options[6]=null;
        if($count > 1)
        {
            for($i=0; $i<$count; $i++)
            {
                $options[$i] = $skill[$i];
            }
            for($j=0; $j<$count1; $j++){
                $cor_ans =  $cor_ans.','.$options[$answer[$j]];  
            }
            echo "<script>alert('Skills inserted successfully');</script>";
            $sql =mysqli_query($connect," INSERT into questions(sub_code,description,option1,option2,option3,option4,option5,option6,option7,answer, type) VALUES(0,'how?','$options[0]','$options[1]','$options[2]','$options[3]','$options[4]','$options[5]','$options[6]', '$cor_ans', '$type')");
            
        }
        else
        {
            echo "<script>alert('Please enter skill');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="addques.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="main h-100 w-100">
        <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form name="add_name" id="add_name" method="post">
                <div class="form-group">
                    <label><h4>New Question</h4></label>
                    <textarea type="text" class="form-control" rows="5" placeholder="Type your Question"></textarea>
                </div>
                <label><h4>Options</h4></label>
                <div class="container1 form-group">
                    <div>
                    <button class="add_form_field delete_me btn btn-black mt-2">Add New Field &nbsp; 
                        <span style="font-size:16px; font-weight:bold;">+ </span>
                    </button>
                    <input class="ml-3 mul_ans" type="radio" name="type" value="checkbox" />Multiple Answers?
                    <input class="ml-3 sin_ans" type="radio" name="type" value="radio" />Single Answers?
                    </div>
                </div>
                <button type="submit" name="submit" id="submit" value="submit" class="btn btn-black">Done</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function() {
        var max_fields = 8;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");

        var x = 0;
        var mul_ans = $(".mul_ans");
        var sin_ans = $(".sin_ans");
        var z = "radio";
        $(mul_ans).click(function(e) {
            e.preventDefault();
            z = "checkbox"
            $(wrapper).prepend('<div class=""><input type="text" name="mytext[]" class="form-control mb-1" placeholder="Fill me"/><input class="mb-5" type="'+z+'" name="answer[]" value="'+x+'" />Correct Answer</div>');
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).prepend('<div class=""><input type="text" name="mytext[]" class="form-control mb-1" placeholder="Fill me"/><input class="mb-5" type="'+z+'" name="answer[]" value="'+x+'" />Correct Answer<button class="delete btn btn-danger ml-3">Delete</button></div>'); //add input box
                    
                } else {
                    alert('You Reached the limits')
                }
            });
        });
        $(sin_ans).click(function(e) {
            e.preventDefault();
            z = "radio"
            $(wrapper).prepend('<div class=""><input type="text" name="mytext[]" class="form-control mb-1" placeholder="Fill me"/><input class="mb-5" type="'+z+'" name="answer[]" value="'+x+'" />Correct Answer</div>');
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).prepend('<div class=""><input type="text" name="mytext[]" class="form-control mb-1" placeholder="Fill me"/><input class="mb-5" type="'+z+'" name="answer[]" value="'+x+'" />Correct Answer<button class="delete btn btn-danger ml-3">Delete</button></div>'); //add input box
                    
                } else {
                    alert('You Reached the limits')
                }
            });
        });
        
        

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>