<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'img'
    ];

    /**
     * One pet to many categories Relationship
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
