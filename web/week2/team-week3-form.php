<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="week2/css/week3-styles.css">
    <title>Form HTML</title>
</head>
<body>
    
    <form method="post" action="team-week3-displayform.php">
        <div class="form_container">
            <h1>Team Activity Week 3</h1>
            <!-- Name -->
            <label for="name"><b>Name</b></label>
            <input id="name" type="text"name="name" required>
            <!-- Email -->
            <label for="email"><b>Email</b></label>
            <input id="email" type="email" name="email" required>
            <!-- Radio buttons -->
            <?php
            $majors = array("Computer Science", "Web Design and Development", "Computer information Technology", "Computer Engineering");
            $value = '<select name="major" id="major">'; 
            $value .= "<option>Choose a Classification</option>"; 
            foreach ($majors as $major) { 
                echo "<input type='radio' name='major' value='$major'>$major"; 
            } 
            $places = array(
                array("North America","NA"),
                array("South America","SA"),
                array("Europe","E"),
                array("Asia","AS"),
                array("Australia","AU"),
                array("Africa","AF"),
                array("Antarctica","AN"));
            foreach($places as $place){
                echo "<label for='$place[0]'>$place[0]</label>";
                echo "<input type='checkbox' id='$place[0]' name='place[]' value='$place[1]'><br>";
            }
            ?>
            <label for="comments"><b>Comments</b></label>
            <textarea id="comments" name="comments" rows="4" cols="50" required></textarea>
            
            <input type="submit" name="submit" id="regbtn" value="Submit">
        </div>
    </form>
</body>
</html>