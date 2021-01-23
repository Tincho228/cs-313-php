<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="week2/css/week3-styles.css">
    <title>Form PHP</title>
</head>
<body>
    <div class="form_container">
        <?php
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $major = filter_input(INPUT_POST, 'major', FILTER_SANITIZE_STRING);
        $comments=filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
        $place=$_POST['place'];
        function myfunction($key){
            if($key==="NA"){
                return $key = "North America";
            }elseif($key==="SA"){
                return "South America";
            }
            elseif($key==="E"){
                return "Europe";
            }elseif($key==="AS"){
                return "Asia";
            }elseif($key==="AU"){
                return "Australia";
            }elseif($key==="AF"){
                return "Africa";
            }elseif($key==="AN"){
                return "Antarctica";
            }
        }
        echo "<h1>Users Data in PHP</h1>";
        echo "<p>User Name: ".$name."</p>";
        echo "<p>User Email: ".$email."</p>";
        echo "<p>Current major: ".$major."</p>";
        echo "<p>Comments: ".$comments."</p>";
        $pvisited =implode(", ", (array_map("myfunction",$place)));
        echo "<p>Places visited: ".$pvisited."</p>";
        ?>
    </div>
</body>
</html>