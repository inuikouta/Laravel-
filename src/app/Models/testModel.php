<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testModel extends Model
{
    use HasFactory;

    protected $table = 'test';
    protected $fillable = ['name'];

    public function getDetail()
    {
        $txt = "クラスをそのまま渡します" . $this->name;
        // return $txt;
        return "成功";
    }

    public function dateTest()
    {
        return $this->belongsTo('App\Models\DateTest', 'user_id');
    }
}
