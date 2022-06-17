<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

// Initialize variables
$un = "";
$validLogin = true;

// If the user is already logged in
if (isset($_SESSION['username'])){

    // Redirect to loggedIn page
    header("location: loggedIn");
}

// If the form has been submitted
if (!empty($_POST)){

    // Get the form data
    $un = $_POST['username'];
    $pw = $_POST['password'];

    // Require the credentials file, which defines a $logins array
    require('creds.php');

    // If the username is in the array and the passwords match
    if (array_key_exists($un, $logins) && $pw == $logins[$un]){

        // Record the username in the session array
        $_SESSION['username'] = $un;

        // Go to the page that the user came from, or else the loggedIn page
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "loggedIn";
        header('location: '.$page);
    }

    // Invalid login -- set flag variable
    $validLogin = false;

}

?>

<include href="views/header.html"></include>

</head>
<body>
<!--Nav Bar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">

    <h1>Login Page</h1>

    <form action="#" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="user" name="username"
                   value="<?php echo $un; ?>">
            <check if="{{ isset(@errors['username'])}}">
                <span class="err">{{ @errors['username'] }}</span>
            </check>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="pass" name="password" >
            <check if="{{ isset(@errors['password'])}}">
                <span class="err">{{ @errors['password'] }}</span>
            </check>
        </div>
        <!--error message if invalid login-->
        <?php
        if(!$validLogin){
            echo '<p class="err">Login is incorrect</p>';
        }
        ?>

        <input type="submit" class="btn btn-secondary">
        <check if="{{ isset(@errors['userLogin'])}}">
            <span class="err">{{ @errors['userLogin'] }}</span>
        </check>
    </form>
    <div class="col">
        <img src="images/netflix.jpg" class="movieImg m-3 rounded" alt="netflix image">
    </div>

</div>

<include href="views/footer.html"></include>
