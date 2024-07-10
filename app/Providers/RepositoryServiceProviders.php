<?php

namespace App\Providers;

use App\Repository\Class\ClassRepository;
use App\Repository\Class\ClassRepositoryInterface;
use App\Repository\Student\StudentRepository;
use App\Repository\Student\StudentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProviders extends ServiceProvider
{
    public function register():void
    {

    }
    public function boot():void
    {
        $this->app->bind(ClassRepositoryInterface::class, ClassRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
    }

}
