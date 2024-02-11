<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'description' => 'array'
    ];
    protected $hidden = ['created_at','updated_at'];

    public function scores(){
        return $this->belongsToMany(Score::class,'scores','activity_id','user_id')->withPivot('played','answer');
    }
    public function levels(){
        return $this->belongsTo(Level::class);
    }

}
