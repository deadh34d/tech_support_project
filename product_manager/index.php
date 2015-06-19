<?php
require('../model/database.php');
require('../model/product_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'show_products';
}

if ($action == 'under_construction') {
    include('../under_construction.php');
}
else if ($action == 'show_products') {
    $products = get_products();
    include('show_products.php');
}
else if ($action == 'delete_product') {
    $product_code = $_POST['product_code'];
    delete_product($product_code);
    header("Location: .");
}
else if ($action == 'add_product') {
    $product_code = $_POST['product_code'];
    $name = $_POST['name'];
    $version = $_POST['version'];
    $release_date = $_POST['release_date'];
    
    if (empty($product_code) || empty($name) || empty($version) 
            || empty($release_date)) {
        $error = 'Please make sure all fields are entered correctly.';
        include('../errors/error.php');
    }
    else {
        /*************************************************
         * The code below allows a user to enter dates   *
         * without leading zeroes, and lets them use     *
         * /, \, or - to separate the different parts of *
         * the date. This code is incredibly ugly, but   *
         * it does work. I'm just as surprised as you    *
         * are.                                          *
         *************************************************/
        $month;
        $day;
        $year;
        
        $exploded_date = [];
        $exploded_date[0] = explode("/", $release_date);
        $exploded_date[1] = explode("\\", $release_date);
        $exploded_date[2] = explode("-", $release_date);
        
        foreach($exploded_date as $date) {
            for($i = 0; $i < count($date); ++$i) {
                if(strlen($date[0]) == 1) {
                    $month = '0' . $date[0];
                }
                else {
                    $month = $date[0];
                }
                
                if(strlen($date[1]) == 1) {
                    $day = '0' . $date[1];
                }
                else {
                    $day = $date[1];
                }
                
                if(strlen($date[2]) == 2) {
                    $year = '20' . $date[2];
                }
                else {
                    $year = $date[2];
                }
            }
            if(count($date) > 1) {
                $release_date = $date[2] . "-" . $date[0] . "-" . $date[1];
            }
        }
        
        add_product($product_code, $name, $version, $release_date);
        header("Location: .");
    }
}
?>