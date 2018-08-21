<?php
require_once 'curl/curl.php';
$curl = new Curl;
if($_POST['method'] === 'get') {
    $response = $curl->get($_POST['url'], $_POST['data']);
    echo $response;
} else if ($_POST['method'] === 'post') {
    $response = $curl->post($_POST['url'], $_POST['data']);
    echo $response;
}