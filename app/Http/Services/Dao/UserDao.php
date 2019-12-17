<?php


namespace App\Http\Services\Dao;


use App\Models\User;

class UserDao
{
    public function list($offset = 0, $limit = 4)
    {
        $query = User::query();

        return $query->paginate($limit,['*'],$offset);
    }

    public function save(array $data)
    {
        $model = new User();
        $model->name = $data['name'];
        $model->mobile = $data['mobile'];

        $model->save();

        return $model;
    }
}
