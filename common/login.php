<?php

function make_login($username='', $password='') {
    try {
        require 'config.php';
        require_once 'validate.php';

        if (!empty($username) and !empty($password)) {
            echo 'making login...';
            $connection = new PDO($db_dsn, $db_username, $db_password, $db_options);
            $password_hashed = hash('sha256', $password);

            $q = "SELECT user_id, user_name, password_hash FROM admin_users WHERE user_name=:username LIMIT 1";
            $statement = $connection->prepare($q);
            $statement->bindParam(':username',$username);
            $excecution = $statement->execute();
            $statement->debugDumpParams();

            if($excecution && $statement->rowCount() == 1) {
                $result = $statement->fetch();
                if (password_verify($password, $result["password_hash"])) {
                    echo 'user verified';
                    $user = array();
                    $user['user_id'] = $result['user_id'];
                    $user['username'] = $result['user_name'];
                    return array(true, $user);
                } else {
                    echo 'invalid user';
                    return array(false, 'user not found');
                }

            } else {
                //$errors['no_match'] = "The username and password entered do not match those on file.";
                echo ' user not found ';
                return array(false, 'user not found');
            }

        }
    } catch (PDOException $error) {
        return array(false, 'could not connect to database');
    }


}
