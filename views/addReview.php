<include href="views/header.html"></include>
<title>Add Reviews</title>
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

<?php
        $flavor = $_POST['flavor'];
        $_SESSION['flavor'] = $flavor;

        echo "<p>You like $flavor ice cream</p>";

echo "The rating entered: ".implode(", ", $_POST['mod']).".";
?>

<include href="views/footer.html"></include>