<!doctype html>
<html lang="en">

<head>
    <title>LongBeach Jeans</title>
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
                    <li><a href="/personalHomepage/week3-control.php">Home</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a class="active" href="/week3-control.php?action=cart"><span>
                        <?php
                            if(isset($_SESSION['shopping_cart'])){
                                $count = count($_SESSION['shopping_cart']);
                                echo "(".$count.")";
                            }
                            else {
                                echo "0";
                            }
                        ?>
                    </span>Cart</a></li>
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
        
        <div class="table-responsive position-relative bg-light">
            <h1>ORDER DETAILS</h1>
            <table class="table table-stripped">
                <tr>
                    <th>Product name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
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
                    <td><a href="week3-control.php?action=delete&id=<?php echo $values['itemId']; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
                <?php
                    $total = $total + ($values['quantity']*$values['price']);
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
                    <a class="btn btn-primary m-10" href="week3-control.php">Go back Shopping</a>
                        <?php 
                            if(isset($total)){
                                if($total != "0"){
                                    echo '<a class="btn btn-dark m-10" href="week3-control.php?action=checkout">Checkout</a>';}
                            }
                        ?>
            </div>
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