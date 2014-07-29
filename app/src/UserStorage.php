<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 29.07.14
 * Time: 10:24
 */

class UserStorage implements IUserStorage
{

    /**
     * Retrieves all data from storage
     *
     * @return Object[]
     */
    public function all()
    {
        return User::all();
    }

    /**
     * Creates object in storage
     *
     * @param $data array
     * @return mixed
     */
    public function create()
    {
        return User::create();
    }

    /**
     * Saves object to storage
     *
     * @param $obj Object
     * @return mixed
     */
    public function save($obj)
    {
        return $obj->save();
    }
}