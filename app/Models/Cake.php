<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;

    // Pada model Cake
    protected $fillable = ['nama', 'harga', 'foto', 'creator_name', 'creator_nim'];
}
