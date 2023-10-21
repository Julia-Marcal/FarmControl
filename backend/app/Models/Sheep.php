<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sheep extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'baby_sheep',
        'adult_sheep',
        'expenses_adults_sheep',
        'expenses_child_sheep',
        'total_expenses_sheep'
    ];

    public function rules()
    {
        return [
            'total_of_sheep' => 'required|numeric',
            'child_sheep' => 'numeric',
            'adult_sheep' => 'numeric',
            'expenses_adults_sheep' => 'numeric',
            'expenses_child_sheep' => 'numeric',
            'total_expenses_sheep' => 'numeric'
        ];
    }
}
