<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_of_animals',
        'baby_animals',
        'adult_animals',
        'expenses_adults',
        'expenses_babies',
        'total_expenses'
    ];

    public function rules()
    {
        return [
            'total_of_animals' => 'required|numeric',
            'baby_animals' => 'numeric',
            'adult_animals' => 'numeric',
            'expenses_adults' => 'numeric',
            'expenses_babies' => 'numeric',
            'total_expenses' => 'numeric'
        ];
    }
}
