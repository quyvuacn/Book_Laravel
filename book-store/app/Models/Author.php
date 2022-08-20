<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = "authors";
    protected $primaryKey = "authorid";
    protected $guarded = [];

    public function authors(){
        return $this->hasMany(Book::class,'authorid','authorid');
    }
}
