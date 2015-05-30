<?php

namespace Cms\Core\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
        'confirmation_code', 'confirmed'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'confirmation_code'];

    protected $appends = ['gravatar_url'];

    protected $casts = [
        'confirmed' => 'boolean'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getGravatarUrlAttribute()
    {
        return $this->gravatar();
    }

    public function gravatar($size = 60, $default = 'mm', $rating = 'g')
    {
        return gravatar($this->email, $size, $default, $rating);
    }

    public function confirm()
    {
        $this->confirmed = 1;
        $this->confirmation_code = null;
        $this->save();
    }
    
}
