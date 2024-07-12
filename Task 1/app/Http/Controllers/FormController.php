<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

use App\DTO\FormDataDTO;

use App\Http\Requests\FormAgmiaRequest;

class FormController extends BaseController
{
    // View form page
    public function index()
    {
        return view('main.form');
    }

    // Save form data function
    public function data(FormAgmiaRequest $formRequest)
    {
        // Validate data after request
        $data = $formRequest->validated();  

        // Create DTO to show params
        $dto = new FormDataDTO(
            username: $data['username'],
            email: $data['email'],
            rating: $data['rating'],
            comment: $data['comment'],
        );

        // Save data to the file thorugh service and repository
        $this->formService->data($dto);

        // Return to the page with message
        return back()->with('success', 'Thanks for your message!');
    }
}