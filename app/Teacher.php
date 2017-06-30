<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;

//Notification for Seller
use App\Notifications\TeacherResetPasswordNotification;

class Teacher extends Authenticatable
{
    protected $table = 'teacher';
    use Notifiable;

    //Mass assignable attributes
    protected $fillable = [
        'name', 'email', 'password',
    ];

    //hidden attributes
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Send password reset notification
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new TeacherResetPasswordNotification($token));
    }
}
