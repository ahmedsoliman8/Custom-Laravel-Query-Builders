<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class  UserBuilder extends Builder
{

    public function hasVerifiedEmail(): static
    {
        return $this->whereNotNull('email_verified_at');
    }

    public function hasVerifiedAddress(): static
    {

        return $this->whereHas('addresses', function (AddressBuilder $query) {
            $query->verified();
        });
    }

}
