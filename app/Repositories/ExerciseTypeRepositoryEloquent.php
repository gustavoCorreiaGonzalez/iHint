<?php

namespace iHint\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use iHint\Repositories\ExerciseTypeRepository;
use iHint\Models\ExerciseType;
use iHint\Validators\ExerciseTypeValidator;

/**
 * Class ExerciseTypeRepositoryEloquent
 * @package namespace iHint\Repositories;
 */
class ExerciseTypeRepositoryEloquent extends BaseRepository implements ExerciseTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ExerciseType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
