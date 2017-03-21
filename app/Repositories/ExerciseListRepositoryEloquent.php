<?php

namespace iHint\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use iHint\Repositories\ExerciseListRepository;
use iHint\Models\ExerciseList;
use iHint\Validators\ExerciseListValidator;

/**
 * Class ExerciseListRepositoryEloquent
 * @package namespace iHint\Repositories;
 */
class ExerciseListRepositoryEloquent extends BaseRepository implements ExerciseListRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ExerciseList::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
