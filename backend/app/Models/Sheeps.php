<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheeps extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'baby_sheeps',
        'adult_sheeps',
        'expenses_adults_sheeps',
        'expenses_babies_sheeps',
        'total_expenses_sheeps'
    ];

    public function rules()
    {
        return [
            'total_of_sheeps' => 'required|numeric',
            'baby_sheeps' => 'numeric',
            'adult_sheeps' => 'numeric',
            'expenses_adults_sheeps' => 'numeric',
            'expenses_babies_sheeps' => 'numeric',
            'total_expenses_sheeps' => 'numeric'
        ];
    }
}
