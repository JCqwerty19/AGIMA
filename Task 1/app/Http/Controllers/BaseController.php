<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FormService;

class BaseController extends Controller
{
    public function __construct(
        public FormService $formService
    ) {
        $this->formService = $formService;
    }
}
