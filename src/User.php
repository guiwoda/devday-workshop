<?php
namespace DevDay;

class User {

    private $email;

    private $password;

    private $friends = [];

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        // $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function checkPassword($password)
    {
        return $this->password == $password;
        // return password_verify($password, $this->password);
    }

    public function getFriends()
    {
        return $this->friends;
    }

    public function addFriend(User $friend)
    {
        $this->friends[] = $friend;
    }
}
