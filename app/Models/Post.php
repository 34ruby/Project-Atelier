<?php

namespace App\Models;

use App\Traits\HasCan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasCan;

    protected $guards = [];

    protected $appends = [
        'can',
    ];

    public function getCreatedAtAttribute($value) {
        return now()->parse($value)->timezone(config('app.timezone'))->format('d F Y, H:i:s');
    }

    public function getUpdatedAtAttribute($value) {
        return now()->parse($value)->timezone(config('app.timezone'))->diffForHumans();
    }
}