<?php

namespace iHint\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use iHint\Repositories\LogHintRepository;
use iHint\Models\LogHint;
use iHint\Validators\LogHintValidator;

/**
 * Class LogHintRepositoryEloquent
 * @package namespace iHint\Repositories;
 */
class LogHintRepositoryEloquent extends BaseRepository implements LogHintRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return LogHint::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
