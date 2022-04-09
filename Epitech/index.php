<html>
<h1> Hello world </h1>
<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="company">company:</label>
        <input type="company " id="mail" name="user_mail">
    </div>
    <div>
        <label for="mail">email</label>
        <textarea id="mail" name="mail"></textarea>
    </div>
    <div>
        <label for="number">number</label>
        <textarea id="number" name="number"></textarea>
    </div>
    <div>
        <label for="password">password</label>
        <textarea id="password" name="password"></textarea>
    </div>
    
    
</form>

</html>

<?php>

$servername = "register";
$username = "root";
$password = "";



// Create connection
$conn = new mysqli("register", "root", "");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql= "INSERT INTO register.register VALUES($name,$company,$email,$number,$password)";

?>


