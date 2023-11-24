<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinations extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = "destinasions";
    public $primarykey = "id";
    public $guarded = ['id'];

}
