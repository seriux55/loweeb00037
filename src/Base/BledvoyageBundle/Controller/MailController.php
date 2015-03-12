<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Attachment;

class MailController extends Controller
{
    public function indexAction()
    {
        $html = "<page>allo</page>";
        $body = "azerty";
        $html2pdf = new \HTML2PDF('P','A4','fr');

        $html2pdf->pdf->SetDisplayMode('real');
 
        $html2pdf->writeHTML($html);
 
        $content = $html2pdf->Output('Facture.pdf', true);
        
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('contact@bledvoyage.com')
            ->setTo(array('validation@nroho.com', 'seriux55@hotmail.com'))
            ->setBody('hey!')
            ->attach(Swift_Attachment::newInstance($content, 'document1.pdf', 'application/pdf'))
            ->attach(Swift_Attachment::newInstance($content, 'document2.pdf', 'application/pdf'))
        ;
    
        $this->get('mailer')->send($message);
        
        return $this->render('BaseBledvoyageBundle:Mail:index.html.twig', array(
            //'product' => $paiement,
        ));
    }
}
