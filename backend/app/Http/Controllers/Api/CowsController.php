<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chicken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChickenController extends Controller
{
    protected $model;

    public function __construct(Chicken $Chicken)
    {
        $this->model = $Chicken;
    }

    public function index()
    {
        $data = DB::select('SELECT * FROM chicken');

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

