<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'body' => 'array',
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected static function booted()
    {
        static::saving(function ($task) {
            $task->user_id = auth()->id();
        });
        static::addGlobalScope('user', function ($builder) {
            $builder->where('user_id', auth()->id());
        });
    }
}
