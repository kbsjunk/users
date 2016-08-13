<?php

namespace Inspheric\Users\Providers;

use Inspheric\Support\Providers\PackageServiceProvider;
use Inspheric\Users\User;

class UsersServiceProvider extends PackageServiceProvider
{
    protected $name = 'users';

    protected $namespace = 'Inspheric\Users\Http\Controllers';

    public function bindRoutes()
    {
        $this->bindModel('users', User::class);
    }

}
