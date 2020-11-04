<?php
include("connect.php");

$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

require_once("vendor/autoload.php");
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => [190,236],
    'orientation' => 'L',
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/vendor/mpdf/mpdf/ttfonts',
        ]),
        'fontdata' => $fontData + [
        'frutiger' => [
        'R' => 'THSarabun.ttf',
        'I' => 'THSarabun Italic.ttf',
        'B' => 'THSarabun Bold.ttf'
        ]
        ],
        'default_font' => 'frutiger'
    ]);

while($row=mysqli_fetch_assoc($result)){
    $content .= $row["F_ID"];
    $content .= $row["F_Date"];
    $content .= $row["F_Text"];
    $content .= $row["M_ID"]."<br>";
}

$mpdf->WriteHTML($content);
$mpdf->Output();
exit;
?>