<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Amigos;

use App\Exports\AmigosExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class DownloadAmigosController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new AmigosExport(), 'amigos.xlsx');
    }
}
