<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Level;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        foreach (Level::all() as $level) {
            if ($level->id == 1) {
                $user->levels()->attach($level->id, ['score' => 0, 'status' => 'unlocked']);
            } else {
                $user->levels()->attach($level->id, ['score' => 0, 'status' => 'locked']);
            }
        }

        $user->profile()->create();
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
