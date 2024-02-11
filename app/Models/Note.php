<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'updated_at' => 'datetime:d-m-Y'
    ];
    protected static function booted()
    {
        static::saving(function ($note) {
            $note->user_id = auth()->id();
        });

        static::addGlobalScope('user', function ($builder) {
            $builder->where('user_id', auth()->id());
        });
    }
}
