<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function getDetail()
    {
        $txt = "クラスをそのまま渡します" . $this->name;
        return $txt;
        // return "成功";
    }

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
