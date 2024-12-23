<!DOCTYPE html>
<html lang="en">
<?php
include('./config.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="users" method="post">
    <h1>USER</h1>
    <div>
        <label for="NAME">NAME</label>
        <input type="text" id="name" name="name" placeholder="Entrez NAME">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" id="email" name="email" placeholder="Entrez email">
    </div>
    <select name="role" id="role">
        <option value="admin">admin</option>
        <option value="user">user</option>
    </select>  
    <button>clique</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];
    }
    $sql=('');
    
    ?>
</body>
</html>