<?php

$header = base64_encode(
'{"alg":"none","typ":"JWT"}'
);

$payload = base64_encode(
'{"user":"guest","role":"user"}'
);

$jwt = $header . "." . $payload . ".";

echo $jwt;

?>
