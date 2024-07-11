<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

use App\DTO\FormDataDTO;

use App\Http\Requests\FormAgmiaRequest;

class FormController extends BaseController
{
    public function index()
    {
        return view('main.form');
    }

    public function data(FormAgmiaRequest $formRequest)
    {
        $data = $formRequest->validated();  

        $dto = new FormDataDTO(
            username: $data['username'],
            email: $data['email'],
            rating: $data['rating'],
            comment: $data['comment'],
        );

        $this->formService->data($dto);

        return back()->with('success', 'Thanks for your message!');
    }
}