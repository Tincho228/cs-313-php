<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css"> <!-- /week2/personal-project/week2-styles.css -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Home</title>
</head>

<body>
    <div class="wrapper-body">
        <!-- Header -->
        <?php
            include "common/header.php";
        ?>
        <!-- Main -->
        <main>
            <section class="card-products">
                <div class="container">
                    <div class="col">
                        <h2 class="text-center section-padding">Get 20% off adding your package to the cart</h2>
                    </div>
                </div>
            <!--    <div class="container bg-light">
                    <div class="row justify-content-around section-padding">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/yoga.jpg" alt="Yoga Card image Cap">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-light">YOGA</h5>
                                <p class="card-text text-light">A group of physical, mental, and spiritual practices or disciplines which originated in ancient India.
                                Start your new experience with our instructors</p>
                                
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#yoga-card">
                                    Begin now!
                                </button>
                                
                                <div class="modal fade" id="yoga-card" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="col-md-6 modal-card modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <img class="navbar-logo" src="images/logo.png" alt="navbar logo">
                                                <h5 class="modal-title text-warning" id="exampleModalLabel">MAFUBA</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 ">
                                                        <div class="card" style="width: 18rem;">
                                                            <img class="card-img-top"
                                                                src="images/yoga.jpg"
                                                                alt="Yoga Card image Cap">
                                                            <div class="card-body bg-dark">
                                                                <h5 class="card-title text-light">YOGA</h5>
                                                                <p class="card-text text-light">A group of physical,
                                                                    mental, and
                                                                    spiritual practices or disciplines which originated
                                                                    in
                                                                    ancient
                                                                    India.
                                                                    Start your new experience with our instructors</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        
                                                            <h5>Price</h5>
                                                            <p class="display-4 text-danger">$75</p>
                                                            <h5>Product</h5>
                                                            <p>Yoga</p>
                                                            <h5>Schedule </h5>
                                                            <p> Saturday, Tuesday and Friday from 2 to 3 pm</p>
                                                            <h5>Instructor</h5>
                                                            <p>Robert</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart</button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <?php
                        if (isset($product_cards)){
                            echo $product_cards;
                        }

                        ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/weight.jpg" alt="Weight card image Cap">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-light">PERSONAL TRAINING</h5>
                                <p class="card-text text-light">Programming Safe and Effective Workouts.
                                Ensuring Safety, Health, and Welfare in Fitness Environments.
                                </p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#training-card">
                                    Begin now!
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="training-card" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="col-md-6 modal-card modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <img class="navbar-logo" src="images/logo.png" alt="navbar logo">
                                                <h5 class="modal-title text-warning" id="exampleModalLabel">MAFUBA</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 ">
                                                        <div class="card" style="width: 18rem;">
                                                            <img class="card-img-top"
                                                                src="images/weight.jpg"
                                                                alt="Yoga Card image Cap">
                                                            <div class="card-body bg-dark">
                                                                <h5 class="card-title text-light">PERSONAL TRAINING</h5>
                                                                <p class="card-text text-light">Programming Safe and Effective Workouts.
                                                                    Ensuring Safety, Health, and Welfare in Fitness Environments.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5>Price</h5>
                                                        <p class="display-4 text-danger">$75</p>
                                                        <h5>Product</h5>
                                                        <p>Personal Training</p>
                                                        <h5>Schedule </h5>
                                                        <p> Saturday, Tuesday and Friday from 2 to 3 pm</p>
                                                        <h5>Instructor</h5>
                                                        <p>Robert</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart</button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/spinning.jpg" alt="Card image cap">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-light">SPINNING</h5>
                                <p class="card-text text-light">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#spinning-card">
                                    Begin now!
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="spinning-card" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="col-md-6 modal-card modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <img class="navbar-logo" src="images/logo.png" alt="navbar logo">
                                                <h5 class="modal-title text-warning" id="exampleModalLabel">MAFUBA</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12 ">
                                                        <div class="card" style="width: 18rem;">
                                                            <img class="card-img-top"
                                                                src="images/spinning.jpg"
                                                                alt="Yoga Card image Cap">
                                                            <div class="card-body bg-dark">
                                                                <h5 class="card-title text-light">SPINNING</h5>
                                                                <p class="card-text text-light">Some quick example text to build on the card title and make up the
                                                                                                bulk of the card's content.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5>Price</h5>
                                                        <p class="display-4 text-danger">$75</p>
                                                        <h5>Product</h5>
                                                        <p>Spinning</p>
                                                        <h5>Schedule </h5>
                                                        <p> Saturday, Tuesday and Friday from 2 to 3 pm</p>
                                                        <h5>Instructor</h5>
                                                        <p>Robert</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart</button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="reviews">
                <div class="container">
                    <div class="col">
                        <h2 class="text-center">Reviews</h2>
                    </div>
                </div>
                <div class="container section-padding">
                    <div class="card card-margin-10">
                        <div class="card-header bg-transparent">
                            <img class="user-image" src="images/user_Linda.jpg" alt="small view of Jessica">
                            @RJessica
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <footer class="blockquote-footer">Saturday, 20 2021 <cite title="Source Title">member</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-margin-10">
                        <div class="card-header bg-transparent">
                            <img class="user-image" src="images/user_Linda.jpg" alt="small view of Jessica">
                            @RJessica
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <footer class="blockquote-footer">Saturday, 20 2021 <cite title="Source Title">member</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-margin-10">
                        <div class="card-header bg-transparent">
                            <img class="user-image" src="images/user_Linda.jpg" alt="small view of Jessica">
                            @RJessica
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </p>
                                <footer class="blockquote-footer">Saturday, 20 2021 <cite title="Source Title">member</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-us">
                <div class="container section-padding">
                    
                    <h2 class="text-center">about us</h2>
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit quas impedit beatae magnam cupiditate laudantium error veniam placeat nihil sunt
                    Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore libero in dignissimos cupiditate aperiam tenetur quae, magni quo pariatur. Doloremque quidem voluptas nemo non corporis, quod possimus culpa inventore reprehenderit?</p>

                </div>
            </section>
            <section class="instructors">
                <div class="container">
                    <div class="container-fluid">
                        <h2 class="text-center">Our instructors</h2>
                    </div>
                    <div class="row justify-content-around section-padding">
                        <div class="card" id="instructor-card" style="width: 12rem;">
                            <img class="card-img-top" id="instructor-image" src="images/instructor-Robert.jpg"
                                alt="Robert image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">Robert</h5>
                                <p class="card-text text-center">"Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Quis ea molestias dolorum veniam? Beatae aliquid incidunt delectus tenetur
                                    vero sit."</p>
                            </div>
                        </div>
                        <div class="card" id="instructor-card" style="width: 12rem;">
                            <img class="card-img-top" id="instructor-image" src="images/instructor-Robert.jpg"
                                alt="Robert image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">Robert</h5>
                                <p class="card-text text-center">"Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Quis ea molestias dolorum veniam? Beatae aliquid incidunt delectus tenetur
                                    vero sit."</p>
                            </div>
                        </div>
                        <div class="card" id="instructor-card" style="width: 12rem;">
                            <img class="card-img-top" id="instructor-image" src="images/instructor-Robert.jpg"
                                alt="Robert image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center">Robert</h5>
                                <p class="card-text text-center">"Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Quis ea molestias dolorum veniam? Beatae aliquid incidunt delectus tenetur
                                    vero sit."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="free-class"> 
                <div class="container-fluid free-class-bg-image">
                    <div class="container">
                    <div class="row">
                        <div class="col section-padding ">
                        </div>
                        <div class="col-md-6 col-sm-12 section-padding">
                            <form class="bg-free-class-form">
                                <h1 class="text-center text-light">Message Us For a 1 on 1 Coaching Session!</h1>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter name" required name="cus_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="number">Cell Phone</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1"
                                        placeholder="cell phone" name="cus_phone">
                                </div>
                                <div class="form-group">
                                    <label for="commment">Message</label>
                                    <textarea class="form-control" name="cus_body" id="comment" cols="30" rows="10"
                                        placeholder="Write your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-light">Send message</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
            include "common/footer.php";
        ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
</body>

</html>