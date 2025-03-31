<?php

require "functions.php";
require "Database.php";

// require "router.php";

$config = require "config.php";

$db = new Database($config['database'], 'pgsql',  'postgres', '1234');

// $id = $_GET['id'];

$query = "select * from notes";

$posts = $db->query($query, [])->fetchAll();

dd($posts);

// foreach ($posts as $post) {
// 	echo "<li>" .  $post["title"]. "</li>";
// }
