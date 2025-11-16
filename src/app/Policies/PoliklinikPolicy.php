<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Poliklinik;
use Illuminate\Auth\Access\HandlesAuthorization;

class PoliklinikPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_poliklinik');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Poliklinik $poliklinik): bool
    {
        return $user->can('view_poliklinik');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_poliklinik');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Poliklinik $poliklinik): bool
    {
        return $user->can('update_poliklinik');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Poliklinik $poliklinik): bool
    {
        return $user->can('delete_poliklinik');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_poliklinik');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Poliklinik $poliklinik): bool
    {
        return $user->can('{{ ForceDelete }}');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('{{ ForceDeleteAny }}');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Poliklinik $poliklinik): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('{{ RestoreAny }}');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Poliklinik $poliklinik): bool
    {
        return $user->can('{{ Replicate }}');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('{{ Reorder }}');
    }
}
