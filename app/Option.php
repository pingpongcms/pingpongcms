<?php namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    /**
     * The fillable attributes.
     *
     * @var array
     */
    protected $fillable = ['key', 'value'];

    /**
     * Eloquent scope for finding an option by given option key.
     *
     * @param  Builder $query
     * @param  string $key
     * @return Builder
     */
    public function scopeFindByKey(Builder $query, $key)
    {
        return $query->whereKey($key);
    }

    /**
     * Get value from database option by given key name.
     *
     * @param  string $key
     * @param  null   $default
     * @return mixed
     */
    public static function value($key, $default = null)
    {
        $data = static::findByKey($key)->first(['value', 'id']);

        return ! is_null($data) ? $data->value : value($default);
    }

    /**
     * Remember a value of an option using laravel cache.
     *
     * @param  integer $minutes
     * @return mixed
     */
    public static function remember($key, $default = null)
    {
        return cache("option.{$key}", function () use ($key, $default)
        {            
            return static::value($key, $default);
        });
    }
}
