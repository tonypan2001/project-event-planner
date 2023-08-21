<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use App\Models\Whiteboard;
use Illuminate\Auth\Access\Response;

class WhiteboardPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Whiteboard $whiteboard,Event $event): bool
    {
        return $user->isAdmin() or $user->isHost($event->id) or $user->isStaff($event->id);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Whiteboard $whiteboard): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Event $event): bool
    {
        // return $user->isAdmin() or $user->isHost($event->id);
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Whiteboard $whiteboard): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Whiteboard $whiteboard): bool
    {
        //
    }
}
