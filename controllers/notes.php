<?php

$config = require 'config.php';
$db = new Database($config['database']);

$query = 'select id, body from notes';

$notes = $db->query($query, [])->fetchAll();

$heading = 'notes';

require 'views/notes.view.php';
