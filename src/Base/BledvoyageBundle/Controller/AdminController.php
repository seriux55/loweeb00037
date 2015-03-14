<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Attachment;
use Base\BledvoyageBundle\Entity\Ticket;
use Base\BledvoyageBundle\Entity\Operateur;
use Ob\HighchartsBundle\Highcharts\Highchart;

class AdminController extends Controller
{
    public function indexAction()
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.user', 'c')
                   ->where('b.valider = :valider')
                   ->setParameter('valider', '1')
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        $d = array();
        foreach ($product as $data)
        {
            $number = 1;
            if(!in_array($data->getSortie()->getTitre(), $d))
            {
                $sorties[] = array(
                    'id'            => $data->getSortie()->getId(),
                    'titre'         => $data->getSortie()->getTitre(),
                    'localisation'  => $data->getSortie()->getLocalisation(),
                    'dateDebut'     => $data->getSortie()->getDateDebut(),
                    'dateFin'       => $data->getSortie()->getDateFin(),
                    'heureDebut'    => $data->getSortie()->getHeureDebut(),
                    'heureFin'      => $data->getSortie()->getHeureFin(),
                    'tarif'         => $data->getSortie()->getTarif(),
                );
                $d[] = $data->getSortie()->getTitre();
            }
            $reservation[] = array(
                'number'        => $number,
                'id'            => $data->getId(),
                'sortie'        => $data->getSortie()->getId(),
                'nom'           => $data->getUser()->getFirstname(),
                'prenom'        => $data->getUser()->getSecondename(),
                'tel'           => $data->getUser()->getPhone(),
                'dateTime'      => $data->getDateTime(),
                'place'         => $data->getNombre(),
                'dateReserver'  => $data->getDateReserver(),
                'dateConfirmer' => $data->getDateConfirmer(),
                'promo'         => $data->getPromoApayer(),
                'formation'     => $data->getLieuFormation(),
                'DateRdv'       => $data->getDateRdv(),
                'HeureRdv'      => $data->getHeureRdv(),
                'lieuRdv'       => $data->getLieuRdv(),
                'avis'          => $data->getAvis(),
                'confirmer'     => $data->getConfirmer(),
                'acompte'       => $data->getAcompte(),
                'note'          => $data->getNote(),
            );
            $number++;
        }
        return $this->render('BaseBledvoyageBundle:Admin:index.html.twig', array(
            'product'       => $sorties,
            'reservation'   => $reservation,
        ));
    }
    
    public function commandeAction()
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.user', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.categorieTicket', 'c')
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        $d = array();
        foreach ($product as $data)
        {
            if(!in_array($data->getCategorieTicket()->getId(), $d))
            {
                $ticket[] = array(
                    'id'        => $data->getCategorieTicket()->getId(),
                    'titre'     => $data->getCategorieTicket()->getNom(),
                    'tarif'     => $data->getCategorieTicket()->getTarif(),
                    'duree'     => $data->getCategorieTicket()->getDuree(),
                    'nombre'    => $data->getCategorieTicket()->getNombreActivite(),
                );
                $d[] = $data->getCategorieTicket()->getId();
            }
            $commande[] = array(
                'id'            => $data->getId(),
                'idCategorie'   => $data->getCategorieTicket()->getId(),
                'nom'           => $data->getUser()->getFirstname(),
                'prenom'        => $data->getUser()->getSecondename(),
                'tel'           => $data->getUser()->getPhone(),
                'dateTime'      => $data->getDateTime(),
                'place'         => $data->getNombre(),
                'dateAchat'     => $data->getDateAchat(),
                'entreprise'    => $data->getEntreprise(),
                'adresse'       => $data->getAdresse(),
                'modePaiement'  => $data->getModePaiement(),
                'confirmer'     => $data->getConfirmer(),
                'facture'       => $data->getFacture(),
                'note'          => $data->getNote(),
                'rdv'           => $data->getDateRdv()->format('d/m/Y').' '.$data->getHeureRdv().' '.$data->getLieuRdv(),
            );
        }
        return $this->render('BaseBledvoyageBundle:Admin:commande.html.twig', array(
            'product'   => $ticket,
            'commande'  => $commande,
        ));
    }
    
    public function reservationAction()
    {
        
        return $this->render('BaseBledvoyageBundle:Admin:reservation.html.twig', array(
                // ...
        ));    
    }
    
    public function presentAction()
    {
        
        return $this->render('BaseBledvoyageBundle:Admin:present.html.twig', array(
                // ...
        ));    
    }
    
    public function commandeConfirmerAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.user', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.categorieTicket', 'c')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $frToDatetime = $this->container->get('FrToDatetime');
            $em = $this->getDoctrine()->getManager();
            $commande = $em->getRepository('BaseBledvoyageBundle:Commande')->find($id);
            $commande->setModePaiement($request->get('paiement'))
                     ->setNombre($request->get('nombre'))
                     ->setLieuRdv($request->get('lieuRdv'))
                     ->setDateRdv(new \DateTime($frToDatetime->toDatetime($request->get('dateRdv'))))
                     ->setHeureRdv($request->get('heureRdv'))
                     ->setConfirmer('1')
                     ->getUser()->setEmail($request->get('email'));
            $em->persist($commande);
            $operateur = new Operateur();
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                      ->setCommande($commande)
                      ->setAction('2')
                      ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            return $this->forward('BaseBledvoyageBundle:Confirmation:confirmerCommande');
        }
        return $this->render('BaseBledvoyageBundle:Admin:commande_confirmer.html.twig', array(
            'product' => $product,
        ));
    }
    
    public function commandeNoteAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.user', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.categorieTicket', 'c')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $commande = $em->getRepository('BaseBledvoyageBundle:Commande')->find($id);
            $notearea = $request->get('notearea');
            $note     = $request->get('note');
            if(empty($notearea) && ($note == 'Annulée')){
                $commande->setNote($note)
                         ->setConfirmer('0');
            }else if(empty($notearea) && ($note != 'Annulée')){
                $commande->setNote($note);
            }else{
                $commande->setNote($notearea);
            }
            $em->persist($commande);
            $operateur = new Operateur();
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                      ->setCommande($commande)
                      ->setAction('1')
                      ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            return $this->forward('BaseBledvoyageBundle:Confirmation:noteCommande');
        }
        return $this->render('BaseBledvoyageBundle:Admin:commande_note.html.twig', array(
            'product' => $product,
        ));    
    }
    
    public function commandeFacturerAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.user', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.categorieTicket', 'c')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        foreach ($product as $data)
        {
            $total = $data->getCategorieTicket()->getTarif() * $data->getNombre();
        }
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $paiement = $em->getRepository('BaseBledvoyageBundle:Paiement')->findOneByMode($request->get('paiement'));
            $commande = $em->getRepository('BaseBledvoyageBundle:Commande')->find($id);
            $commande->setPaiement($paiement)
                     ->setNombre($request->get('nombre'))
                     ->setEntreprise($request->get('entreprise'))
                     ->setAdresse($request->get('adresse'))
                     ->setTextPerso($request->get('textPerso'))
                     ->setFacture('1')
                     ->getUser()->setEmail($request->get('email'));
            $em->persist($commande);
            $ticket  = new Ticket();
            $dateFin = date('Y-m-d', strtotime($commande->getCategorieTicket()->getDuree()));
            $ticket->setCommande($commande)
                   ->setDateFin(new \DateTime($dateFin))
                   ->setIp($this->getRequest()->getClientIp());
            $em->persist($ticket);
            $operateur = new Operateur();
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                      ->setCommande($commande)
                      ->setAction('4')
                      ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            $total   = $commande->getCategorieTicket()->getTarif() * $commande->getNombre();
            $facturePdf = $this->renderView('BaseBledvoyageBundle:Mail:commande_facturer_facture.pdf.twig', array(
                'product' => array(
                    'offre'         => $commande->getCategorieTicket()->getNom(),
                    'prenom'        => $commande->getUser()->getSecondename(),
                    'nom'           => $commande->getUser()->getFirstname(),
                    'idCommande'    => $commande->getId(),
                    'id'            => $ticket->getId(),
                    'dateTime'      => $commande->getDateTime(),
                    'paiement'      => $commande->getPaiement()->getMode(),
                    'entreprise'    => $commande->getEntreprise(),
                    'adresse'       => $commande->getAdresse(),
                    'tel'           => $commande->getUser()->getPhone(),
                    'email'         => $commande->getUser()->getEmail(),
                    'tarif'         => $commande->getCategorieTicket()->getTarif(),
                    'nombre'        => $commande->getNombre(),
                    'total'         => $total,
                )
            ));
            $ticketPdf = $this->renderView('BaseBledvoyageBundle:Mail:commande_facturer_ticket.pdf.twig', array(
                'product' => array(
                    'image'         => $commande->getCategorieTicket()->getPhoto(),
                    'textPerso'     => $request->get('textPerso'),
                    'code'          => $ticket->getCode(),
                    'dateFin'       => date('d/m/Y', strtotime('+'.$commande->getCategorieTicket()->getDuree().' month')),
                )
            ));
            $catalogue = $this->renderView('BaseBledvoyageBundle:Mail:commande_facturer_catalogue.pdf.twig');
            $pdf_1 = new \HTML2PDF('P','A4','fr');
            $pdf_1->pdf->SetDisplayMode('real');
            $pdf_1->writeHTML($ticketPdf);
            $content_1 = $pdf_1->Output('Ticket.pdf', true);
            $pdf_2 = new \HTML2PDF('P','A4','fr');
            $pdf_2->pdf->SetDisplayMode('real');
            $pdf_2->writeHTML($facturePdf);
            $content_2 = $pdf_2->Output('Facture_'.$commande->getUser()->getSecondename().'_'.$commande->getUser()->getFirstname().'.pdf', true);
            $pdf_3 = new \HTML2PDF('P','A4','fr');
            $pdf_3->pdf->SetDisplayMode('real');
            $pdf_3->writeHTML($catalogue);
            $content_3 = $pdf_3->Output('Catalogue.pdf', true);
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email') //Confirmation de reservation, bledvoyage.com
                ->setFrom('contact@bledvoyage.com')
                ->setTo('nadir.allam@gmail.com')
                ->setBody($this->renderView('BaseBledvoyageBundle:Mail:commande_facturer.html.twig', array(
                    'product' => array(
                        'id'            => $commande->getId(),
                        'prenom'        => $commande->getUser()->getSecondename(),
                        'nom'           => $commande->getUser()->getFirstname(),
                        'tel'           => $commande->getUser()->getPhone(),
                        'email'         => $commande->getUser()->getEmail(),
                        'tarif'         => $commande->getCategorieTicket()->getTarif(),
                        'nombre'        => $commande->getNombre(),
                        'ticket'        => $commande->getCategorieTicket()->getNom(),
                        'dateTime'      => $commande->getDateTime(),
                        'paiement'      => $commande->getPaiement()->getMode(),
                        'total'         => $total,
                    )
                )))
                ->attach(Swift_Attachment::newInstance($content_1, 'Ticket.pdf', 'application/pdf'))
                ->attach(Swift_Attachment::newInstance($content_2, 'Facture_'.$commande->getUser()->getSecondename().'_'.$commande->getUser()->getFirstname().'.pdf', 'application/pdf'))
                ->attach(Swift_Attachment::newInstance($content_3, 'Catalogue.pdf', 'application/pdf'))
            ;
            $this->get('mailer')->send($message);
            
            return $this->forward('BaseBledvoyageBundle:Confirmation:facturerCommande');
        }
        return $this->render('BaseBledvoyageBundle:Admin:commande_facturer.html.twig', array(
            'product' => $product,
            'total'   => $total,
        ));
    }
    
    public function reservationNoteAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.user', 'c')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em       = $this->getDoctrine()->getManager();
            $booking  = $em->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            $notearea = $request->get('notearea');
            $note     = $request->get('note');
            if(empty($notearea) && ($note == 'Annulée')){
                $booking->setNote($note)
                        ->setConfirmer('0');
            }else if(empty($notearea) && ($note != 'Annulée')){
                $booking->setNote($note);
            }else{
                $booking->setNote($notearea);
            }
            $em->persist($booking);
            $operateur = new Operateur();
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                      ->setBooking($booking)
                      ->setAction('1')
                      ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            return $this->forward('BaseBledvoyageBundle:Confirmation:noteReservation');
        }
        return $this->render('BaseBledvoyageBundle:Admin:reservation_note.html.twig', array(
            'product' => $product,
        ));    
    }
    
    public function reservationConfirmerAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.user', 'c')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $frToDatetime = $this->container->get('FrToDatetime');
            $em = $this->getDoctrine()->getManager();
            $booking = $em->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            $booking->setNombre($request->get('nombre'))
                    ->setDateConfirmer(new \DateTime($frToDatetime->toDatetime($request->get('dateConfirmer'))))
                    ->setCreneau($request->get('creneau'))
                    ->setConfirmer('1')
                    ->getUser()->setEmail($request->get('email'));
            $date1  = $request->get('date1');
            $heure1 = $request->get('heure1');
            $date2  = $request->get('date2');
            $heure2 = $request->get('heure2');
            $lieu2  = $request->get('lieu2');
            if(!empty($date1) || !empty($heure1)){
                $booking->setdateRdv(new \DateTime($frToDatetime->toDatetime($request->get('date1'))))
                        ->setHeureRdv($request->get('heure1'))
                        ->setLieuRdv('Chenoua');
            }elseif(!empty($date2) || !empty($heure2) || !empty($lieu2)){
                $booking->setDateRdv(new \DateTime($frToDatetime->toDatetime($request->get('date2'))))
                        ->setHeureRdv($request->get('heure2'))
                        ->setLieurdv($request->get('lieu2'));
            }
            $em->persist($booking);
            $operateur = new Operateur;
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                      ->setBooking($booking)
                      ->setAction('2')
                      ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email') //Confirmation de reservation, bledvoyage.com
                ->setFrom('contact@bledvoyage.com')
                ->setTo('nadir.allam@bledvoyage.com')
                ->setBody($this->renderView('BaseBledvoyageBundle:Mail:reservation_confirmer.txt.twig', array(
                    'product' => array(
                        'prenom'        => $booking->getUser()->getSecondename(),
                        'id'            => $booking->getId(),
                        'sortie'        => $booking->getSortie()->getTitre(),
                        'dateTime'      => $booking->getDateTime(),
                        'tarif'         => $booking->getSortie()->getTarif(),
                        'heureDebut'    => $booking->getSortie()->getHeureDebut(),
                        'nombre'        => $booking->getNombre(),
                        'creneau'       => $booking->getCreneau(),
                        'condition'     => $booking->getSortie()->getConditions(),
                        'moniteur'      => $booking->getSortie()->getUser()->getSecondename().' '.$booking->getSortie()->getUser()->getFirstname(),
                        'planAcces'     => $booking->getSortie()->getPlanAcces(),
                    )
                )))
            ;
            $this->get('mailer')->send($message);
            return $this->forward('BaseBledvoyageBundle:Confirmation:noteReservation');
        }
        
        return $this->render('BaseBledvoyageBundle:Admin:reservation_confirmer.html.twig', array(
            'product' => $product,
        ));    
    }
    
    public function reservationAvisAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.user', 'c')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        foreach ($product as $data)
        {
            $total = $data->getSortie()->getTarif() * $data->getNombre();
        }
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $booking = $em->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            $booking->setAvis('2');
            $em->persist($booking);
            $operateur = new Operateur;
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                      ->setBooking($booking)
                      ->setAction('5')
                      ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email') //Votre sortie, bledvoyage.com
                ->setFrom('contact@nroho.com')
                ->setTo('nadir.allam@bledvoyage.com')
                ->setBody($this->renderView('BaseBledvoyageBundle:Mail:reservation_avis.txt.twig', array(
                    'product' => array(
                        'id'            => $booking->getId(),
                        'nom'           => $booking->getUser()->getFirstname(),
                        'prenom'        => $booking->getUser()->getSecondename(),
                        'sortie'        => $booking->getSortie()->getTitre(),
                        'localisation'  => $booking->getSortie()->getLocalisation(),
                        'email'         => $booking->getUser()->getEmail(),
                        'tel'           => $booking->getUser()->getPhone(),
                        'dateTime'      => $booking->getDateTime(),
                        'tarif'         => $booking->getSortie()->getTarif(),
                        'nombre'        => $booking->getNombre(),
                        'total'         => $total,
                    )
                )))
            ;
            $this->get('mailer')->send($message);
            return $this->forward('BaseBledvoyageBundle:Confirmation:avisReservation');
        }
        return $this->render('BaseBledvoyageBundle:Admin:reservation_avis.html.twig', array(
            'product' => $product,
            'total'   => $total,
        ));    
    }
    
    public function reservationAcompteAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.user', 'c')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        foreach($product as $data)
        {
            $total = $data->getSortie()->getTarif() * $data->getNombre();
        }
        
        return $this->render('BaseBledvoyageBundle:Admin:reservation_acompte.html.twig', array(
            'product' => $product,
            'total'   => $total,
        ));    
    }
    
    public function statisticAction()
    {
        $date1 = date('Y-m-d', strtotime(date('Y-m-d').' - 6 DAY'));
        $date2 = date('Y-m-d', strtotime(date('Y-m-d').' - 5 DAY'));
        $date3 = date('Y-m-d', strtotime(date('Y-m-d').' - 4 DAY'));
        $date4 = date('Y-m-d', strtotime(date('Y-m-d').' - 3 DAY'));
        $date5 = date('Y-m-d', strtotime(date('Y-m-d').' - 2 DAY'));
        $date6 = date('Y-m-d', strtotime(date('Y-m-d').' - 1 DAY'));
        $date7 = date('Y-m-d');
        $commande = $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
                   ->createQueryBuilder('a')
                   ->where('a.dateTime >= :date')
                   ->setParameter('date', date('Y-m-d', strtotime(date('Y-m-d').' - 6 DAY')))
                   ->getQuery()
                   ->getResult();
        $reservation = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->where('a.dateTime >= :date')
                   ->setParameter('date', date('Y-m-d', strtotime(date('Y-m-d').' - 6 DAY')))
                   ->getQuery()
                   ->getResult();
        $ticket = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Ticket')
                   ->createQueryBuilder('a')
                   ->where('a.dateTime >= :date')
                   ->setParameter('date', date('Y-m-d', strtotime(date('Y-m-d').' - 6 DAY')))
                   ->getQuery()
                   ->getResult();
        $reservation1 = $reservation2 = $reservation3 = $reservation4 = $reservation5 = $reservation6 = $reservation7 = 0;
        $commande1 = $commande2 = $commande3 = $commande4 = $commande5 = $commande6 = $commande7 = 0;
        $ticket1 = $ticket2 = $ticket3 = $ticket4 = $ticket5 = $ticket6 = $ticket7 = 0;
        
        foreach($reservation as $data){
            $datetime = $data->getDateTime()->format('Y-m-d');
            switch($datetime){
                case $date1:
                    $reservation1++; break;
                case $date2:
                    $reservation2++; break;
                case $date3:
                    $reservation3++; break;
                case $date4:
                    $reservation4++; break;
                case $date5:
                    $reservation5++; break;
                case $date6:
                    $reservation6++; break;
                case $date7:
                    $reservation7++; break;
            }
        }
        foreach($commande as $data){
            $datetime = $data->getDateTime()->format('Y-m-d');
            switch($datetime){
                case $date1:
                    $commande1++; break;
                case $date2:
                    $commande2++; break;
                case $date3:
                    $commande3++; break;
                case $date4:
                    $commande4++; break;
                case $date5:
                    $commande5++; break;
                case $date6:
                    $commande6++; break;
                case $date7:
                    $commande7++; break;
            }
        }
        foreach($ticket as $data){
            $datetime = $data->getDateTime()->format('Y-m-d');
            switch($datetime){
                case $date1:
                    $ticket1++; break;
                case $date2:
                    $ticket2++; break;
                case $date3:
                    $ticket3++; break;
                case $date4:
                    $ticket4++; break;
                case $date5:
                    $ticket5++; break;
                case $date6:
                    $ticket6++; break;
                case $date7:
                    $ticket7++; break;
            }
        }
        // Chart
        $sellsHistory = array(
            array(
                "name" => "Total des reservations", 
                "data" => array($reservation1, $reservation2, $reservation3, $reservation4, $reservation5, $reservation6, $reservation7)
            ),
            array(
                "name" => "Total des commandes", 
                "data" => array($commande1, $commande2, $commande3, $commande4, $commande5, $commande6, $commande7)
            ),
            array(
                "name" => "Tickets vendu", 
                "data" => array($ticket1, $ticket2, $ticket3, $ticket4, $ticket5, $ticket6, $ticket7)
            ),
        );
        $dates  = array($date1, $date2, $date3, $date4, $date5, $date6, $date7);
        $ob     = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('linechart');  
        $ob->title->text('Du '.date('d/m/Y', strtotime(date('Y-m-d').' - 6 DAY')).' au '.date('d/m/Y'));
        $ob->yAxis->title(array('text' => "La quantité"));
        $ob->xAxis->title(array('text' => "La date"));
        $ob->xAxis->categories($dates);
        $ob->series($sellsHistory);
        return $this->render('BaseBledvoyageBundle:Admin:statistic.html.twig', array(
            'chart' => $ob,
        )); 
    }
}
