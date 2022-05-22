<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonalAccessTokenPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User  $user authenticated user
     * @param int $userId authorizing user id
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user, int $userId)
    {
        return $user->id === $userId;
    }

    /**
     * Determine whether the user can store any models.
     *
     * @param \App\Models\User  $user authenticated user
     * @param int $userId authorizing user id
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function store(User $user, int $userId)
    {
        return $user->id === $userId;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PersonalAccessToken  $personalAccessToken
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, int $userId, int $tokenId)
    {
        return $user->id === $userId
            && $user->tokens()->find($tokenId);
    }
}
