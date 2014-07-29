<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 29.07.14
 * Time: 11:11
 */

class UserPostService {

    protected $userStorage;

    protected $postStorage;

    public function __construct(IUserStorage $userStorage, IPostStorage $postStorage)
    {
        $this->userStorage = $userStorage;
        $this->postStorage = $postStorage;
    }

    public function createUser()
    {
        return $this->userStorage->create();
    }
} 