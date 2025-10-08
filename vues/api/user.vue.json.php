<?php
header("Content-disposition: filename=contributions.json");
header("Content-Type: application/json; UTF-8"); // rajout du charset
header("Content-Transfer-Encoding: binary");
headers_cors_par_default();
headers_cache_api();

echo json_encode($user_data, JSON_PRETTY_PRINT);
