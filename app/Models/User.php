<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'location',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}