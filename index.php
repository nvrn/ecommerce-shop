<?php 

class user {
    public $username = 'test name';
    public $usermail = 'test@mail';
}

$dima = new user();

$sofi = new user();

echo 'username: ' .$dima->username . '<br>';
echo 'usermail: ' .$dima->usermail . '<br>';
