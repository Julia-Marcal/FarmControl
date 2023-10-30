<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

     protected $fillable = [
        'owners',
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
            'owners' => 'required',
            'total_of_animals' => 'required|numeric',
            'child_animals' => 'numeric',
            'adult_animals' => 'numeric',
            'total_expenses' => 'numeric',
            'expenses_adults' => 'numeric',
            'expenses_child' => 'numeric',
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
