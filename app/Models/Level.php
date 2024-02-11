<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
    public function activities(){
        return $this->hasMany(Activity::class);
    }
    public function users(){
        return $this->belongsToMany(User::class, 'logs', 'level_id', 'user_id')->withPivot('score', 'status');
    }
}
