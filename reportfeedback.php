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

$sql = "SELECT * FROM feedback AS f, member AS m WHERE f.M_ID = m.M_ID";
$result = mysqli_query($conn, $sql);
    
while($row=mysqli_fetch_assoc($result)){
    $content .= "F_ID = ".$row["F_ID"];
    $content .= "F_Date = ".$row["F_Date"];
    $content .= "F_Text = ".$row["F_Text"];
    $content .= "M_Name = ".$row["M_Name"]."<br>";
}

$mpdf->WriteHTML($content);
$mpdf->Output();
exit;
?>