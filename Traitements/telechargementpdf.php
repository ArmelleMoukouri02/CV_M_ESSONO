
<?php 

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';

// include autoloader
//require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

ob_start();
require "../index.php";
$index= ob_get_contents();
ob_end_clean();
$dompdf->loadHtml($index);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();




?>