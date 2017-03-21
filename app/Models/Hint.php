<?php

namespace iHint\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Hint extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'description',
    	'user_id',
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
}
