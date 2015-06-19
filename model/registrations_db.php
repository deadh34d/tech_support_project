<?php

function add_registration($customerID, $product_code, $registration_date) {
    global $db;
    $query = "INSERT INTO registrations
              VALUES
              ('$customerID', '$product_code', '$registration_date')";
    $db->query($query);
}

function get_registered_products($customerID) {
    global $db;
    $query = "SELECT * FROM registrations
              WHERE customerID = '$customerID'";
    $registered_products = $db->query($query);
    return $registered_products;
}

