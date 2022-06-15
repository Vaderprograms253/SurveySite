<?php
/*
 *
 * 328/SurveySite/classes/user.php
 */
class User
{
    //declare and initialize instance variables
    private $_username = "";
    private $_pass = "";
    private $_rating = 0;

    /**
     * parameterized constructor method for user
     * @param string $_username
     * @param string $_pass
     * @param int $_rating
     */
    public function __construct(string $_username ="", string $_pass="", int $_rating=0)
    {
        $this->_username = $_username;
        $this->_pass = $_pass;
        $this->_rating = $_rating;
    }

    /**
     * Set user first name entered
     * @param string $fname
     */
    public function setUsername(string $username): void
    {
        $this->_username = $username;
    }

    /**
     * set user last name entered
     * @param string $lname
     */
    public function setPass(string $pass): void
    {
        $this->_pass = $pass;
    }

    /**
     * set user selected rating
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->_rating = $rating;
    }

    /**
     * Return first name of user
     * @return string
     */
    public function getUsername(): string
    {
        return $this->_username;
    }

    /**
     * Return last name of user
     * @return string
     */
    public function getPass(): string
    {
        return $this->_pass;
    }

    /**
     * Return user entered rating
     * @return int
     */
    public function getRating(): int
    {
        return $this->_rating;
    }




}