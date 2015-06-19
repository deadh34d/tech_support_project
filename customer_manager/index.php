<?php
require("../model/database.php");
require("../model/customer_db.php");
require("../model/countries_db.php");

if (isSet($_POST['action'])) {
    $action = $_POST['action'];
}
else if (isSet($_GET['action'])) {
    $action = $_GET['action'];
}
else {
    $action = 'show_customers';
}

if ($action == 'show_customers') {
    $customers = get_customers();
    include("show_customers.php");
}
else if ($action == 'search_customers') {
    $last_name = $_POST['last_name'];
    $customers = search_by_last_name($last_name);
    include("show_customers.php");
}

else if ($action == 'select_customer') {
    $customerID = $_POST['customerID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $country_code = $_POST['country_code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $countries = get_countries();
    include("edit_customer.php");
}

else if ($action == 'update_customer') {
    $customerID = $_POST['customerID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $country_code = $_POST['country_code']; 
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    update_customer($customerID, $first_name, $last_name, $address,
            $city, $state, $postal_code, $country_code, $phone,
            $email, $password);
    header("Location: .?action=show_customers");
}