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

function buildProductList($product_data){
    $list = "<h2>My product list</h2>
             <table class='table'>";
    $list .="<thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>First</th>
                <th scope='col'>Last</th>
                <th scope='col'>Handle</th>
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
                <td><a href='https://powerful-sierra-77608.herokuapp.com/Personal-Project/products/index.php?action=delete&pr_id=".urlencode($product['pr_id'])."'>Delete</a></td>
                <td><a href='https://powerful-sierra-77608.herokuapp.com/Personal-Project/products/index.php?action=modify-page&pr_id=".urlencode($product['pr_id'])."'>Modify</a></td>
             </tr>";
    
    }
    $list .= "</tbody></table>";
    return $list;
}

?>