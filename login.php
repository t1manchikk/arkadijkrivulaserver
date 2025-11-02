<h2>Login</h2>
<form action="/" method="POST">
<input type="hidden" name="action" value="login" />
<input type="text" name="login" placeholder="login" />
<input type="password" name="password" placeholder="password" />
<button type="submit">Login</button>
</form>
<?php global $message; if(!empty($message)) echo "<p>$message</p>"; ?>