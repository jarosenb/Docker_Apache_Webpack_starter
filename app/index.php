<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

try {
    $pdo = new PDO('mysql:host='.$server.';dbname='.$db, $username, $password);
} catch (PDOException $e) {
    echo ($e);
}

?>

<html>
<body>hello
<div id="hello"></div>
<script src="./static/dist/bundle.js"></script>
</body>

</html>