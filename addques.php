<?php
    include "./dbconn.php";

    if(isset($_POST['submit']))
    {
        // Counting No fo skilss
        $count = count($_POST["mytext"]);
        //Getting post values
        $skill=$_POST["mytext"];
        $options[0]=null; $options[1]=null; $options[2]=null; $options[3]=null; $options[4]=null; $options[5]=null; $options[6]=null;
        if($count > 1)
        {
            for($i=0; $i<$count; $i++)
            {
                $options[$i] = $skill[$i];
            }
            echo "<script>alert('Skills inserted successfully');</script>";
            $sql =mysqli_query($connect," INSERT into questions(sub_code,description,option1,option2,option3,option4,option5,option6,option7,answer) VALUES(0,'how?','$options[0]','$options[1]','$options[2]','$options[3]','$options[4]','$options[5]','$options[6]',0)");
            echo($options[0]);echo($options[1]);echo($options[2]);echo($options[3]);
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
                    <label>New Question</label>
                    <textarea type="text" class="form-control" rows="5" placeholder="Type your Question"></textarea>
                </div>
                <div class="container1 form-group">
                    <label>Options</label>
                    <div><input type="text" name="mytext[]" class="form-control" placeholder="Fill me"></div>
                    <button class="add_form_field btn btn-black mt-2">Add New Field &nbsp; 
                      <span style="font-size:16px; font-weight:bold;">+ </span>
                    </button>
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
        var max_fields = 10;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).prepend('<div class="mb-3"><input type="text" name="mytext[]" class="form-control mb-1" placeholder="Fill me"/><button class="delete btn btn-danger">Delete</button></div>'); //add input box
            } else {
                alert('You Reached the limits')
            }
        });

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>