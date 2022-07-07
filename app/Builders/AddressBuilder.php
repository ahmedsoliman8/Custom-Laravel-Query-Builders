<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class  AddressBuilder extends Builder
{

    public  function verified() :static{

        return  $this->where('verified',true);
    }

}
