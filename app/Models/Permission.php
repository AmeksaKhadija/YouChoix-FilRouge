<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permessions extends Model
{
    use HasFactory;
    protected $fillable = ['permessions_name'];
    protected $table = 'permessions';
}
