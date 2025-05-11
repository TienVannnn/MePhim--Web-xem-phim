<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'content',
        'manager_id',
        'active'
    ];
    public function author()
    {
        return $this->hasOne(Manager::class, 'id', 'manager_id');
    }
}
