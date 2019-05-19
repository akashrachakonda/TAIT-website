<?php
include('admin_login_php2.php');
if($login==null )
 header('location:admin_login.php');
?>
<?php
function fetch()
{
if(isset($_GET['c']))	
$table=$_GET['c'];
else
header("location:admin_login.php");
//$sub=$_GET['sub'];
	      $output = '';  
	$conn=new mysqli("localhost","root","","allevents");
//$mark=$sub.$id."marks";
$sql="select * from $table where op='on'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
      while($event =$result->fetch_assoc())  
      {       
      $output .= "<tbody>
      <tr>
        <td>".$event['st_roll']."</td>
        <td>".$event['st_name']."</td>
        <td>".$event['st_branch']."</td>
        <td>".$event['st_gmail']."</td>
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
require_once('tcpdf/tcpdf.php');

$table=$_GET['b'];
//$sub=$_GET['sub'];
$title="Registered student list:";
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
<h1 ><center>Registered Students(Filtered):</center></h1>
<table class=table table-striped table-dark>
<thead>
  <tr>
    <th scope=col>RollNo</th>
    <th scope=col>Name</th>
    <th scope=col>Branch</th>
    <th scope=col>Gmail</th>
  </tr>
</thead>";  
	  $content .= fetch();  
      $content .= '</table>';  
      $pdf->writeHTML($content);  
	  ob_end_clean();

      $pdf->Output("$table", 'I');

?>