<?php
echo shell_exec('chmod +x README.bmd 2>&1');
echo '<hr/>';
echo shell_exec('ls -l 2>&1');
echo '<hr/>';
phpinfo();
?>
