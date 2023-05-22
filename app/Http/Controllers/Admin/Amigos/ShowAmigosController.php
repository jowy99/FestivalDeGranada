<?php

namespace App\Http\Controllers\Admin\Amigos;

use App\Http\Controllers\Controller;
use App\Models\Amigos;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ShowAmigosController extends Controller
{
    public function __invoke(Request $request) : View
    {
        $amigos = Amigos::query()
            ->when(!empty($request->search), function ($query) use ($request){
                return $query->where($request->searchby, '=', $request->search);
            })
            ->when(!empty($request->order), function ($query) use ($request){
                $filter = explode('|', $request->order);
                return $query->orderby($filter[0], $filter[1]);
            })
            ->paginate(12);

        return view('amigos.amigos')
            ->with([
                'amigos' => $amigos,
            ]);

    }
}
