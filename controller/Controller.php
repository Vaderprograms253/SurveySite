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
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /*
     * route for login
     */
    function login(){

        var_dump($_POST);

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $userName = trim($_POST['username']);
            $password = trim($_POST['password']);

            //check if user wants to sign up
            $user = new User();
            if (SurveyValidation::validUsername($userName)){
                $user->setUsername($userName);
            } else {
                $this->_f3->set('errors[username]', "Please enter valid user name");
            }

            if (SurveyValidation::validPassword($password)){
                $user->setPass($password);
            } else {
                $this->_f3->set('errors[password]', "Please enter valid password");
            }

            $_SESSION['user'] = $user;

            if (SurveyValidation::validUser($userName, $password)){
                $_SESSION['loggedIn'] = true;
            } else {
                $this->_f3->set('errors[userLogin]' , "Invalid login");
            }

            //TODO: validate user is in database


            if (empty($this->_f3->get('errors'))){
                if ($_SESSION['loggedIn'] == true){
                    header('location: review');
                }
            }


        }
        $view = new Template();
        echo $view->render('views/login.php');
    }

    /*
     * route to reviews
     */
    function reviews(){
        $user = $_SESSION['user'];
        $rating = $_POST['rating'];

     //   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       //     $user->setRating($rating);
       // }
            $view = new Template();
        echo $view->render('views/reviews.html');
    }

    /*
     * route to new user form
     */
    function newUser(){

        $username = trim($_POST['user']);
        $password = trim($_POST['password']);
        $passwordConfirm = $_POST['password-con'];
        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            //check if username already exists
            //if false add to database
            if (SurveyValidation::validNewUser($username, $password, $passwordConfirm)){
                $user = $this->newUser();
                $user->setUsername($username);
                $user->setPass($password);

            } else {
                $this->_f3->set('errors[validLogin]' , "Invalid login");
            }

        }

        if (empty($this->_f3->get('errors'))){
            if ($_SESSION['loggedIn'] == true){
                header('location: review');
            }
        }
        $view = new Template();
        echo $view->render('views/newUser.html');
    }

    /*
<<<<<<< HEAD
     * route user back to home page
     */
    function logout(){

        session_destroy();
        $view = new Template();
        echo $view->render('views/home.html');
=======
     * route to new user form
     */
    function addReview(){
        $view = new Template();
        echo $view->render('views/addReview.html');
>>>>>>> refs/remotes/origin/main
    }

}