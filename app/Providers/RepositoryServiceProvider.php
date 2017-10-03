<?php

namespace iHint\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'iHint\Repositories\AdminRepository',
            'iHint\Repositories\AdminRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\AnswerRepository',
            'iHint\Repositories\AnswerRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\ExerciseListRepository',
            'iHint\Repositories\ExerciseListRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\ExerciseRepository',
            'iHint\Repositories\ExerciseRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\ExerciseTypeRepository',
            'iHint\Repositories\ExerciseTypeRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\HintRepository',
            'iHint\Repositories\HintRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\LogHintRepository',
            'iHint\Repositories\LogHintRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\TeacherRepository',
            'iHint\Repositories\TeacherRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\UserRepository',
            'iHint\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'iHint\Repositories\ExperimentRepository',
            'iHint\Repositories\ExperimentRepositoryEloquent'
        );
    }
}
