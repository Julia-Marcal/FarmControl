<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CowsController extends Controller
{
    protected $model;

    public function __construct(Cows $Cows)
    {
        $this->model = $Cows;
    }

    public function index()
    {
        $data = DB::select('SELECT * FROM cows');

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());

        $dataForm = $request->all();

        $data = $this->model->create($dataForm);

        return response()->json($data, 201);
    }

}

