<?php

namespace App\Repository\Eloquent;

use App\Models\Phone;
use App\Repository\Eloquent\EloquentRepository;

/**
 * Description of UserRepository
 */
class PhoneRepository extends EloquentRepository
{
    public function getModelName(): string
    {
        return Phone::class;
    }
}
