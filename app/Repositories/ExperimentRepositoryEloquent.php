<?php

namespace iHint\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use iHint\Repositories\ExperimentRepository;
use iHint\Models\Experiment;
use iHint\Validators\ExperimentValidator;

/**
 * Class HintRepositoryEloquent
 * @package namespace iHint\Repositories;
 */
class ExperimentRepositoryEloquent extends BaseRepository implements ExperimentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Experiment::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
