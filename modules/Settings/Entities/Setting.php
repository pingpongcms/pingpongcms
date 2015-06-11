<?php namespace Pingpong\Cms\Settings\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

    protected $fillable = ['key', 'value'];
}