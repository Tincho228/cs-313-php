<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/week2-styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <title>Personal Home Page</title>
</head>

<body>
    <div class="wrapper_body">
        <header>
            <nav>
                <ul>
                    <li><img src="images/home-icon.png" alt="home icon"></li>
                    <li><a class="active" href="/week2/personalHomepage/index.php">Home</a></li>
                    <li><img src="images/myprojects-icon.png" alt="my projects icon"></li>
                    <li><a href="/week2/personalHomepage/projects.php">My projects</a></li>
                </ul>

            </nav>
        </header>
        <main>
            <div class="hero_div">
                <img class="hero_image" src="images/computer.jpg" alt="hero image">
                <div class="user_div">git
                    <div class="user_box">
                        <img class="user_image" src="images/user.png" alt="user picture">
                        <h1>I AM <br> MARTIN</h1>
                    </div>
                    <p>Designs and more</p>
                    <p>Check out my projects</p>
                    <a class="button_go" href="#">GO</a>
                </div>
            </div>
            
            <section class="aboutme">
                <div class="left-col">
                    <div class="white_div">
                        <h5>Things that inspire Me</h5>
                        <div class="images_box">
                            <img src="images/disney.png" alt="image of disney">
                            <img src="images/netflix.png" alt="image of netflix">
                            <img src="images/jesus.png" alt="image of jesus">
                            <img src="images/byu.png" alt="image of byu logo">
                            <img src="images/youtube.png" alt="image of youtube">
                        </div>
                    </div>
                    <div class="white_div">
                    <h5>My Repositories</h5>
                        <div class="images_box">
                            <img src="images/github.png" alt="image of github">
                            <img src="images/heroku.png" alt="image of heroku">
                        </div>
                    </div>
                    <div class="white_div">
                    <h5>My Studies</h5>
                        <div class="images_box">
                        <div class="card-study">
                            <img src="images/technitian.png" alt="">
                            <p>Electronic <br>Technitian</p>
                        </div>
                        <div class="card-study">
                            <img src="images/frontend.png" alt="">
                            <p>Front End <br> Certificate</p>
                        </div>
                        <div class="card-study">
                            <img src="images/backend.png" alt="">
                            <p>Back End <br> Development <br> (In porgress)</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="right-col">
                    <div class="white_div">
                    <h5>I love design</h5>
                    <p>Since I was Little, I fellt captivated about how things work. 
                        I always go crazy with my Imagination.  I discovered that great 
                        designs brings a great experience to the user. I decided to créate 
                        that so I am very enthusiastic with each Project. I look after every 
                        detail and take enough time to make it perfect.</p>
                    <p>COME AND SEE BY YOURSELF</p>
                    <a class="button_see" href="#">VIEW NOW</a>
                    <h5>Social Media</h5>
                    <div class="socialmedia_div">
                        <img src="images/fcb-icon.png" alt="facebook link">
                        <img src="images/tlg-icon.png" alt="telegram link">
                        <img src="images/instg-icon.png" alt="instagram link">
                    </div>
                    <?php
                    $day = date("l jS");
                    $hour = date("h:i A");
                    echo "<p class='strd-day'>".$day."</p>";
                    echo "<p class='strd-hour'>".$hour."</p>";
                    ?>
                </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="wrapper_footer">
                <p>Martin Quintero - CS341 Back End Development – 2021 All rights reserved</p>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>