<?php
// Load the database configuration file
include_once 'dbconf.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $jmeno   = $line[1];
                $email  = $line[8];
                $lokalita  = $line[2];
                $skola = $line[3];
                $rok_ukonceni = $line[4];
                $technologie = $line[6];
                $gdpr = $line[7];
                $pizza = $line[5];
                $zkouska="SELECT email from udaje where email='$email'";
                $student_email=mysqli_query($db,$zkouska);
                $row_maturita = mysqli_fetch_row($student_email);
                if ($row_maturita>0) {
                    echo "Tento student je již registrovaný: ".$row_maturita[0]." ";
                }
                else{
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id FROM members WHERE email = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                
                // if($prevResult->num_rows > 0){
                //     // Update member data in the database
                //     $db->query("UPDATE members SET name = '".$name."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'");
                // }
                // else{
                    // Insert member data in the database
                    
                    $db->query("INSERT INTO udaje (jmeno, email, lokalita, skola, rok_ukonceni, preferovane_technologie) VALUES ('".$jmeno."', '".$email."', '".$lokalita."', '".$skola."', '".$rok_ukonceni."', '".$technologie."');");
                    $bezpryc = explode(", ", $pizza);
                    $sql = "SELECT id_studenta from udaje where email = '$email'";
                    $student_id=mysqli_query($db,$sql);
                    $row_student = mysqli_fetch_row($student_id);
                    $student_id=$row_student[0];
                   # echo $student_id."/";
                    foreach ($bezpryc as &$value) {
                        if($value == "JAVA" or $value=="C++" or $value=="CSharp" or $value=="Python"){
                            #echo $value;
                            $dotaz="SELECT id_jazyka from jazyky where jazyk='$value'";
                            $jazyk_row=mysqli_query($db,$dotaz);
                            
                            $row = mysqli_fetch_row($jazyk_row) ;
                            $jazyk_id=$row[0];
                            #echo $jazyk_id." ";
                            
                            $dotaz2 = "INSERT INTO udaje_o_jazycích (id_jazyka, id_studenta) values('$jazyk_id','$student_id')";
                           $data3=mysqli_query($db,$dotaz2);
                           
                        }
                        else{
                            $vybirani="SELECT ostatni_jazyky from udaje where id_studenta=$student_id";
                            $spoustec_vyberu=mysqli_query($db,$vybirani);
                            $row_vyberu = mysqli_fetch_row($spoustec_vyberu);
                            $zaznam=$row_vyberu[0].$value." ";
                           
                            $jditam="UPDATE udaje set ostatni_jazyky='$zaznam' where id_studenta=$student_id";
                            $funguj=mysqli_query($db,$jditam);
                        }    
                    }
                }                   
                //}
            }
            
           
}
    }
}