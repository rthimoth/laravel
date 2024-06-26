<?php

namespace App\Policies;

use App\Models\Reply;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class ReplyPolicy
{
    use HandlesAuthorization;

    const CREATE = 'create';
    const UPDATE = 'update';
    const DELETE = 'delete';

    public function create(User $user): bool
    {
        return Auth::check();
    }

    public function update(User $user, Reply $reply): bool
    {
        return $reply->isAuthoredBy($user)  || $user->isModerator() || $user->isAdmin();
    }

    public function delete(User $user, Reply $reply): bool
    {
        return $reply->isAuthoredBy($user)  || $user->isModerator() || $user->isAdmin();
    }
}
