<?php

namespace iHint\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Experiment extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'experiment_mode'
    ];
}
