<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

     protected $fillable = [
        'owner_id',
        'total_of_animals',
        'baby_animals',
        'adult_animals',
        'expenses_adults',
        'expenses_babies',
        'total_expenses'
    ];

    protected static function booted()
    {
        static::creating(function ($farm) {
            $farm->total_of_animals = 0;
            $farm->baby_animals = 0;
            $farm->adult_animals = 0;
            $farm->expenses_adults = 0;
            $farm->expenses_babies = 0;
            $farm->total_expenses = 0;
        });
    }

    public function rules()
    {
        return [
            'owner_id' => 'required',
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
