<?php

namespace App\Exports;

use App\Models\Amigos;
use Maatwebsite\Excel\Concerns\FromCollection;
use \Illuminate\Support\Collection;

class AmigosExport implements FromCollection
{
    public function collection(): Collection
    {
        return Amigos::all();
    }
}
