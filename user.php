<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<h2>Change account details</h2>
    <form action="includes/update.inc.php" method="post">
        <input name="username" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">
        <input name="email" type="email" placeholder="Email">

        <button>Change</button>
    </form>

    <h2>Delete account</h2>
    <form action="includes/deleteform.inc.php" method="post">
        <input name="username" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">

        <button>delete accountp</button>
    </form>
</body>
</html>