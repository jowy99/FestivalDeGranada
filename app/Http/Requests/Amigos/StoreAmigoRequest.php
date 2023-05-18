<?php

declare(strict_types=1);

namespace App\Http\Requests\Amigos;

use Illuminate\Foundation\Http\FormRequest;

class StoreAmigoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'N_AMIGO' => ['nullable'],
            'NOMBRE' => ['required'],
            'APELLIDOS' => ['required'],
            'CATEGORIA' => ['nullable'],
            'CARGO' => ['nullable'],
            'DNI' => ['required'],
            'CANTIDAD' => ['required'],
            'CONCEPTO' => ['nullable'],
            'IBAN' => ['required'],
            'EMAIL' => ['required'],
            'TELEFONO' => ['required'],
            'DIRECCION' => ['required'],
            'CP' => ['required'],
            'PROVINCIA' => ['required'],
            'VISUALIZAR_NOMBRE' => ['nullable']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
