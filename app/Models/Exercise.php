<?php

namespace iHint\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Exercise extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'exercisetype_id',
        //'exerciselist_id',
        'enunciation',
        'answer'
    ];

    /**
     * Realiza o relacionamento belongsTo com a classe ExerciseType
     * @return [type] [description]
     */
    public function exercisetype()
    {
        return $this->belongsTo(ExerciseType::class);
    }

    /**
     * Realiza o relacionamento belongsTo com a classe ExerciseList
     * @return [type] [description]
     */
    public function exerciselist()
    {
        return $this->belongsTo(ExerciseLevel::class);
    }

    /**
     * Realiza o relacionamento hasOne com a classe Answer
     * @return [type] [description]
     */
    public function answer()
    {
        return $this->hasOne(Answer::class);
    }

    /**
     * Realiza o relacionamento hasOne com a classe Hint
     * @return [type] [description]
     */
    public function hint()
    {
        return $this->hasOne(Hint::class);
    }

    /**
     * Realiza o relacionamento hasOne com a classe LogHint
     * @return [type] [description]
     */
    public function logHint()
    {
        return $this->hasOne(LogHint::class);
    }
}
