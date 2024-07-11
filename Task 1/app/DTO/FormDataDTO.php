<?php

namespace App\DTO;

class FormDataDTO
{
    public function __construct(
        public string $username,
        public string $email,
        public int $rating,
        public string $comment,
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->rating = $rating;
        $this->comment = $comment;
    }
}