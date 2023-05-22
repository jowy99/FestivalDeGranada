<?php

declare(strict_types=1);

namespace App\Http\Requests\Amigos;

use Illuminate\Foundation\Http\FormRequest;

class StoreAmigoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'n_amigo' => ['nullable'],
            'nombre' => ['nullable'],
            'apellidos' => ['nullable'],
            'dni' => ['nullable'],
            'telefono' => ['nullable'],
            'email' => ['nullable'],
            'cargo' => ['nullable'],
            'categoria' => ['nullable'],
            'provincia' => ['nullable'],
            'direccion' => ['nullable'],
            'codigo_postal' => ['nullable'],
            'visualizar' => ['nullable'],
            'iban' => ['nullable'],
            'cantidad' => ['nullable'],
            'concepto' => ['nullable']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
