<!doctype html>
<html lang="en">

<head>
    <title>Confirmation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/week3-styles.css">
</head>

<body>
    <header>
        <div class="hero-nav">
            <nav>
                <ul>
                    <li class="logo"><h1>LongBEACH JEANS</h1></li>
            
                        <?php
                            if(isset($_SESSION['shopping_cart'])){
                                $count = count($_SESSION['shopping_cart']);
                                echo "(".$count.")";
                            }
                            else {
                                echo "0";
                            }
                        ?>
                    
                </ul>
            </nav>
        </div>
        <div class="hero-image">
            <img src="personalHomepage/images/hero-jeans.jpg" alt="hero image of header">
            <div class="hero-bodycopy">
                <h1>Fashion from California</h1>
                <p>Contact Us</p>
                
            </div>
        </div>
    </header>
    <main>
        
        <div class="wrapper-main">
            <div class="container-fluid bg-light w-75 m-10 position-relative">

                <div class="row img-box">
                    <img src="personalHomepage/images/purchase.jpg" alt="image of purchase" class="img-center">
                    <h1 class="purchase-title">Your order<br> just shipped</h1>
                </div>
                <div class="row">
                    <h3>Purchase Details</h3>
                <table class="table table-stripped">
                    <tr>
                        <th>Product name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                    <?php
                    if(isset($_SESSION['shopping_cart'])){
                    $total = "0";
                    foreach($_SESSION['shopping_cart'] as $key => $values){
                    ?>
                    <tr>
                        <td><?php echo $values['name']; ?></td>
                        <td><?php echo $values['quantity']; ?></td>
                        <td>$<?php echo $values['price']; ?></td>
                        <td><?php echo number_format($values['quantity']*$values['price'], 2) ?></td>
                    </tr>
                    <?php
                    $total = $total + ($values['quantity']*$values['price']);
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
                    <h3>Shipping Details</h3>
                    <hr>
                    <p>Email: <?php echo $_SESSION['email']; ?></p>
                    <hr>
                    
                    <p>Address: <?php echo $_SESSION['address']; ?></p>
                    <hr>
                </div>
                <a class="btn btn-dark" href="week3-control.php?action=clearSession">Start shopping again!</a>
            
            </div>
        </div>
    </main>
    <footer>
        <div class="wrapper-footer">
            <p>CSE 341 Back End Development | Martin Quintero | All rights reserved</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>