<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'parent_id'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
