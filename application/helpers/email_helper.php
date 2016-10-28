<?php
/**
 * Email Helper
 * 
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

require_once APPPATH.'../vendor/autoload.php';


function send_email_swiftmailer($send_to, $subject, $text)
{
    $ci =& get_instance();
    
    $ci->config->load('email');
    
    
    //Create the Transport. I created it using the gmail configuration
    $transport = Swift_SmtpTransport::newInstance(
        $ci->config->item('smtp'), 
        $ci->config->item('port'),
        $ci->config->item('ssl')
    )
   ->setUsername($ci->config->item('email'))
   ->setPassword($ci->config->item('pass'));
 
    // You could alternatively use a different transport such as Sendmail or Mail:
    //Sendmail:
    //$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
    //Mail
    //$transport = Swift_MailTransport::newInstance();
 
    //Create the message
    $message = Swift_Message::newInstance();
 
    //Give the message a subject
    $message->setSubject($subject)
      ->setFrom($ci->config->item('email'))
      ->setTo($send_to)
      ->setBody('n')
      ->addPart($text, 'text/html');
 
    //Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);
 
    //Send the message
    $result = $mailer->send($message);
 
    if ($result) {
        return true;
    }
    else
    {
        return false;
    }
}



?>