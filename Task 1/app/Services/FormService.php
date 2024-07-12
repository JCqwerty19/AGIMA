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

    // Save data fucntion
    public function data(FormDataDTO $formData): bool
    {
        // Create DTO to show params
        $dto = new FormDataDTO(
            username: $formData->username,
            email: $formData->email,
            rating: $formData->rating,
            comment: $formData->comment,
        );

        // Save data through repository
        return $this->formRepository->data($dto);
    }
}