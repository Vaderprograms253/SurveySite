<?php
/*
 *
 * 328/SurveySite/classes/user.php
 */
class User
{
    //declare and initialize instance variables
    private $_fname = "";
    private $_lname = "";
    private $_rating = 0;

    /**
     * parameterized constructor method for user
     * @param string $_fname
     * @param string $_lname
     * @param int $_rating
     */
    public function __construct(string $_fname, string $_lname, int $_rating)
    {
        $this->_fname = $_fname;
        $this->_lname = $_lname;
        $this->_rating = $_rating;
    }

    /**
     * Set user first name entered
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * set user last name entered
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->_lname = $lname;
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
    public function getFname(): string
    {
        return $this->_fname;
    }

    /**
     * Return last name of user
     * @return string
     */
    public function getLname(): string
    {
        return $this->_lname;
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