<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Amigos;

use App\Http\Controllers\Controller;
use App\Models\Amigos;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class EditAmigosController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $amigos = Amigos::query()->findOrFail($id);

        return view('amigos.edit')->with([
            'amigo' => $amigos,
        ]);
    }
}
