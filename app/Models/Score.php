<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Score extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function activities(){
        return $this->belongsTo(Activity::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function levels(){
        return $this->belongsTo(Level::class);
    }
    protected static function booted()
    {
        static::saved(function () {
            $user = Auth::user();
            $user->profile->update([
                'totalScore' => $user->scores()->where("played", 1)->count(),
            ]);
        });
        static::creating(function (Score $score) {
            $score->user_id = Auth::id();
        });
        static::addGlobalScope('user', function (Builder $builder) {
            $builder->where('user_id', Auth::id());
        });
    }

}
