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


}