<?php

$uploadFileSize = "每次上傳之檔案大小總計請勿超過" . ini_get("upload_max_filesize") . "。";
$maxFileSize = "<br />$uploadFileSize";

$imagesSize = [
    "news" => [
        'IW' => 1100,
        'IH' => 680,
        'note' => "圖片請上傳寬 1100pixel、高 680pixel之圖檔。 $maxFileSize",
    ],
    "newsCover" => [
        'IW' => 288,
        'IH' => 288,
        'note' => "圖片請上傳寬 288pixel、高 288pixel之圖檔。 $maxFileSize",
    ],
    "recipeCover" => [
        'IW' => 1242,
        'IH' => 644,
        'note' => "圖片請上傳寬 1242pixel、高 644pixel之圖檔。 $maxFileSize",
    ],
    "shopCover" => [
        'IW' => 480,
        'IH' => 310,
        'note' => "圖片請上傳寬 480pixel、高 310pixel之圖檔。 $maxFileSize",
    ],
    "leicht" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
    "leichtCover" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
    "leichtCoverOne" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
    "leichtCoverTwo" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
    "leichtCoverThree" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
    "cleanup" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
    "cleanupCover" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
    "cleanupCoverOne" => [
        'IW' => 540,
        'IH' => 800,
        'note' => "圖片請上傳寬 540pixel、高 800pixel之圖檔。 $maxFileSize",
    ],
    "cleanupCoverTwo" => [
        'IW' => 540,
        'IH' => 800,
        'note' => "圖片請上傳寬 540pixel、高 800pixel之圖檔。 $maxFileSize",
    ],
    "cleanupCoverThree" => [
        'IW' => 1180,
        'IH' => 832,
        'note' => "圖片請上傳寬 1180pixel、高 832pixel之圖檔。 $maxFileSize",
    ],
];
?>