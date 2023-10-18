<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

     protected $fillable = [
        'owners',
        'total_of_animals'
    ];

    public function rules()
    {
        return [
            'owners' => 'required|array',
            'total_of_animals' => 'required|numeric',
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
