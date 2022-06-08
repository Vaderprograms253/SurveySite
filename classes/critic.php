<?php
/*
 *
 */
class Critic extends User
{
    private $_comments = "";

    /**
     * @return string
     */
    public function getComments(): string
    {
        return $this->_comments;
    }

    /**
     * @param string $comments
     */
    public function setComments(string $comments): void
    {
        $this->_comments = $comments;
    }


}