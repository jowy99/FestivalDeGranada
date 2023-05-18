<?php

namespace App\Http\Controllers\Admin\Amigos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amigos;
use Illuminate\Contracts\View\View;

class ShowAddAmigosController extends Controller
{
    public function __invoke(): View
    {
        return view('amigos.add');
    }
}
