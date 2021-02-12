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
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-cart-arrow-down"></i>Cart</a>
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
                                echo '<a class="nav-link text-light" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=login" title="login"><i class="fa fa-user" aria-hidden="true"></i>Log In</a>';
                            } elseif($_SESSION['loggedin']){
                                echo '<a class="nav-link text-light" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=Logout" title="logout"><i class="fa fa-user" aria-hidden="true"></i> Logout </a>';
                            } else {
                                echo '<a class="nav-link text-light" href="https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=login" title="login"><i class="fa fa-user" aria-hidden="true"></i>Log In</a>';
                                }
                            ?>
                        
                                           
                        
                    
                        
                    </div>
                </nav>
                <div class="jumbotron jumbotron-fluid bg-transparent">
                    <div class="container">
                        <h1 class="display-3 text-light hero-title">MAFUBA GYM and FITNESS</h1>
                        <p class="lead text-light">The perfect exercise for you</p>
                        <hr class="my-2">
                        <p class="text-light">Log in and start now!</p>
                        <p class="lead">
                            <a class="btn text-light btn-outline-danger btn-lg" href="Jumbo action link"
                                role="button">Start now!</a>
                        </p>
                    </div>
                </div>
            </div>
        </header>