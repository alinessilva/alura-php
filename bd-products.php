<?php

function listProducts($connection){
    $products = [];
    $result = mysqli_query($connection, "select * from products");
    while ($product = mysqli_fetch_assoc($result)){
        array_push($products, $product);
    }
    return $products;
}

function addProduct($connection, $name, $price){
    $query = "insert into products (name, price) values ('{$name}', {$price})";
    return mysqli_query($connection, $query);
}

function removeProduct($connection, $products_id) {
    $query = "delete from products where products_id = {$products_id}";
    return mysqli_query($connection, $query);
}