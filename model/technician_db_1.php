<?php

function get_technicians() {
    global $db;
    $query = "SELECT * FROM technicians";
    $technicians = $db->query($query);
    return $technicians;
}

function delete_technician($techID) {
    global $db;
    $query = "DELETE FROM technicians
              WHERE techID = '$techID'";
    $db->exec($query);
}

function add_technician($firstName, $lastName, $email, $phone, $password) {
    global $db;
    $query = "INSERT INTO technicians
              VALUES ('', '$firstName', '$lastName', '$email', '$phone', 
              '$password')";
    $db->query($query);
}

class TechnicianDB {

    public static function get_technicians() {
        $db = Database::connect();
        $query = 'SELECT * FROM technicians;';
        $statement = $db->prepare($query);
        $statement->execute();
        $technicians = $statement->fetchAll();
        $statement->closeCursor();
        return $technicians;
    }

    public static function get_technician($technician_id) {
        $db = Database::connect();
        $query = 'SELECT * FROM technicians
                  WHERE techID = :technician_id';
        $statement = $db->prepare($query);
        $statement->bindValue(":technician_id", $technician_id);
        $statement->execute();
        $technician = $statement->fetch();
        $statement->closeCursor();
        return $technician;
    }

    public static function delete_technician($technician_id) {
        $db = Database::connect();
        $query = 'DELETE FROM technicians
                  WHERE techID = :technician_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':technician_id', $technician_id);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function edit_technician($technician_id,$firstName, $lastName, $email, $phone, $password) {
        $db = Database::connect();
        $query = 'UPDATE technicians
                  SET firstName = :firstName,
                    lastName = :lastName,
                    email = :email,
                    phone = :phone,
                    password = :password
                WHERE techID = :technician_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':techID', $technician_id);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();

    }

    public static function add_technician($firstName, $lastName, $email, $phone, $password) {
        $db = Database::connect();
        $query = 'INSERT INTO technicians
                     (firstName, lastName, email, phone, password)
                  VALUES
                     (:firstName, :lastName, :email, :phone, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>