<?php

namespace App\Repositories\Interfaces;

use App\DTO\FormDataDTO;

interface FormRepository
{
    public function data(FormDataDTO $dto): bool;
}