<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PizzakController;

class Pizza extends Model
{
    protected $table = "pizzak";
    public $timestamps = false;             # updated / created letiltása
}
