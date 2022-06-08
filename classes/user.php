<?php
/*
 * 328/SurveySite/classes/user.php
 */
class User
{
    //declare and initialize instance variables
    private $_fname = "";
    private $_lname = "";
    private $_rating = 0;

    /**
     * parameterized constructor method for
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
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->_rating = $rating;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->_fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->_lname;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->_rating;
    }




}