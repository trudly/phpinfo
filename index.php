<?php
echo shell_exec('chmod +x README.bmd 2>&1');
echo '<hr/>';
echo '<hr/>';
echo '<pre>';
echo shell_exec('ldd --version 2>&1');
echo '</pre>';
echo '<hr/>';
echo '<pre>';
echo shell_exec('ls -l 2>&1');
echo '</pre>';
echo '<hr/>';
phpinfo();
?>
