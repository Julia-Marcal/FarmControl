<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pigs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PigsController extends Controller
{
    protected $model;

    public function __construct(Pigs $Pigs)
    {
        $this->model = $Pigs;
    }

    public function index()
    {
        $data = DB::select('SELECT * FROM pigs');

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

