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
    <title>Template</title>
</head>

<body>
<?php
    include "../common/header.php";
?>
<main>
<div class="container">
    <form action="../accounts/index.php" method="post" class="register-form">
        <h2>Update Account</h2>
        <?php
        //tag to show any messages that may need to be displayed
        if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        } ?>
        <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" class="form-control" id="name" required name="cl_firstname" value = <?php if(isset($_SESSION['clientData']['cl_firstname'])){echo $_SESSION['clientData']['cl_firstname'];}?>>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" required name="cl_lastname" value = <?php if(isset($_SESSION['clientData']['cl_lastname'])){echo $_SESSION['clientData']['cl_lastname'];}?>>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" required name="cl_email" value = <?php if(isset($_SESSION['clientData']['cl_email'])){echo $_SESSION['clientData']['cl_email'];}?>>
        </div>
        <div class="form-group">
            <label for="cellphone">Cell Phone</label>
            <input type="text" class="form-control" id="cellphone" required name="cl_phone" value = <?php if(isset($_SESSION['clientData']['cl_phone'])){echo $_SESSION['clientData']['cl_phone'];}?>>
        </div>

        <button type="submit" class="btn btn-primary" value="Modify account">Update account</button>
        <!-- Add the action name - value pair -->
        <input type="hidden" name="action" value="modifyAccount">
        <input type="hidden" name="cl_id" value="<?php if(isset($_SESSION['clientData']['cl_id'])){ echo $_SESSION['clientData']['cl_id'];} ?>">
    </form>
    <form action="../accounts/index.php" method="post" class="register-form">
        <h2>Update Password</h2>
        <?php
        //tag to show any messages that may need to be displayed
        if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        } ?>
        <div class="form-group">
            <label for="password">Enter new password</label>
            <input type="password" class="form-control" id="password" required name="cl_password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
            <span>At least 8 characters and has at least 1 uppercase character, 1 number and 1 special character.</span>
        </div>
        <button type="submit" class="btn btn-dark" value="Update password">Update password</button>
        <!-- Add the action name - value pair -->
        <input type="hidden" name="action" value="updatePassword">
        <input type="hidden" name="cl_id" value="<?php if(isset($_SESSION['clientData']['cl_id'])){ echo $_SESSION['clientData']['cl_id'];} ?>">
    </form>

</div>

</main>
<?php
    include "../common/footer.php";
?>         
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>