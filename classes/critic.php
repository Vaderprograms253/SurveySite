<?php
/*
 *328/SurveySite/classes/critic.php
 */
class Critic extends User
{
    //declare and initialize instance variables
    private $_comments = "";

    /**
     * Set critic entered comments
     * @param string $comments
     */
    public function setComments(string $comments): void
    {
        $this->_comments = $comments;
    }

    /**
     * Return critic entered comments
     * @return string
     */
    public function getComments(): string
    {
        return $this->_comments;
    }


}