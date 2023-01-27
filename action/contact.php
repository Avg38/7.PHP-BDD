<?php 
require "../cfg/config.php"; 
    if(isset($_POST['send']))
    {
        if(!empty($_POST['email']) AND !empty($_POST['message']))
        {
            $sql = "INSERT INTO contact (email, message) VALUES (:email, :message)";
            $pre = $pdo->prepare($sql);
            $pre->bindParam("email", htmlspecialchars($_POST['email']));
            $pre->bindParam("message", htmlspecialchars($_POST['message']));
            $pre->execute();

            header('Location:../index.php');
        if (isset($_POST['email'])) {

            $to = "avialleguerin@guardiaschool.fr";
            $subject = 'Merci pour votre message';
            $message = 'Nous allons étudier votre message et vous répondre dans les plus bref délais';
            $headers = implode("\r\n", array('MIME-Version: 1.0','Content-type: text/html; charset=utf8'));

            mail($to, $subject, $message, $headers);
        }

        } elseif(empty($_POST['email']) AND !empty($_POST['message']))
        {
            echo "Veuillez insérer votre email";
        }
        else {
            echo "Veuillez insérer votre message";
        }
       
    }
?>