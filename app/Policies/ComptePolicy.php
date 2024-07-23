<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Compte;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComptePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_compte');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Compte $compte): bool
    {
        return $user->can('view_compte');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_compte');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Compte $compte): bool
    {
        return $user->can('update_compte');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Compte $compte): bool
    {
        return $user->can('delete_compte');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_compte');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Compte $compte): bool
    {
        return $user->can('force_delete_compte');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_compte');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Compte $compte): bool
    {
        return $user->can('restore_compte');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_compte');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Compte $compte): bool
    {
        return $user->can('replicate_compte');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_compte');
    }
}
