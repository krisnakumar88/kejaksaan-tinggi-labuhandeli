<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutanketua extends Model
{
    use HasFactory;
    protected $table = 'sambutan';
    protected $guarded = ['id'];

    public function file(){
        return $this->hasOne(File::class, 'id', 'foto');
    }
}
