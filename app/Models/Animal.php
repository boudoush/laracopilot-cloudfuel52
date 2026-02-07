<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'identification',
        'species',
        'breed',
        'sex',
        'age',
        'weight',
        'health_book',
        'treatments',
        'vaccinations',
        'batch_size',
        'qr_code'
    ];

    protected $casts = [
        'age' => 'integer',
        'weight' => 'decimal:2',
        'batch_size' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany(AnimalFile::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}