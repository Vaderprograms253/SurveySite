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
        $this->_dbh = $dbh;
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}