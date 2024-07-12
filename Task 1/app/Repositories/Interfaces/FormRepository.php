<?php

namespace App\Repositories\Interfaces;

use App\DTO\FormDataDTO;

interface FormRepository
{
    // Save data fucntion
    public function data(FormDataDTO $dto): bool;
}