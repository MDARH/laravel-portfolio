<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerContent extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'profession', 'photo', 'button_text', 'button_link'];
}
