<?php

require_once "config.php";
require_once "functions.php";

header("Content-Type: application/json");

// API KEY kontrol
if (!isset($_GET['key']) || $_GET['key'] !== API_KEY) {
    echo json_encode(["error" => "Unauthorized"]);
    exit;
}

// domain param
if (!isset($_GET['domain'])) {
    echo json_encode(["error" => "No domain provided"]);
    exit;
}

$domain = $_GET['domain'];

$result = [];

foreach ($extensions as $ext) {
    $fullDomain = $domain . "." . $ext;
    $available = checkDomain($fullDomain);

    $result[] = [
        "domain" => $fullDomain,
        "available" => $available
    ];
}

echo json_encode($result, JSON_PRETTY_PRINT);