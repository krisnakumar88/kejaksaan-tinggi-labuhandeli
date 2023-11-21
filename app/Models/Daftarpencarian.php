<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarpencarian extends Model
{
    use HasFactory;
    protected $table = 'data_dpo';
    protected $guarded = ['id'];
}
