<?php
/**
 * We are not going to use it because it not controls the fact that slug must be unique
 * I keep it the file just for learning purposes, we will use a package, for example eloquent-sluggable
 */
namespace App\Observers;

use App\Models\Travel;

class TravelObserver
{
    /**
     * Handle the Travel "creating" event (before).
     */
    public function creating(Travel $travel): void
    {
        $travel->slug = str($travel->name)->slug(); // Convert "My travel" into "my-travel"
    }

    /**
     * Handle the Travel "created" event (after).
     */
    public function created(Travel $travel): void
    {
        //
    }

    /**
     * Handle the Travel "updated" event.
     */
    public function updated(Travel $travel): void
    {
        //
    }

    /**
     * Handle the Travel "deleted" event.
     */
    public function deleted(Travel $travel): void
    {
        //
    }

    /**
     * Handle the Travel "restored" event.
     */
    public function restored(Travel $travel): void
    {
        //
    }

    /**
     * Handle the Travel "force deleted" event.
     */
    public function forceDeleted(Travel $travel): void
    {
        //
    }
}
