<?php
echo "Hello from CI/CD!<br>";
echo "Deployed at: " . date('Y-m-d H:i:s') . "<br>";
echo "Version: " . trim(file_get_contents('version.txt')) . "<br>";
