<?php

namespace App\Http\Controllers\Admin\Amigos;

use App\Http\Controllers\Controller;
use App\Models\Amigos;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ShowAmigosController extends Controller
{
    public function __invoke() : View
    {
        $amigos = Amigos::query()
            ->orderBy('N_AMIGO', 'asc')
            ->paginate(12);

        return view('Amigos.amigos')
            ->with('amigos', $amigos);
    }
}
