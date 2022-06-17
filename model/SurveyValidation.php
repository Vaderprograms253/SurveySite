<?php



class SurveyValidation
{

    static function validUsername($username){
        if (empty(($_POST['username']))){
            return false;
        } else {
            return true;
        }
    }

    static function validPassword($password){
        if (empty($_POST['password'])){
            return false;
        } else {
            return true;
        }
    }

    static function validNewUser($username, $password, $passwordCon){
        require 'config.php';


        if ($password == $passwordCon){
            $sql = "INSERT INTO Users (username, password)
                    VALUES (:username, :password)";

            if ($statement = $dbh->prepare($sql)){
                $statement->bindParam(":username", $username, PDO::PARAM_STR);
                $statement->bindParam(":password", $password, PDO::PARAM_STR);
                if ($statement->execute()){
                    return true;
                }
            }
        }
        return false;
    }



    static function validUser($username, $password){

        require 'config.php';

        $sql = "SELECT username, password FROM Users 
                WHERE username = :username";


        if($statement = $dbh->prepare($sql)) {
            //bind params
            $statement->bindParam(":username", $username, PDO::PARAM_STR);
            if ($statement->execute()){
                if ($statement->rowCount() == 1){
                    if ($row = $statement->fetch()) {
                        $user = $row['username'];
                        $hashed_pass = $row['password'];
                        if ($password == $hashed_pass) {
                            return true;
                        } else {
                            return false;
                           //echo $password. " ". $hashed_pass;
                        }
                    }
                    }
            }
        }
            //$result = $statement->fetch(PDO::FETCH_ASSOC);
    }
}