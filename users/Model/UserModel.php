<?php

require_once "../../db_settings.php";

class User extends Connection
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function store($firstName, $lastName, $email, $password)
    {

        $statement = $this->db->prepare("INSERT INTO `users`(`firstName`, `lastName`, `email`, `password`) 
            VALUES (:firstName, :lastName, :email, :password)");
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserByEmail($email)
    {
        $user = [];
        $statement = $this->db->prepare("SELECT * FROM users where email = :email LIMIT  1");
        $statement->bindValue(':email', $email);
        $statement->execute();
        while ($query = $statement->fetch()) {
            $user = $query;
        }

        return $user;
    }

    public function getAll()
    {
        $user = [];
        $statement = $this->db->prepare("SELECT * FROM users");
        $statement->execute();
        while ($query = $statement->fetch(PDO::FETCH_ASSOC)) {
            $user[] = $query;
        }
        return $user;
    }
}
