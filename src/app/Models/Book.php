<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id'];

    public function getDate()
    {
        $txt = "クラスをそのまま渡します" . $this->title;
        // return $txt;
        return "成功";
    }

    public function authors()
    {
        return $this->belongsTo('App\Models\Author');
    }
}
