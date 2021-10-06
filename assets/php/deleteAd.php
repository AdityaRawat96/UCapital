<?php
session_start();
include('./connection.php');

$ma_ids;
$id =  $_POST['id'];
$asset = $_POST["asset"];
$deal = $_POST["deal"];

if ($deal == "buy") {
    if ($asset == "Real Estate") {
        $table = "real_estate";
    } else if ($asset == "NPE") {
        $table = "npe";
    } else if ($asset == "Credits") {
        $table = "npe";
    } else if ($asset == "Business Company") {
        $table = "business_company";
    } else if ($asset == "Start Up") {
        $table = "business_company";
    }
} else {
    if ($asset == "Real Estate") {
        $table = "real_estate";
    } else if ($asset == "NPE") {
        $table = "npe";
    } else if ($asset == "Credits") {
        $table = "credit";
    } else if ($asset == "Business Company") {
        $table = "business_company";
    } else if ($asset == "Start Up") {
        $table = "business_company";
    }
}
$sql = "delete from $table where ID = $id";
// print_r($sql);
$result = mysqli_query($con, $sql)
    or die('An error occurred! Unable to process this request. ' . mysqli_error($con));

if (mysqli_num_rows($result) > 0) {
    $response = array();
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}
