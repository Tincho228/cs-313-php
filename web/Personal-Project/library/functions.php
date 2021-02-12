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
    $list = "<ul>";
    foreach($product_data as $product){
        $list .= "<li>".$product['pr_id']."</li>";
        $list .= "<li>".$product['pr_name']."</li>";
        $list .= "<li>".$product['pr_rpice']."</li>";
        $list .= "<li>".$product['pr_comment']."</li>";;
    }
    $list.="</ul>";
    return $list;
}

?>