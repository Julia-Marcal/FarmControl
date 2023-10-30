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

        $farm = $this->model->create($dataForm);

        // Assuming $dataForm['owners'] is an array of user IDs.
        DB::table('farm_user')->insert([
            'user_id' => $dataForm['owners'],
            'farm_id' => $farm->id,
        ]);

        return response()->json($farm, 201);
    }
}
