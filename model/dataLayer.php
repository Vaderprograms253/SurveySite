<?php

/* diner/model/dataLayer.php
 * connects to database and returns data for survey site
 */
class DataLayer
{
    /** This field represents our database connection object
     * @var PDO
     */
    private $_dbh;

    /** DataLayer constructor
     *
     */
    function __construct()
    {
        //connect to database
        require_once $_SERVER['DOCUMENT_ROOT'].'/../config.php';

        // Turn on PDO error reporting
        $this->_dbh = $dbh;
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    function insertMember($member)
    {
        var_dump($member);

        //1. define the query
        $sql = "INSERT INTO members(id, username, pass, rating)
                VALUES(:id, :username, :pass, :rating)";

        //2. prepare statement
        $statement = $this->_dbh->prepare($sql);

        //3. bind parameters
        $username = $member->getUsername();
        $pass = $member->getPass();
        $rating = $member->getRating();

        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':pass', $pass, PDO::PARAM_STR);
        $statement->bindParam(':rating',$rating, PDO::PARAM_STR);

        //4. Execute the prepared statement
        $statement->execute();

        //5. Process the result
        $id = $this->_dbh->lastInsertId();
        echo "Row inserted: $id";
        return $id;
    }
}