<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    protected $fillable = [
    	'name'
    ];

    protected $presenter = 'App\Menus\Presenters\DefaultPresenter';

    public function items()
    {
    	return $this->hasMany('App\MenuItem');
    }

    public function add(array $attributes = array())
    {
    	return $this->items()->create($attributes);
    }

    public function scopeFindByName($query, $name)
    {
        return $query->whereName($name);
    }

    public function render($presenter = null)
    {
        if (!is_null($presenter)) {
            $this->presenter = $presenter;
        }

        return (new $this->presenter($this))->render();
    }

}