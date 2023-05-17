<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Amigos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amigos;

class DeleteAmigoController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $amigo = Amigos::query()->findOrFail($id);
        $amigo->delete();

        return redirect()->back();
    }
}
