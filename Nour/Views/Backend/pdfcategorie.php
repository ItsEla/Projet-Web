<?php  

 




 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "melodyo");  
      $sql = "SELECT * FROM categorie_evenement ORDER BY id ASC";  
       $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["nom"].'</td>  
                          
                     </tr>  
                          ';  
      }  
      return $output;  
 }  

 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf.php'); 




 
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetAuthor('Nour Ben Amor');  
      $obj_pdf->SetTitle("Liste des Catégories");  
      $obj_pdf->SetHeaderData('MELODYO', PDF_HEADER_LOGO_WIDTH, 'MELODYO 2020','NOUR BEN AMOR');
      $obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); 
      $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
    
      <h3 align="center">Liste des Catégories </h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="50%">ID</th>  
                <th width="50%">Nom</th>  
                
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Imprimer Catégorie</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Vous voulez imprimer cette table ?</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="30%">ID</th>  
                               <th width="30%">Nom</th>  
                               
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  