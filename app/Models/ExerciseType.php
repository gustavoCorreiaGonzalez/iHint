<?php

namespace iHint\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ExerciseType extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'type'
    ];

    /**
     * Realiza o relacionamento hasOne com a classe Exercise
     * @return [type] [description]
     */
    public function exercise()
    {
        return $this->hasOne(Exercise::class);
    }
}
