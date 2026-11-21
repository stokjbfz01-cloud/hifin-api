
<?php

header("Content-Type: application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");

$action = $_GET["action"] ?? "";

if ($action === "settings") {

    $whatsappUrl = "https://whatsapp.com/channel/ISI_ID_CHANNEL";

    $settings = [
        "download_url" => $whatsappUrl,
        "telegram_url" => "",
        "whatsapp_url" => $whatsappUrl,

        "force_below" => "",
        "force_update" => "0",
        "force_versions" => "",

        "getkey_12_chain" => "gtraffic",
        "getkey_24_chain" => "gtraffic,gtraffic",
        "getkey_global_chain" => "shrinkearn",
        "getkey_services" => "gtraffic",

        "latest_version" => "5.2",

        "maintenance" => "0",
        "maintenance_versions" => "1.0",

        "notice" => "",
        "promo_dialog" => "1"
    ];

    echo json_encode([
        "success" => true,
        "settings" => $settings
    ], JSON_UNESCAPED_SLASHES);

    exit;
}

http_response_code(404);

echo json_encode([
    "success" => false,
    "message" => "Action tidak ditemukan"
], JSON_UNESCAPED_SLASHES);

?>
