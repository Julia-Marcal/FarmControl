<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chicken extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'baby_chickens',
        'adult_chickens',
        'expenses_adults_chickens',
        'expenses_child_chickens',
        'total_expenses_chickens'
    ];

    public function rules()
    {
        return [
            'total_of_chickens' => 'required|numeric',
            'child_chickens' => 'numeric',
            'adult_chickens' => 'numeric',
            'expenses_adults_chickens' => 'numeric',
            'expenses_child_chickens' => 'numeric',
            'total_expenses_chickens' => 'numeric'
        ];
    }
}
