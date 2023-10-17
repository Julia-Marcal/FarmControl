<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cows extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'baby_cows',
        'adult_cows',
        'expenses_adults_cows',
        'expenses_babies_cows',
        'total_expenses_cows'
    ];

    public function rules()
    {
        return [
            'total_of_cows' => 'required|numeric',
            'baby_cows' => 'numeric',
            'adult_cows' => 'numeric',
            'expenses_adults_cows' => 'numeric',
            'expenses_babies_cows' => 'numeric',
            'total_expenses_cows' => 'numeric'
        ];
    }
}
