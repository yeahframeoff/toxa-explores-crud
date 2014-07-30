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
    public function fetchAll()
    {
        return User::all();
    }

    /**
     * @return User
     */
    public function create()
    {
        return new User;
    }

    public function validate($data)
    {
        return true;
    }

    /**
     * @param Object $data
     * @return mixed
     */
    public function save($data)
    {
        $result = $this->validate($data);
        if ($result instanceof \Illuminate\Validation\Validator)
            return $result;
        else
            return User::create($data);
    }
}