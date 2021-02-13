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
    <div class="container-fluid position-relative bg-light">
                <h2 class="m-10">Checkout</h2>
            <div class="row row-cols-2 m-10">  
                <div class="col bg-light">
                    <h2 class="m-10">Contact information</h2>
                    <form method="post" action="../orders/index.php">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name='cl_email' class="form-control" id="email" aria-describedby="emailHelp" required value = <?php if(isset($_SESSION['clientData']['cl_email'])){echo $_SESSION['clientData']['cl_email'];}?>>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me for news and exclusive offers</label>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Phone number</label>
                            <input type="text" name='cl_phone' class="form-control" id="address" required value = <?php if(isset($_SESSION['clientData']['cl_phone'])){echo $_SESSION['clientData']['cl_phone'];}?>>
                        </div>
                        <button class="btn btn-dark" type="submit" name="action" value="confirmation">Buy now!</button>
                    </form>
                </div>         
                <div class="col bg-summary">
                    
                    <div class="table-responsive">
                        <h2 class="m-10" >Order summary</h2>
                         <table class="table table-stripped">
                        <tr>
                            <th>Product name</th>
                            <th>Comment</th>
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
                        $total = $total + ($values['pr_price']);
                        }
                        ?>
                        <tr>
                            <td colspan ="3" class="text-end">Total</td>
                            <td>$<?php echo number_format($total, 2) ?></td>

                        </tr>
                        <?php
                        } 
                        ?>
                        </table>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary m-10" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/orders/index.php">Go to Cart</a>
                        </div>
                    </div>
                </div> 
            </div>
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