<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

function new_db_connection()
{
    // Variables for the database connection
    $hostname = 'labmm.clients.ua.pt';
    $username = "deca_19L4_38_dbo";
    $password = "00Fvf3TE";
    $dbname = "deca_19l4_38";

    // Makes the connection
    $local_link = mysqli_connect($hostname, $username, $password, $dbname);

    // If it fails to connect then die and show errors
    if (!$local_link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Define charset to avoid special chars errors
    mysqli_set_charset($local_link, "utf8");

    // Return the link
    return $local_link;
}
