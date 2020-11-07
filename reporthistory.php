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

    $content .= "<h1>History Report</h1>";
    $content .= "<table style=text-align:center;><tr><th>History ID</th>
        <th>History Date</th>
        <th>Member Name</th>
        <th>Order ID</th></tr>";
while($row=mysqli_fetch_assoc($result)){
    $content .= "<tr><td>".$row["H_ID"]."</td>";
    $content .= "<td>".$row["H_Date"]."</td>";
    $content .= "<td>".$row["M_Name"]."</td>";
    $content .= "<td>".$row["O_ID"]."</td></tr>";
}
    $content .= "</table>";

$mpdf->WriteHTML($content);
$mpdf->Output();
exit;
?>