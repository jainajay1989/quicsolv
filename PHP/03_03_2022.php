<?php 
// date_default_timezone_set('Asia/Kolkata');

// echo date('Y-m-d h:i:s A');

// echo '<br/>'.date('Y-m-d h:i:s', strtotime('1 week 2 days 4 hours 2 seconds'));
?>

<?php
//    $date_array = getdate();

//    print_r($date_array);exit;
   
//    foreach ( $date_array as $key => $val ){
//       print "$key = $val<br />";
//    }
	
//    $formated_date  = "Today's date: ";
//    $formated_date .= $date_array['mday'] . "/";
//    $formated_date .= $date_array['mon'] . "/";
//    $formated_date .= $date_array['year'];
   
//    print $formated_date;

function number($num = 0) {
    try {
        if($num < 10) {
            $error = 'Number should be greater then 10';
            throw new Exception($error);
        } else {
            echo 'Executed';
        }
    } catch (Exception $e) {
        // echo 'Caught exception: ',  $e->getMessage(), "\n";
        // echo '<br/>Caught exception: ',  $e->getLine(), "\n";
        // echo '<br/>Caught exception: ',  $e->getFile(), "\n";
        // echo '<br/>Caught exception: ',  $e->getTraceAsString(), "\n";
        // echo '<br/>Caught exception: ',  print_r($e->getTrace()), "\n";
        echo "Some error has occred. Please wait";
        log($e->getMessage());
    }
}

number(1);

$get_Img_Src = '/<img[^>]*src=([\'"])(?<src>.+?)\1[^>]*>/i';
$img = "<img src='abc.php' />";
preg_match_all($get_Img_Src, $img, $result); 
echo "<pre>";
print_r($result);

$email = "abc1231-"; 
$regex = '/^[_a-z0-9-]+[_a-z0-9]$/'; 
if (preg_match($regex, $email)) {
 echo $email . " is a valid email. We can accept it.";
} else { 
 echo $email . " is an invalid email. Please try again.";
}     
?>

<?php
   $data = "<?xml version = '1.0' encoding = 'UTF-8'?>
   <note>
   <to>
       <Ajay>Android</Ajay>
       <Akshay>Android</Akshay>
       <Company>TutorialsPoint</Company>
       <Price>$10</Price>
   </to>

   <to>
       <Ajay>Andr2oid 1</Ajay>
       <Akshay>Android 2</Akshay>
       <Company>TutorialsPoint 2</Company>
       <Price>$102 </Price>
   </to>
</note>";
   
   $xml = simplexml_load_string($data) or die("Error: Cannot create object");
?>
<html>

   <head>
      <body>
         
         <?php
            print_r($xml);
         ?>
      
      </body>
   </head>
   
</html>

<?php 
   $html = ' 
      <head> 
         <title>Tutorialspoint</title>
      </head> 
   
      <body> 
         <h2>Course details</h2> 
      
         <table border = "0"> 
            <tbody> 
               <tr> 
                  <td>Android</td> 
                  <td>Gopal</td> 
                  <td>Sairam</td> 
               </tr> 
         
               <tr> 
                  <td>Hadoop</td> 
                  <td>Gopal</td> 
                  <td>Satish</td> 
               </tr> 
         
               <tr> 
                  <td>HTML</td> 
                  <td>Gopal</td> 
                  <td>Raju</td> 
               </tr> 
         
               <tr> 
                  <td>Web technologies</td> 
                  <td>Gopal</td> 
                  <td>Javed</td> 
               </tr> 
         
               <tr> 
                  <td>Graphic</td> 
                  <td>Gopal</td> 
                  <td>Satish</td> 
               </tr> 
         
               <tr> 
                  <td>Writer</td> 
                  <td>Kiran</td> 
                  <td>Amith</td> 
               </tr> 
         
               <tr> 
                  <td>Writer</td> 
                  <td>Kiran</td> 
                  <td>Vineeth</td> 
               </tr> 
            </tbody> 
         </table> 
      </body> 
   </html> 
   '; 
   /*** a new dom object ***/ 
   $dom = new domDocument; 
   
   /*** load the html into the object ***/ 
   $dom->loadHTML($html); 
   
   /*** discard white space ***/ 
   $dom->preserveWhiteSpace = false; 
   
   /*** the table by its tag name ***/ 
   $tables = $dom->getElementsByTagName('table'); 
   
   /*** get all rows from the table ***/ 
   $rows = $tables->item(0)->getElementsByTagName('tr'); 
   
   /*** loop over the table rows ***/ 
   foreach ($rows as $row) {
      /*** get each column by tag name ***/ 
      $cols = $row->getElementsByTagName('td'); 
      
      /*** echo the values ***/ 
      echo 'Designation: '.$cols->item(0)->nodeValue.'<br />'; 
      echo 'Manager: '.$cols->item(1)->nodeValue.'<br />'; 
      echo 'Team: '.$cols->item(2)->nodeValue; 
      echo '<hr />'; 
   }


   $data = "<?xml version = '1.0' encoding = 'UTF-8'?>
            <note>
                <to>
                    <Ajay>Android</Ajay>
                    <Akshay>Android</Akshay>
                    <Company>TutorialsPoint</Company>
                    <Price>$10</Price>
                </to>

                <to>
                    <Ajay>Andr2oid 1</Ajay>
                    <Akshay>Android 2</Akshay>
                    <Company>TutorialsPoint 2</Company>
                    <Price>$102 </Price>
                </to>
            </note>";

    /*** a new dom object ***/ 
   $dom = new domDocument; 
   
   /*** load the html into the object ***/ 
   $dom->loadXML($data); 
   
   /*** discard white space ***/ 
   $dom->preserveWhiteSpace = false; 
   
   /*** the table by its tag name ***/ 
   $tables = $dom->getElementsByTagName('note'); 

   $rows = $tables->item(0)->getElementsByTagName('to'); 
   
   /*** loop over the table rows ***/ 
   foreach ($rows as $row) {
       print_r($row->nodeValue);
       
   }
?> 
?>