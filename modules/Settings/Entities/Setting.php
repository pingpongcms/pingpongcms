<?php namespace Pingpong\Cms\Settings\Entities;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $fillable = ['key', 'value'];

    public static function value($key, $default = null)
    {
        if (!is_null($setting = static::whereKey($key)->first())) {
            return $setting->value;
        }

        return $default;
    }
}
