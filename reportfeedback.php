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
    
    $content .= "<h1>Feedback Report</h1>";
    $content .= "<table style=text-align:center;>
        <tr><th>Feedback ID</th>
        <th>Feedback Date</th>
        <th>Message</th>
        <th>Member Name</th></tr>";
while($row=mysqli_fetch_assoc($result)){
    $content .= "<tr><td>".$row["F_ID"]."</td>";
    $content .= "<td>".$row["F_Date"]."</td>";
    $content .= "<td>".$row["F_Text"]."</td>";
    $content .= "<td>".$row["M_Name"]."</td></tr>";
}
    $content .= "</table>";

$mpdf->WriteHTML($content);
$mpdf->Output();
exit;
?>