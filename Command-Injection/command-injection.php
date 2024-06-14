<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    // Vulnerable to command injection
    $output = shell_exec("cat " . $file);
    echo "<pre>$output</pre>";
} else {
    echo "No file specified.";
}
?>
