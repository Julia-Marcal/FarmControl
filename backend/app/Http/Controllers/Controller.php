<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

     public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());

        $dataForm = $request->all();

        $data = $this->model->create($dataForm);

        return response()->json($data, 201);
    }

    public function show($id)
    {
        if (!$data = $this->model->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado!'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function update(Request $request, $id)
    {
        if (!$data = $this->model->find($id))
            return response()->json(['error' => 'Nada foi encontrado!'], 404);

        $this->validate($request, $this->model->rules());

        $dataForm = $request->all();

        $data->update($dataForm);

        return response()->json($data);
    }


    public function destroy($id)
    {
        if ($data = $this->model->find($id)) {

            $data->delete();
            return response()->json(['success' => 'Deletado com sucesso!']);
        } else {
            return response()->json(['error' => 'Nada foi encontrado!'], 404);
        }
    }
}
