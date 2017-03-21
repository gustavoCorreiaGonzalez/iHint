<?php

namespace iHint\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use iHint\Repositories\ExerciseRepository;
use iHint\Models\Exercise;
use iHint\Validators\ExerciseValidator;

/**
 * Class ExerciseRepositoryEloquent
 * @package namespace iHint\Repositories;
 */
class ExerciseRepositoryEloquent extends BaseRepository implements ExerciseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Exercise::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
