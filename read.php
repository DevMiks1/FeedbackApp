<?php
require ('database.php');

// set the default value
$sort = "DESC";
$column = "id";

if (isset($_GET['column']) && isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    $column = $_GET['column'];

    // toggle between ASC and DESC
    $sort = ($sort === "ASC") ? "DESC" : "ASC";
}

$queryTable = "SELECT * FROM feedback ORDER BY $column $sort";
$sqlFetch = mysqli_query($connection, $queryTable);




?>