<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function getBlogLogoAttribute($value)
    {
        return asset('back/dist/img/logo-favicon/'.$value);
    }
    public function getBlogFaviconAttribute($value)
    {
        return asset('back/dist/img/logo-favicon/'.$value);
    }
}
