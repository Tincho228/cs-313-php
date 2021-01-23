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
            <nav class="fixed-top bg-dark">
                <ul>
                    <li class="logo"><h1>LongBEACH JEANS</h1></li>
                    <li><a class="active" href="">Home</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="week3-control.php?action=cart"><span>
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
            <img src="images/hero-jeans.jpg" alt="hero image of header">
            <div class="hero-bodycopy">
                <h1>Fashion from California</h1>
                <p>Contact Us</p>
                
            </div>
        </div>
    </header>
    <main>
        
        <div class="wrapper-main">
        <h1>OUR NEW PRODUCTS >>>></h1>
        <section class="section-product">    
        <?php
        $items_offert = array(
            array(
                'id' => '1',
                'name' => 'Beach Season',
                'price' => '35',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '2',
                'name' => 'Open Sunset',
                'price' => '30',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '3',
                'name' => 'Heritage',
                'price' => '29',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            )
        );
        foreach($items_offert as $products => $product){
            $form = "<form method='post' action='week3-control.php'>";
            $form .="<div class='card-product'>";
            $form .="<img src=".$product['path']." alt=".$product['name'].">";
            $form .="<p class='card-title'>".$product['name']."</p>";
            $form .="<p class='price'>$".$product['price']."</p>";
            $form .="<input type='text' id='quantity' value='1' name='quantity'>";
            $form .="<input type='hidden' name='price' value=".$product['price'].">";
            $form .='<input type="hidden" name="name" value="'.$product['name'].'">';
            $form .="<input type='hidden' name='itemId' value=".$product['id'].">";
            $form .="<button type='submit' class='button-cart btn' name='action' value='addtocart'>Add to cart</button>";
            $form .="</div>";
            $form .="</form>";
            echo $form;
        }
        ?>
        </section>
        <h1>CATALOG >>>></h1>
        <section class="section-product section-wrap">    
        <?php
        $items_catalog = array(
            array(
                'id' => '4',
                'name' => 'Wrangler',
                'price' => '35',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '5',
                'name' => 'Levy´s',
                'price' => '30',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '6',
                'name' => 'Sportclub',
                'price' => '29',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '7',
                'name' => 'Calvin Klein',
                'price' => '35',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '8',
                'name' => 'Dafiti',
                'price' => '30',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '9',
                'name' => 'Truckers',
                'price' => '29',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '10',
                'name' => 'Light Blue',
                'price' => '30',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            ),
            array(
                'id' => '11',
                'name' => 'Topshop',
                'price' => '29',
                'quantity' => '1',
                'path' => 'images/product1.JPG'
            )
        );
        foreach($items_catalog as $products => $product){
            $form = "<form method='post' action='week3-control.php'>";
            $form .="<div class='card-product'>";
            $form .="<img src=".$product['path']." alt=".$product['name'].">";
            $form .="<p class='card-title'>".$product['name']."</p>";
            $form .="<p class='price'>$".$product['price']."</p>";
            $form .="<input type='text' id='quantity' value='1' name='quantity'>";
            $form .="<input type='hidden' name='price' value=".$product['price'].">";
            $form .='<input type="hidden" name="name" value="'.$product['name'].'">';
            $form .="<input type='hidden' name='itemId' value=".$product['id'].">";
            $form .="<button type='submit' class='button-cart btn' name='action' value='addtocart'>Add to cart</button>";
            $form .="</div>";
            $form .="</form>";
            echo $form;
        }
        ?>
            
        </section>
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