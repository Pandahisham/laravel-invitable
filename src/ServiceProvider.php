<?php

namespace Tshafer\Inviteable;

use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;

    /**
     * Class ServiceProvider.
     */
    class ServiceProvider extends BaseProvider
    {
        /**
         * @var string
         */
        protected $packageName = 'inviteable';

        /**
         *
         */
        public function boot()
        {
            $this->setup(__DIR__)
                 ->publishMigrations();
        }
    }
