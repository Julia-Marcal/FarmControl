<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $Users)
    {
        $this->model = $Users;
    }

    public function index()
    {

        $data = DB::select('SELECT users.id, users.name, users.email, users.phone, users.last_name, farm_user.user_id, farm_user.farm_id
        FROM users
        INNER JOIN farm_user ON farm_user.user_id = users.id');
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

