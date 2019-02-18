<?php
    
    $name = $_POST['name_of_client'];
    $organization = $_POST['client_organization']; 
    $email = $_POST['client_email']; 
    $message =$_POST['client_message']; 
    
    $email_from = 'welshdavmsu@gmail.com';
    $email_subject = "Grant Place Designs Inquiry"; 

    $email_body = "Client Name: $name. \n".
                    "Client Organization: $organization. \n". 
                    "Client Email: $email. \n". 
                    "Client Message: $message. \n"; 
                    
    $to = "welshdavmsu@gmail.com"; 
    
    $headers = "From: $email_from \r\n"; 
    
    $headers .= "Reply-To: $email \r\n"; 
    
    mail($to, $email_subject, $email_body, $headers); 
    
    header("Location: contact.html")
    
?>
