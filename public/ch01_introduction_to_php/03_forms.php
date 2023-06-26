<html>

<head>
    <title>Personalized Greeting Form</title>
</head>

<body>
    <?php echo '<a href="index.html">Index</a><br><br>'; ?>

    <?php
    if (!empty($_POST['name']))
        echo "Greetings, {$_POST['name']}, and welcome.";
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Enter your name: <input type="text" name="name" />
        <input type="submit">
    </form>
</body>

</html>