<?php

class UserDao implements DaoInterface
{
    private Dbh $pdoConnection;
    private const SELECT_ALL = "SELECT * FROM `users`";
    private const DELETE_WHERE_ID = "DELETE FROM `users` WHERE `id` = ?";

    public function __construct()
    {
        $this->pdoConnection = Dbh::getInstance();
    }

    function getAll(): array
    {
        $stmt = $this->pdoConnection->connect()->query(self::SELECT_ALL);

        $all_users_assoc = $stmt->fetchAll();

        if(isset($all_users_assoc) && $all_users_assoc){
            $all_users[] = null;
            $index = 0;
            foreach($all_users_assoc as $user_assoc){
                $user = new User();
                $user->setId($user_assoc['id']);
                $user->setEmail($user_assoc['email']);
                $user->setPassword($user_assoc['password']);

                $all_users[$index] = $user;
                $index++;
            }
        }

        return $all_users ?? array();
    }

    function getById(int $id)
    {
        // TODO: Implement getById() method.
    }

    function saveOrUpdate(User $user)
    {
        // TODO: Implement saveOrUpdate() method.
    }

    function deleteById(int $id): bool
    {
        $stmt = $this->pdoConnection->connect()->prepare(self::DELETE_WHERE_ID);
        return $stmt->execute([$id]);
    }
}