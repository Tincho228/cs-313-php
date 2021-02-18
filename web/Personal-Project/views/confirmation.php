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
    <title>Confirmation</title>
</head>
<body>
<?php
    include "../common/header.php";
?>
<main>
    <div class="container" style="margin-top:30px; margin-bottom:30px;">
        <div class="container-fluid bg-light">
            <div class="col">
                <img src="../images/purchase.jpg" style="width:25%;display:block;margin:auto;" alt="image of purchase">
                <h1>Your order just send</h1>
            </div>
        <div>
        <h3>Purchase Details</h3>
        <table class="table table-stripped">
            <tr>
                <th>Product name</th>
                <th>Comments</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <?php
                if(isset($_SESSION['shopping_cart'])){
                    $total = "0";
                        foreach($_SESSION['shopping_cart'] as $key => $values){
            ?>
                            <tr>
                                <td><?php echo $values['pr_name']; ?></td>
                                <td><?php echo $values['pr_comment']; ?></td>
                                <td>$<?php echo $values['pr_price']; ?></td>
                                <td><?php echo number_format($values['pr_price'], 2) ?></td>
                            </tr>
                            <?php
                            $total = $total + ($values['price']);
                            }
                            ?>
                            <tr>
                                <td colspan="3" class="text-end">Total</td>
                                <td>$<?php echo number_format($total, 2) ?></td>
                            </tr>
                            <?php
                }
            ?>
        </table>
        </div>
    <div>
    <h3>Contact Information</h3>
    <hr>
    <p>Email: <?php echo $_SESSION['clientData']['cl_email']; ?></p>
    <hr>
    <p>Phone: <?php echo $_SESSION['clientData']['cl_phone']; ?></p>
    <hr>
    </div>
        <h4>We will contact you to finish the purchase</h4>
        <a class="btn btn-dark" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/orders/index.php?action=clean">I understand</a>
    </div>
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