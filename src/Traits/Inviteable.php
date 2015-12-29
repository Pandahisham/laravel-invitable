<?php

namespace Tshafer\Inviteable\Traits;

use Tshafer\Inviteable\Models\Invite;

    /**
     * Class Inviteable.
     */
    trait Inviteable
    {
        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphOne
         */
        public function invite()
        {
            return $this->morphOne(Invite::class, 'claimer');
        }
    }
