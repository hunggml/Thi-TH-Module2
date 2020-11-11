<?php

namespace test\Model;

use PDO;

class connDB
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=textModule2';
        $this->user = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        return new PDO($this->dsn, $this->user, $this->password);
    }
}