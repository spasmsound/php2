<?php


namespace App;

class Db
{

    protected $dbh;
    protected $cfg;
    protected $dsn;

    public function __construct()
    {
        $this->cfg = require __DIR__ . '/../config/config.php';
        $this->dsn = 'mysql:host=' . $this->cfg['host'] . ';dbname=' . $this->cfg['dbname'] . ';charset=' . $this->cfg['charset'];
        $this->dbh = new \PDO($this->dsn, $this->cfg['username'], $this->cfg['password']);
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    public function query($sql, $class, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}