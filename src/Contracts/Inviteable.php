<?php

namespace Tshafer\Inviteable\Contracts;

/**
     * Interface Inviteable.
     */
    interface Inviteable
    {
        /**
         * @return \Illuminate\Database\Eloquent\Relations\MorphOne
         */
        public function invite();
    }
