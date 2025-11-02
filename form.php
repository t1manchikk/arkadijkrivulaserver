<h2>Add Student</h2>
<form action="/" method="POST">
<input type="hidden" name="action" value="add" />
<input type="text" name="name" placeholder="ім'я" />
<input type="text" name="surname" placeholder="прізвище" />
<input type="number" name="age" placeholder="вік" />
<button type="submit">Add</button>
</form>

<a href="?logout=1">Logout</a>

<?php
if(isset($_COOKIE['students']) && !empty($_COOKIE['students'])){
    $students = unserialize($_COOKIE['students']);
    echo "<table border='1'><tr><th>ім'я</th><th>прізвище</th><th>вік</th></tr>";
    foreach($students as $s){
        echo "<tr><td>{$s['name']}</td><td>{$s['surname']}</td><td>{$s['age']}</td></tr>";
    }
    echo "</table>";
}
global $message; if(!empty($message)) echo "<p>$message</p>";
?>