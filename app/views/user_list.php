<!-- app/views/user_list.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <?php echo "<pre>";
    //  var_dump($users); echo "</pre>"  ?>
    <ul>
    
        <?php foreach ($users as $user){ ?>
            <li><?= $user['email']; ?></li>
        <?php } ?>
    </ul>

    <h2>Add User</h2>
    <form method="post" action="">
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="text" name="rule" placeholder="rule" required>
        <button type="submit">Add User</button>
    </form>


    <?php foreach ($users as $user){ ?>
    <li>
        <?= $user['email']; ?> 
        <a href="show?id=<?= $user['id']; ?>">Edit</a> 
        <a href="Delete?id=<?= $user['id']; ?>">Delete</a>
    </li>
    <?php } ?>
</ul>
 
<?php   var_dump  ( $_GET['id'] ) ;?>

</body>
</html>
 