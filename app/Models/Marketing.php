<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'start_date',
        'end_date',
        'budget',
        'status',
        // ... additional fields
    ];

    // Relationship examples
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}