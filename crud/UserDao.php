<?php

class UserDao implements DaoInterface
{
    private PDOConnection $pdoConnection;
    private const SELECT_ALL = "SELECT * FROM `users`";

    public function __construct()
    {
        $this->pdoConnection = PDOConnection::getInstance();
    }

    function getAll()
    {
        $stmt = $this->pdoConnection->connect()->query(self::SELECT_ALL);
        $all_users = $stmt->fetchAll();

        return is_array($all_users) ? $all_users : "Can't load from database";
    }

    function getById(int $id)
    {
        // TODO: Implement getById() method.
    }

    function saveOrUpdate(User $user)
    {
        // TODO: Implement saveOrUpdate() method.
    }

    function delete(User $user)
    {
        // TODO: Implement delete() method.
    }
}