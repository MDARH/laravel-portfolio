<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable = ['label', 'url', 'order', 'parent_id'];

    // Define relationship with parent menu item (self-referencing)
    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    // Define relationship with child menu items (submenus)
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }
}
