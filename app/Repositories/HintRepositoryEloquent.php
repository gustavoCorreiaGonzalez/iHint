<?php

namespace iHint\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use iHint\Repositories\HintRepository;
use iHint\Models\Hint;
use iHint\Validators\HintValidator;

/**
 * Class HintRepositoryEloquent
 * @package namespace iHint\Repositories;
 */
class HintRepositoryEloquent extends BaseRepository implements HintRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Hint::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
