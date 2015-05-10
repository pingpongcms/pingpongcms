<?php

namespace Cms\Api\Repositories\Users;

use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{

    protected $fieldSearchable = [
        'name',
        'username',
        'email',
        'created_at',
    ];

    public function boot()
    {
        $this->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    }

    public function model()
    {
        return 'Cms\Core\Entities\User';
    }
}
