<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/week2/css/week2-styles.css">
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
                    <li><a href="/week2/personalHomepage/index.php">Home</a></li>
                    <li><img src="images/myprojects-icon.png" alt="my projects icon"></li>
                    <li><a class="active" href="/week2/personalHomepage/projects.php">My projects</a></li>
                </ul>

            </nav>
        </header>
        <main>
            <div class="hero_div">
                <img class="hero_image" src="images/computer.png" alt="hero image">
                <div class="user_div">
                    <div class="user_box">
                        <img class="user_image" src="images/user.png" alt="user picture">
                        <h1>MY <br> PROJECTS</h1>
                    </div>
                    <p>If you like coding, this is the place</p>
                </div>
            </div>
            <section class="aboutme">
                <div class="left-col">
                    <div class="white_div">
                    <h5>Week 1</h5>
                        <div class="images_box">
                        <a href="#">
                        <div class="card-study">
                            <img src="images/hello.png" alt="capture page image">
                            <a href="../team-week1.html">Team Activity</a>
                        </div>
                        </a>
                        </div>
                    </div>
                    
                    <div class="white_div">
                    <h5>Week 2</h5>
                        <div class="images_box">
                        <a href="#">
                        <div class="card-study">
                            <img src="images/boxes.png" alt="capture page image">
                            <a href="../team-week2.html">Team activity</a>
                        </div>
                        </a>
                        <a href="#">
                        <div class="card-study">
                            <img src="images/homepage.png" alt="capture homepage image">
                            <a href="/week2/personalHomepage/index.php">homepage.php</p>
                        </div>
                        </a>
                        </div>
                    </div>
                    <div class="white_div">
                    <h5>Week 3</h5>
                        <div class="images_box">
                        <a href="../team-week3-form.php">
                        <div class="card-study">
                            <img src="images/boxes.png" alt="">
                            <p>Team activity</p>
                        </div>
                        </a>
                        <a href="#">
                        <div class="card-study">
                            <img src="images/homepage.png" alt="">
                            <p>homepage.php</p>
                        </div>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="right-col">
                    <div class="white_div">
                    <h1>CSE 341</h1>
                    <p>BACK END DEVELOPMENT II</p>
                    <p>All the links on the left are divided by weeks. Each week includes Team Activities and personal projects.</p>
                    
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
    <script src="js/main.js"></script>
</body>

</html>