<?php

function getReviews($id):array
{
    $db = new PDO("mysql:host=localhost;dbname=healthone", "root", "");
    $query = $db->prepare("SELECT CONCAT(u.fname, ' ', u.lname) as name, r.* FROM review r Left JOIN user u ON r.user_id = u.id WHERE product_id = :id ORDER BY r.date desc");
    $query->bindParam('id', $id);
    $query->execute();
    $review = $query->fetchAll(PDO::FETCH_CLASS, "Review");
    return $review;
}

?>


