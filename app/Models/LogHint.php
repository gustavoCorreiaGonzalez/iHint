<?php

namespace iHint\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class LogHint extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'user_id',
    	'hint_id',
    	'exercise_id'
    ];

    /**
     * Realiza o relacionamento belongsTo com a classe User
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Realiza o relacionamento belongsTo com a classe Exercise
     * @return [type] [description]
     */
    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

	/**
     * Realiza o relacionamento belongsTo com a classe Hint
     * @return [type] [description]
     */
    public function hint()
    {
        return $this->belongsTo(Hint::class);
    }
}
