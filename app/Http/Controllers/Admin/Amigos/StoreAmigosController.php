<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Amigos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Amigos\StoreAmigoRequest;
use App\Models\Amigos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class StoreAmigosController extends Controller
{
    public function __invoke(StoreAmigoRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $amigos = Amigos::query()->create($data);


        return Redirect::route('amigos.edit', $amigos->id);
    }
}
