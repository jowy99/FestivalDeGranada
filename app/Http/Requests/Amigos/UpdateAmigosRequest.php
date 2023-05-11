<?php

declare(strict_types=1);

namespace App\Http\Requests\Amigos;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAmigosRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'N_AMIGO' => ['integer'],
            'NOMBRE' => ['string'],
            'APELLIDOS' => ['string'],
            'CATEGORIA' => ['string'],
            'CARGO' => ['string'],
            'DNI' => ['string'],
            'CANTIDAD' => ['numeric'],
            'CONCEPTO' => ['string'],
            'IBAN' => ['string'],
            'EMAIL' => ['string'],
            'TELEFONO' => ['string'],
            'DIRECCION' => ['string'],
            'CP' => ['string'],
            'PROVINCIA' => ['string'],
            'VISUALIZAR_NOMBRE' => ['boolean']
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
