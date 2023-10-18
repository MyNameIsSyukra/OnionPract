<?php

namespace App\Http\TA\Domain\Service\Repository;

use App\Http\TA\Domain\Models\User;

interface UserRepositoryInterface
{
    public function persist(User $user);
    public function getById(int $Id): ?User;

}
