<?php class SQLServerDriver extends DatabaseMethods implements DatabaseInterface
{
    public function __construct($host, $db, $uid, $password)
    {
        parent::__construct($host, $db, $uid, $password);
    }

    public function db_connect()
    {
    }
    public function remove($where)
    {
    }
    public function add($data)
    {
    }
    public function get($where)
    {
    }
    public function update($where)
    {
    }
}
?>
