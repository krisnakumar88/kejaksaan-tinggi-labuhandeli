<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subhalaman extends Model
{
    use HasFactory;

    protected $table = 'subhalaman';
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function halaman()
    {
        return $this->belongsTo(Halaman::class, 'id_halaman');
    }
    public function file(){
        return $this->hasOne(File::class, 'id', 'foto');
    }
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
