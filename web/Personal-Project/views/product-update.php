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
    <title>Product update</title>
</head>
<body>
<?php
    include "../common/header.php";
?>
<main>
<div class="container">
    <form action="../products/index.php" method="post" class="register-form">
        <h2 >Product Update</h2>
        <?php
        //tag to show any messages that may need to be displayed
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        } ?>
        <div class="form-group">
            <label for="name">Product name</label>
            <input type="text" class="form-control" id="name" required name="pr_name" value = <?php if(isset($product_detail['pr_name'])){echo $product_detail['pr_name'];}?>>
        </div>
        <div class="form-group">
            <label for="price">Product price</label>
            <input type="number" class="form-control" id="price" required name="pr_price" value = <?php if(isset($product_detail['pr_price'])){echo "$ ".$product_detail['pr_price'];}?> >
        </div>
        <div class="form-group">
            <label for="comment">Make a comment</label>
            <textarea name="pr_comment" class="form-control" id="comment" cols="30" rows="5"><?php if(isset($product_detail['pr_name'])){echo $product_detail['pr_name'];}?></textarea>
        </div>
        <button type="submit" class="btn btn-dark" value="Add product">Add product</button>
        <!-- Add the action name - value pair -->
        <input type="hidden" name="action" value="updateProduct">
        <input type="hidden" name="pr_id" value = <?php if(isset($product_detail['pr_id'])){echo $product_detail['pr_id'];}?>>
    </form>
</div>
</main>
<?php
    include "../common/footer.php";
?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>