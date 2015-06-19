<?php

function get_countries() {
    global $db;
    $query = "SELECT * FROM countries";
    $countries = $db->query($query);
    return $countries;
}

