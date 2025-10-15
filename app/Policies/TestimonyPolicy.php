<?php

namespace App\Policies;

use App\Models\Testimony;
use App\Models\User;

class TestimonyPolicy
{
    public function update(User $user, Testimony $testimony)
    {
        return $user->id === $testimony->user_id;
    }

    public function delete(User $user, Testimony $testimony)
    {
        return $user->id === $testimony->user_id;
    }
}
