<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body']; //fillable hanya yang ditulis yang boleh diisi
    protected $guarded = ['id']; //guarded yg diisi adalah selain yang ditulis
}
