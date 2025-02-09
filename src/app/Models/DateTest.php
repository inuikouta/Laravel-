<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models;

class DateTest extends Model
{
    use HasFactory;

    protected $table = 'date_test';
    protected $fillable = ['grope', 'user_id'];

    public function test()
    {
        return $this->hasMany('App\Models\testModel', 'user_id', 'user_id');
    }
}
