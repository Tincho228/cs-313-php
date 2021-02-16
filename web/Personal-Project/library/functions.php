<?php
// function that validates emails after being sanitized
function checkEmail($clientEmail){
 $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
 return $valEmail;
}

// Check the password for a minimum of 8 characters,
// at least one 1 capital letter, at least 1 number and
// at least 1 special character
function checkPassword($cl_password){
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
    return preg_match($pattern, $cl_password);
   }

// build the list of products available for the administrator
function buildProductList($product_data){
    $list = "<h2>My product list</h2>
             <table class='table'>";
    $list .="<thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>Product</th>
                <th scope='col'>Price</th>
                <th scope='col'>Comment</th>
                <th scope='col'>Path</th>
                <th scope='col'>Action</th>
                <th scope='col'>Action</th>
            </tr>
            </thead>";
    $list .="<tbody>";
    foreach($product_data as $product){
    $list .= "<tr>
                <th scope='row'>".$product['pr_id']."</th>
                <td>".$product['pr_name']."</td>
                <td>".$product['pr_price']."</td>
                <td>".$product['pr_comment']."</td>
                <td>".$product['pr_path']."</td>
                <td><a href='https://powerful-sierra-77608.herokuapp.com/Personal-Project/products/index.php?action=delete&pr_id=".urlencode($product['pr_id'])."'>Delete</a></td>
                <td><a href='https://powerful-sierra-77608.herokuapp.com/Personal-Project/products/index.php?action=modify-page&pr_id=".urlencode($product['pr_id'])."'>Modify</a></td>
             </tr>";
    
    }
    $list .= "</tbody></table>";
    return $list;
}

// Build the list card products for the home section
function buildCarProducts($product_data){
    $card = "<div class='container bg-light'>
    <div class='row justify-content-around section-padding'>";

    foreach($product_data as $product){
    $card.= "<div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='".$product['pr_path']."' alt='".$product['pr_name']." Card image Cap'>
            <div class='card-body bg-dark'>
                <h5 class='card-title text-light'>".$product['pr_name']."</h5>
                <p class='card-text text-light'>".$product['pr_comment']."</p>
                <!-- Button trigger modal -->
                <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#".$product['pr_name']."-card'>Begin now!</button>
                <!-- Modal -->
                <div class='modal fade' id='".$product['pr_name']."-card' tabindex='-1' role='dialog'
                    aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='col-md-6 modal-card modal-dialog' role='document'>
                    <form method='POST' action='orders/index.php'>
                        <div class='modal-content'>
                            <div class='modal-header bg-dark'>
                                <img class='navbar-logo' src='images/logo.png' alt='navbar logo'>
                                <h5 class='modal-title text-warning' id='exampleModalLabel'>MAFUBA</h5>
                                <button type='button' class='close' data-dismiss='modal'
                                    aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>
                            <div class='modal-body'>
                                <div class='row'>
                                    <div class='col-md-5 col-sm-12'>
                                        <div class='card' style='width: 18rem;'>
                                            <img class='card-img-top' src='".$product['pr_path']."' alt='".$product['pr_name']." Card image Cap'>
                                            <div class='card-body bg-dark'>
                                                <h5 class='card-title text-light'>".$product['pr_name']."</h5>
                                                <p class='card-text text-light'>".$product['pr_comment']."</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-7'>
                                        
                                            <h5>Price</h5>
                                            <p class='display-4 text-danger'>$".$product['pr_price']."</p>
                                            <h5>Product</h5>
                                            <p>".$product['pr_name']."</p>
                                            <h5>Schedule </h5>
                                            <p>".$product['pr_comment']."</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary'
                                    data-dismiss='modal'>Close</button>";
                                if(isset($_SESSION['loggedin'])){
                                    $card.="<button type='submit' class='btn btn-primary'><i class='fa fa-cart-arrow-down' aria-hidden='true'></i> Add to cart</button>"; 
                                    $card.="<input type='hidden' name='action' value = 'addtoCart'>";
                                    $card.="<input type='hidden' name='pr_name' value = '".$product['pr_name']."'>";
                                    $card.="<input type='hidden' name='pr_price' value = '".$product['pr_price']."'>";
                                    $card.="<input type='hidden' name='pr_comment' value = '".$product['pr_comment']."'>";
                                    $card.="<input type='hidden' name='pr_id' value = '".$product['pr_id']."'>";
                                    $card.="<input type='hidden' name='cl_id' value = '".$_SESSION['clientData']['cl_id']."'>";
                                }else {
                                    $card.="<a class='btn btn-primary text-light' href='https://powerful-sierra-77608.herokuapp.com/Personal-Project/accounts/index.php?action=login'><i class='fa fa-cart-arrow-down' aria-hidden='true'></i> Add to cart</a>
                                    <span class=''>**You are not logged in</span>";
                                }
                                $card.="
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>";
        
    }
    $card .= "</div>";
    return $card;
}

function buildmyproducts($productsByClient){
    $list ='<div class="col bg-summary">
                    <div class="table-responsive">
                         <table class="table table-stripped">
                        <tr class="text-primary">
                            <th>Product name</th>
                            <th>Comment</th>
                            <th>Price</th>
                        </tr>';
                        foreach($productsByClient as $values){
                        $list.='
                        <tr>
                            <td>'.$values['pr_name'].'</td>
                            <td>'.$values['pr_comment'].'</td>
                            <td>$ '.$values['pr_price'].'</td>
                        </tr>';
                        }
                        $list.= '</table></div></div>';
                        return $list;
}
function builMemList($dataMem){
    $list ='<div class="col bg-summary">
                    <div class="table-responsive">
                         <table class="table table-stripped">
                        <tr class="text-primary">
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>';
                        foreach($dataMem as $values){
                        $list.='
                        <tr>
                            <td>'.$values['cl_fisrtname'].'</td>
                            <td>'.$values['cl_lastname'].'</td>
                            <td>'.$values['cl_email'].'</td>
                            <td>'.$values['cl_phone'].'</td>
                            <td>'.$values['mem_date'].'</td>
                            <td>'.$values['mem_status'].'</td>
                            <td>'.$values['cl_email'].'</td>
                        </tr>';
                        }
                        $list.= '</table></div></div>';
                        return $list;
}
?>