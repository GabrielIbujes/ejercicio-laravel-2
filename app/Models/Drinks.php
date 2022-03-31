<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drinks extends Model
{
    use HasFactory;

    protected $connection = 'mysql_dev';
    public $table = 'drinks';
    public $timestamps  = true;
    protected $primaryKey = 'idDrinks';


    protected $fillable = [
        'nameDrink',
        'descriptionDrink'
    ];
}
