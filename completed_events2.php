
<?php
session_start();
function fetch()
{
	
//$table=$_GET['c'];
//$sub=$_GET['sub'];
	      $output = '';  
	$conn=new mysqli("localhost","root","","events");
//$mark=$sub.$id."marks";
$table=$_SESSION['database'];
$sql="select * from ".$_SESSION['database'];
$result=$conn->query($sql);
if($result->num_rows>0)
{
      while($event =$result->fetch_assoc())  
      {       
      $output .= "<tbody>
      <tr>
        <td>".$event['name2']."</td>
        <td>".$event['date2']."</td>
        <td>".$event['duration2']." days</td>
        <td>".$event['contest_for']."</td>
      </tr>
      
    </tbody>";  
      }  
   


}
else
	$output.='<BR> NO Records Found';
return $output;
}
	
?>
<?php
session_start();
require_once('tcpdf/tcpdf.php');
$table=$_SESSION['database'];
//$table=$_GET['b'];
//$sub=$_GET['sub'];
$title="Completed Contest list:";
//$sname=$sub."-".$id."-"."marks.txt";

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle("$title");
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE,10);
$pdf->AddPage();

$pdf->setFont('helvetica','',12);
$content="";
$content.= "<div class=container style=height: px;width:800px>  
<h1 ><center>Registered Students:</center></h1>
<table class=table table-striped table-dark>
<thead>
  <tr>
    <th scope=col>Name</th>
    <th scope=col>Date</th>
    <th scope=col>Duration</th>
    <th scope=col>Participants</th>
  </tr>
</thead>";  
	  $content .= fetch();  
      $content .= '</table>';  
      $pdf->writeHTML($content);  
	  ob_end_clean();

      $pdf->Output("$table", 'I');





?>