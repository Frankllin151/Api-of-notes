<?php
header('Access-control-Allow-Origin: *');
header('Access-control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Content-Type: Application/json');
echo json_encode($array);

exit;
