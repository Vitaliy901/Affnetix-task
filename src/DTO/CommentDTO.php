<?php
namespace App\DTO;

class CommentDTO
{
    public function __construct(
        public readonly string $userName,
        public readonly string $amountReviews,
        public readonly string $rate,
        public readonly string $header,
        public readonly string $content,
        public readonly string $date,
        public readonly string $dateExperience,
        public readonly string $country,
    ) {}
}