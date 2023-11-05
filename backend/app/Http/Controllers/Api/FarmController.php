<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Farm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class FarmController extends Controller
{
    protected $model;

    public function __construct(Farm $farms)
    {
        $this->model = $farms;
    }

    public function index()
    {
        $data = DB::select('SELECT * FROM farms');

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());

        $dataForm = $request->all();

        $dataForm['total_of_animals'] = 0;
        $dataForm['baby_animals'] = 0;
        $dataForm['adult_animals'] = 0;
        $dataForm['expenses_adults'] = 0;
        $dataForm['expenses_babies'] = 0;
        $dataForm['total_expenses'] = 0;

        $farm = $this->model->create($dataForm);

        return response()->json($farm, 201);
    }
}
