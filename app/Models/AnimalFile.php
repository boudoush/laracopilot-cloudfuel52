<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_id',
        'file_name',
        'file_path',
        'file_type',
        'file_size',
        'description'
    ];

    protected $casts = [
        'file_size' => 'integer'
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}