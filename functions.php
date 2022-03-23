<?php
 require_once("dbConfig.php");
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
           $sql = "INSERT INTO `vendor_account`( `Name`, `Account_no`, `IFSC_CODE`, `Branch_Name`, `Status`) VALUES ('$getData[0]','$getData[1]','$getData[2]','$getData[3]','2')";

                   $result = mysqli_query($conn, $sql);

        if(!isset($result))
        {
         echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"Saved-Account.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"Saved-Account.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   
 ?>