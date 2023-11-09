<html>
<head></head>
<body>
    <h1> ubdate users</h1>
 
<form method="post" action = "/darbne/mvc2/update?id=<?=$user[0]["id"]?>">
<lable>email:</lable>
<input type="text" name="email" value="<?=$user[0]["email"]?>">
<br>
<br>
<lable>password:</lable>   
<input type="password" name="password" value="<?=$user[0]["password"]?>">
<br>
<br>
<lable>rule:</lable>   
<input type="text" name="rule" value="<?=$user[0]["rule"]?>">
<br>
<br>
<button type="submit" name = "ubdaet">UpdateUser</button>
</form>
</form>
</body>
</html>