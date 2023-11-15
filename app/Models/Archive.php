<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $table = 'archive';
    protected $fillable = ['Maincat', 'filedate', 'userid', 'filepath', 'subject', 'keywords'];
}
