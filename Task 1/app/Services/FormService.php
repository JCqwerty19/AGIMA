<?php

namespace App\Services;

use App\DTO\FormDataDTO;
use App\Repositories\Interfaces\FormRepository;

class FormService
{
    public function __construct(
        public FormRepository $formRepository
    ) {
        $this->formRepository = $formRepository;
    }

    public function data(FormDataDTO $formData): bool
    {
        $dto = new FormDataDTO(
            username: $formData->username,
            email: $formData->email,
            rating: $formData->rating,
            comment: $formData->comment,
        );

        return $this->formRepository->data($dto);
    }
}