<?php $this->title = 'Register New User'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post">
    <div>Username: <input type="text" name="username" required/></div>
    <div>Password: <input type="password" name="password" required/></div>
    <div>Confirm password: <input type="password" name="password_confirm" required /></div>
    <div>Full Name: <input type="text" name="full_name"/></div>
    <div><input type="submit" value="Register"/>
        <a href="<?=APP_ROOT?>/users/login">[Login]</a></div>
</form>
