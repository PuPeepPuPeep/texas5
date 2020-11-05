<?php
include("connect.php");

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

$sql = "SELECT h.H_ID, h.H_Date, h.O_ID, m.M_Name FROM history AS h, member AS m WHERE h.M_ID = m.M_ID";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)){
    $content .= "H_ID = ".$row["H_ID"];
    $content .= "H_Date = ".$row["H_Date"];
    $content .= "M_Name = ".$row["M_Name"];
    $content .= "O_ID = ".$row["O_ID"]."<br>";
}

$mpdf->WriteHTML($content);
$mpdf->Output();
exit;
?>