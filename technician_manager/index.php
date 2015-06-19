<?php 
require('../model/database.php');
require('../model/database_oo.php');
require('../model/technician_db.php');
require('../model/technician.php');

if (isSet($_POST['action'])) {
    $action = $_POST['action'];
}
else if (isSet($_GET['action'])) {
    $action = $_GET['action'];
}
else {
    $action = 'show_techs';
}

if ($action == 'show_techs') {
    $techs = TechnicianDB::get_technicians();
    include('show_techs.php');
}
else if ($action == 'delete_tech') {
    $techID = $_POST['techID'];
    TechnicianDB::delete_technician($techID);
    header("Location: .?action=show_techs");
}
else if ($action == 'add_tech') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    if (empty($firstName) || empty($lastName) || empty($email) || 
            empty($phone) || empty($password)) {
        $error = "Please check that all fields are filled in correctly.";
        include('../errors/error.php');
    }
    else {
        TechnicianDB::add_technician($firstName, $lastName, $email,
                $phone, $password);
        header("Location: .?action=show_techs");
    }
}

