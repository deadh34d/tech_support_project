<?php
function get_products() {
    global $db;
    $query = 'SELECT * FROM products
              ORDER BY productCode';
    $products = $db->query($query);
    return $products;
}

function delete_product($product_code) {
    global $db;
    $query = "DELETE FROM products
              WHERE productCode = '$product_code'";
    $db->exec($query);
}

function add_product($product_code, $name, $version, $date) {
    global $db;
    $query = "INSERT INTO products
              VALUES
              ('$product_code', '$name', '$version', '$date')";
    $db->query($query);
}
?>