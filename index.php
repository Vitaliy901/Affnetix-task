<?php
require __DIR__ . '/vendor/autoload.php';

use App\DTO\CommentDTO;

$comment = new CommentDTO(
    'userName', 'amountReviews','rate',
    'header', 'content', 'date',
    'dateExperience' , 'country');

var_dump($comment);

?>