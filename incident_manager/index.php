<?php 
require('../model/database.php');
require('../model/customer_db.php');
require('../model/registrations_db.php');
require('../model/incident_db.php');

if( isset($_POST['action']) ) {
    $action = $_POST['action'];
}
else if ( isset($_GET['action']) ) {
    $action = $_GET['action'];
}
else {
    $action = 'get_customer';
}

if($action == 'get_customer') {
    include('get_customer.php');
}
else if($action == 'verify_email') {
    $email = $_POST['email'];
    $customer = search_by_email($email);
    $registered_products = get_registered_products($customer['customerID']);
    include("create_incident.php");
}
else if($action == 'create_incident') {
    $customerID = $_POST['customerID'];
    $product_code = $_POST['productCode'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    add_incident($customerID, $product_code, $title, $description);
    include("incident_confirmation.php");
}