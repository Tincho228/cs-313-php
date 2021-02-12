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
    <title>My account</title>
</head>
<?php
    include "../common/header.php";
?>
<main>
    <div class="container">
        
        <h3>My account Details</h3>
        <?php
        if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        } ?>
        <ul class="list-group">
            <li class="list-group-item">Name: <?php if(isset($_SESSION['clientData']['cl_firstname'])){echo $_SESSION['clientData']['cl_firstname'];}?></li>
            <li class="list-group-item">Last name: <?php if(isset($_SESSION['clientData']['cl_lastname'])){echo $_SESSION['clientData']['cl_lastname'];}?></li>
            <li class="list-group-item">Email: <?php if(isset($_SESSION['clientData']['cl_email'])){echo $_SESSION['clientData']['cl_email'];}?></li>
            <li class="list-group-item">Phone number: <?php if(isset($_SESSION['clientData']['cl_phone'])){echo $_SESSION['clientData']['cl_phone'];}?></li>
        </ul>

        <a class="btn btn-dark" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=updateClient"><i class="fa fa-pencil" aria-hidden="true"></i>Modify account</a> 
        <hr>
        <h3>My reviews</h3>
        <hr>
        <h3>Membership Details</h3>
        <p>Membership not activated</p>
        <hr>
        <h3>My products</h3>

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