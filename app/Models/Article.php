<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // use HasFactory;
    // protected $table = "articles";

    protected $primaryKey = "article_id";

    protected $fillable = ['title', 'content', 'release_date'];


}
