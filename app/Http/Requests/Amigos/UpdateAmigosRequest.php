<?php

declare(strict_types=1);

namespace App\Http\Requests\Amigos;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAmigosRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'N_AMIGO' => ['nullable'],
            'NOMBRE' => ['nullable'],
            'APELLIDOS' => ['nullable'],
            'CATEGORIA' => ['nullable'],
            'CARGO' => ['nullable'],
            'DNI' => ['nullable'],
            'CANTIDAD' => ['nullable'],
            'CONCEPTO' => ['nullable'],
            'IBAN' => ['nullable'],
            'EMAIL' => ['nullable'],
            'TELEFONO' => ['nullable'],
            'DIRECCION' => ['nullable'],
            'CP' => ['nullable'],
            'PROVINCIA' => ['nullable'],
            'VISUALIZAR_NOMBRE' => ['nullable']
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
