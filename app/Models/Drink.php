<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $connection = 'mysql_dev';
    public $table = 'drink';
    public $timestamps  = true;
    protected $primaryKey = 'idDrink';
}
