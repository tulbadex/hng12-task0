<?php
// Set response headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // CORS handling

// Define response data
$response = array(
    "email" => "tulbadex@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"), // ISO 8601 UTC format
    "github_url" => "https://github.com/tulbadex/hng12-task0"
);

// Output JSON response
echo json_encode($response);