<?php

class Controller
{
    private $_f3;

    /*
     * Controller constructor
     */
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /*
     * route for home page
     */
    function home()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $userName = $_POST['username'];
            $password = $_POST['password'];

            //check if user wants to sign up
            if (isset($_POST['login'])){
                $user = new User();
                if (SurveyValidation::validUserName($userName)){
                    $user->setUserName($userName);
                } else {
                    $this->_f3->set('errors[username]', "Please enter valid user name");
                }

                if (SurveyValidation::validPassword($password)){
                    $user->setUserPassword($password);
                } else {
                    $this->_f3->set('errors[password]', "Please enter valid password");
                }
            }


        }
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /*
     * route for login
     */
    function login(){
        $view = new Template();
        echo $view->render('views/login.php');
    }

    /*
     * route to logged in
     */
    function loggedIn(){
        $view = new Template();
        echo $view->render('views/loggedIn.php');
    }

    /*
     * route to reviews
     */
    function reviews(){
        $view = new Template();
        echo $view->render('views/reviews.html');
    }

}