<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    http_response_code(403);
    die('403');
}
return [
    "panel_url" => "#",
    "panel_user" => "#",
    "panel_pass" => "#",
    "type" => "sanaei",
    "crisp" => "#"
];
