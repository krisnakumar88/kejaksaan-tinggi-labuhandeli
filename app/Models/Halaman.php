<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    use HasFactory;
    protected $table = 'halaman';
    protected $guarded = ['id'];

    
    public function subhalaman()
    {
        return $this->hasMany(Subhalaman::class, 'id_halaman');
    }
}
