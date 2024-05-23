<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    // se chiamaiamo la tabella in modo diverso dal Model 
    // possiamo specificare la tabella di riferimento
    // protected $table ='case';
}
