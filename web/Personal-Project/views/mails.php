<?php 
    if(!$_SESSION['loggedin']){ 
        header('location:../index.php');
        exit;
    }
?><!DOCTYPE html>
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
    <title>Mails</title>
</head>
<body>
<?php
    include "../common/header.php";
?>
<main>
    <div class="container" style="margin-top:20px; margin-bottom:20px;">
    <div class="row align-content-center" style="height:80px; background-color:whitesmoke; border: 1px solid lightgray;">
                <h2 style="margin-left:30px; ">Mails</h2>
            </div>
            <div class="row">
                <div class="col-4" style="padding:30px;border: 1px solid lightgray;">
                    <div class="btn btn-primary btn-block"><i class="fa fa-plus" aria-hidden="true"> New mail</i></div>
                    <div class="btn btn-light btn-block ">All Emails</div>
                    <div class="btn btn-light btn-block ">Received</div>
                    <div class="btn btn-light btn-block ">Sent</div>
                    <div class="btn btn-light btn-block active">Contact us</div>
                </div>
                <div class="col-8">
                    <div class="row" style="padding:20px;border: 1px solid lightgray;">
                        <div class="form-check">
                            <input class="form-check-input" style="width:24px;height:24px;" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" style="font-size:24px; margin-left:20px;" for="defaultCheck1">
                                CONTACT US
                            </label>
                        </div>
                    </div>';
                    <?php
                        if(isset($mails)){
                            echo $mails;
                        }else {
                            echo '<p>No messages from Contact Us page</p>';
                        }
                    ?>                   
                </div>
            </div>';
        
    </div>
</main>
<?php
    include "../common/footer.php";
?>

    <div class="wrapper-body">
       
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
</body>

</html>