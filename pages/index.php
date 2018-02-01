<?php
if (@$_POST['username'] != ''){
    $_SESSION['username'] = $_POST['username'];
} else {
    $_SESSION['username'] = "enter your name, please";
}
?>
<form action="" method="post">
    <div>
        <label for="username">Your name</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <input type="submit" value="OK">
    </div>
</form>


