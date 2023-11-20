<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pejabatstruktural extends Model
{
    use HasFactory;
    protected $table = 'pejabat';
    protected $guarded = ['id'];

    // public function file(){
    //     return $this->hasOne(File::class, 'id', 'foto');
    // }

    // public function user(){
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }
}
