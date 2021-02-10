<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../styles.css"> <!-- /week2/Personal-project/week2-styles.css -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Registration</title>
</head>
<?php
    include "../common/header.php";
?>
<main>
<div class="container">
    <form action="../accounts/index.php" method="post" class="register-form">
        <h1 class="text-center">Register form</h1>
        <?php
        //tag to show any messages that may need to be displayed
        if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        } ?>
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control" id="name" required name="cl_firstname" <?php if(isset($cl_firstname)){echo "value='$cl_firstname'";}  ?>>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" required name="cl_lastname" <?php if(isset($cl_lastname)){echo "value='$cl_lastname'";}  ?>>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" required name="cl_email" <?php if(isset($cl_email)){echo "value='$cl_email'";}  ?>>
        </div>
        <div class="form-group">
            <label for="cellphone">Cell Phone</label>
            <input type="text" class="form-control" id="cellphone" required name="cl_phone" <?php if(isset($cl_phone)){echo "value='$cl_phone'";}  ?>>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" required name="cl_password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
        </div>
        <button type="submit" class="btn btn-primary" value="Login">Register</button>
        <!-- Add the action name - value pair -->
        <input type="hidden" name="action" value="register">
    </form>
    </div>
</main>

<?php
    include "../common/footer.php";
?>
<body>
    <div class="wrapper-body">
       
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
</body>

</html>