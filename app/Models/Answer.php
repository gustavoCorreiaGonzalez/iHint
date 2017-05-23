<?php

namespace iHint\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Answer extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'answer',
        'number_of_modules',
        'lines_of_code',
        'cyclomatic_complexity',
        'is_corretc',
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
