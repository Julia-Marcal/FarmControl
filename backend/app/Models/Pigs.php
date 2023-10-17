<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pigs extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'baby_pigs',
        'adult_pigs',
        'expenses_adults_pigs',
        'expenses_babies_pigs',
        'total_expenses_pigs'
    ];

    public function rules()
    {
        return [
            'total_of_pigs' => 'required|numeric',
            'baby_pigs' => 'numeric',
            'adult_pigs' => 'numeric',
            'expenses_adults_pigs' => 'numeric',
            'expenses_babies_pigs' => 'numeric',
            'total_expenses_pigs' => 'numeric'
        ];
    }
}
