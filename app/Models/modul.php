<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modul extends Model
{
    use HasFactory;

    protected $primary_key = 'modul_id';
    protected $table = 'modul';
    protected $guarded = [];
}