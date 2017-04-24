<?php

namespace iHint\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use iHint\Notifications\UserResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Transformable
{
    use TransformableTrait, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'university', 'course', 'semester', 'experience', 'works'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPassword($token));
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