<header>
            <div class="container-fluid container-hero-image" style='background-color:url("images/hero-image.jpg");'>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                        <img class="navbar-logo" src="https://powerful-sierra-77608.herokuapp.com/Personal-Project/images/logo.png" alt="navbar logo">
                        <a class="navbar-brand text-warning" href="#">MAFUBA</a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project">Home</a></li>
                                <?php
                                if(isset($_SESSION['loggedin'])){
                                    if($_SESSION['clientData']['cl_level'] > 2){
                                    echo '
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/products/index.php">Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/memberships/index.php">Memberships</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/mails/index.php">Mails</a>
                                            </li>';
                                    } 
                                }
                                ?>
                                <li class="nav-item"><a class="nav-link" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/index.php#contactUs">Contact Us</a>
                                </li><li class="nav-item">
                                    <a class="nav-link" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/orders/index.php"><i class="fas fa-cart-arrow-down"></i> Cart
                                    <span class="text-danger">
                                                            <?php
                                                                if(isset($_SESSION['shopping_cart'])){
                                                                    $count = count($_SESSION['shopping_cart']);
                                                                    echo "(".$count.")";
                                                                }else {
                                                                    echo "0";
                                                            }?>
                                    </span></a>
                                </li>
                            </ul>
                        </div>
                        <?php        
                            if(isset($_SESSION['loggedin'])){
                                // Delete cookie based welcome message if loggedin
                                if(isset($_COOKIE['firstname'])){
                                    setcookie('firstname', "", strtotime('-1 year'), '/');
                                }
                                // Set Session based welcome message link if loggedin
                                echo "<a class='nav-link text-light' href='https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php' title='Click to register or login'><span>Welcome ". $_SESSION['clientData']['cl_firstname']."</span></a>";
                            }else if(isset($_COOKIE['firstname'])){
                                // If not loggedin
                                $_SESSION['cookieFirstname'] = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
                                echo "<span class='nav-link text-light'>Succesfully registered, ".$_SESSION['cookieFirstname']."</span>";
                            }
                        ?>
                        <?php
                            // if is not logged in show My Account
                            if(!isset($_SESSION['loggedin'])){
                                echo '<a class="nav-link text-light" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=login" title="login"><i class="fa fa-user" aria-hidden="true"></i> Log In</a>';
                            } elseif($_SESSION['loggedin']){
                                echo '<a class="nav-link text-light" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=Logout" title="logout"><i class="fa fa-user" aria-hidden="true"></i> Logout </a>';
                            } else {
                                echo '<a class="nav-link text-light" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=login" title="login"><i class="fa fa-user" aria-hidden="true"></i> Log In</a>';
                                }
                            ?>    
                    </div>
                </nav>
                <div class="jumbotron jumbotron-fluid bg-transparent">
                    <div class="container">
                        <h1 class="display-3 text-light hero-title">MAFUBA GYM & FITNESS</h1>
                        <p class="lead text-light">The perfect exercise for you</p>
                        <hr class="my-2">
                        <p class="text-light">Log in and start now!</p>
                        <p class="lead">
                            <a class="btn text-light btn-danger btn-lg" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=Login"
                                role="button">Start now!</a>
                        </p>
                    </div>
                </div>
            </div>
        </header>