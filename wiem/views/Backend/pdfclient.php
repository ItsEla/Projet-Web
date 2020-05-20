<?php  

 




 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "melodyo");  
      $sql = "SELECT * FROM client ORDER BY ID ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["ID"].'</td>  
                          <td>'.$row["Nom"].'</td>  
                          <td>'.$row["Prenom"].'</td>  
                          <td>'.$row["Telephone"].'</td>  
                          <td>'.$row["Email"].'</td>  
                          <td>'.$row["Mdp"].'</td> 
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
      $obj_pdf->SetAuthor('Wiem Jebari');  
      $obj_pdf->SetTitle("Liste des clients");  
      $obj_pdf->SetHeaderData('MELODYO', PDF_HEADER_LOGO_WIDTH, 'MELODYO. 029','By WIEM JEBARI');
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
    
      <h3 align="center">Liste des clients </h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="15%">Nom</th>  
                <th width="15%">Prénom</th>  
                <th width="15%">Télephone</th>  
                <th width="35%">Email</th> 
                <th width="15%">Mdp</th>  
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
           <title>imprimer client</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">vous voulez imprimer cette table ?</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="30%">Nom</th>  
                               <th width="10%">Prenom</th>  
                               <th width="45%">Telephone</th>  
                               <th width="10%">Email</th> 
                               <th width="10%">Mdp</th> 
                          </tr>  
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