<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Update;
use Illuminate\Auth\Access\HandlesAuthorization;

class UpdatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_update');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Update $update)
    {
        return $user->can('view_update');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_update');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Update $update)
    {
        return $user->can('update_update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Update $update)
    {
        return $user->can('delete_update');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_update');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Update $update)
    {
        return $user->can('force_delete_update');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_update');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Update $update)
    {
        return $user->can('restore_update');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_update');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, Update $update)
    {
        return $user->can('replicate_update');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_update');
    }

}
