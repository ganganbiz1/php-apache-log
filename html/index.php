<?php
echo ("docker log test");
file_put_contents('php://stdout', 'This is a log message.' . "\n");
file_put_contents('php://stderr', 'This is an error log message.' . "\n");
