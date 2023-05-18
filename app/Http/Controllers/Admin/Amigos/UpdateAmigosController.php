<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Amigos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Amigos\UpdateAmigosRequest;
use App\Models\Amigos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class UpdateAmigosController extends Controller
{
    public function __invoke(UpdateAmigosRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $amigos = Amigos::query()->findOrFail($id);
        $amigos->update($data);

        return Redirect::route('amigos.edit', $amigos->ID);
    }
}
