<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Swift_Attachment;
use Base\BledvoyageBundle\Entity\Ticket;
use Base\BledvoyageBundle\Entity\Commande;
use Base\BledvoyageBundle\Entity\Operateur;
use Base\BledvoyageBundle\Entity\Invitation;
use Ob\HighchartsBundle\Highcharts\Highchart;

class AdminController extends Controller
{
    public function reservationAction()
    {
        $locale = $this->get('request')->getLocale();
        $qb     = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.sortie', 'b')
            ->addSelect('c')
            ->leftJoin('a.user', 'c')
            ->where('b.valider = :valider')
            ->setParameter('valider', '1')
            ->orderBy('a.id','ASC');
        $query  = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $product = $query->getResult();
        
        $qb     = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Invitation')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.sortie', 'b');
        $query  = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $invitation = $query->getResult();
        
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
            if(null === $data->getInvitation()){
                $reservation[] = array(
                    'number'            => $number,
                    'id'                => $data->getId(),
                    'sortie'            => $data->getSortie()->getId(),
                    'nom'               => $data->getUser()->getFirstname(),
                    'prenom'            => $data->getUser()->getSecondename(),
                    'tel'               => $data->getUser()->getPhone(),
                    'dateTime'          => $data->getDateTime(),
                    'place'             => $data->getNombre(),
                    'dateReserver'      => $data->getDateReserver(),
                    'dateConfirmer'     => $data->getDateConfirmer(),
                    'promo'             => $data->getPromoApayer(),
                    'formation'         => $data->getLieuFormation(),
                    'DateRdv'           => $data->getDateRdv(),
                    'HeureRdv'          => $data->getHeureRdv(),
                    'lieuRdv'           => $data->getLieuRdv(),
                    'avis'              => $data->getAvis(),
                    'confirmer'         => $data->getConfirmer_user(),
                    'acompte'           => $data->getAcompte_user(),
                    'avisUser'          => $data->getAvis_user(),
                    'noteUser'          => $data->getNote_user(),
                    'note'              => $data->getNote(),
                    'ticketPromo'       => $data->getTicketPromo(),
                    'vip'               => $data->getUser()->getVip(),
                    'acompteTarif'      => $data->getAcompte(),
                );
            }else{
                foreach($invitation as $inv){
                    if($inv == $data->getInvitation()){
                        $reservation[] = array(
                            'number'            => $inv->getId(),
                            'id'                => $data->getId(),
                            'sortie'            => $inv->getSortie()->getId(),
                            'nom'               => $inv->getNom(),
                            'prenom'            => $inv->getPrenom(),
                            'tel'               => $inv->getTelephone(),
                            'dateTime'          => $inv->getDateTime(),
                            'place'             => $inv->getNombre(),
                            'dateReserver'      => $data->getDateReserver(),
                            'dateConfirmer'     => $data->getDateConfirmer(),
                            'promo'             => $data->getPromoApayer(),
                            'formation'         => $data->getLieuFormation(),
                            'DateRdv'           => $data->getDateRdv(),
                            'HeureRdv'          => $data->getHeureRdv(),
                            'lieuRdv'           => $data->getLieuRdv(),
                            'avis'              => $data->getAvis(),
                            'confirmer'         => $data->getConfirmer_user(),
                            'acompte'           => $data->getAcompte_user(),
                            'avisUser'          => $data->getAvis_user(),
                            'noteUser'          => $data->getNote_user(),
                            'note'              => 'Invitation: réduction de '.$inv->getPourcentage().'%',
                            'ticketPromo'       => '',
                            'vip'               => '',
                            'acompteTarif'      => '',
                        );
                       
                    } 
                }
            }
            
            $number++;
        }
        // Lors de la submission du formulaire de generation du pdf
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $i = $nbr_resa = $nbr_place = 0;
            foreach ($product as $data)
            {
                $frToDatetime = $this->container->get('FrToDatetime');
                $date         = new \DateTime($frToDatetime->todatetime($request->request->get('pdf')));
                $sortie_id    = $request->request->get('sortie');
                if($data->getSortie()->getId() == $sortie_id && $data->getConfirmer_user() !== null && $data->getDateConfirmer() == $date){
                    $participant[] = array(
                        'id'      => $data->getId(),
                        'prenom'  => $data->getUser()->getSecondename(),
                        'nom'     => $data->getUser()->getFirstname(),
                        'nombre'  => $data->getNombre(),
                        'note'    => $data->getNote(),
                        'creneau' => $data->getCreneau(),
                        'tel'     => $data->getUser()->getPhone(),
                    );
                    $nbr_resa++;
                    $nbr_place = $nbr_place + $data->getNombre();
                    if ($i === 0) {
                        $titre = $data->getSortie()->getTitre();
                        $tarif = $data->getSortie()->getTarif();
                        $i = 1; 
                    }
                }
            }
            if($i === 1){
                $devisPdf = $this->render('BaseBledvoyageBundle:Mail:admin_liste_participant.pdf.twig', array(
                    'titre'    => $titre,
                    'tarif'    => $tarif,
                    'product'  => $participant,
                    'nbrResa'  => $nbr_resa,
                    'nbrPlace' => $nbr_place,
                    'date'     => $date,
                ));
                $pdf_1 = new \HTML2PDF('P','A4','fr');
                $pdf_1->pdf->SetDisplayMode('real');
                $pdf_1->writeHTML($devisPdf);
                $content_1 = $pdf_1->Output('participant.pdf', true);
                $message = \Swift_Message::newInstance()
                    ->setSubject('test liste des participant, bledvoyage.com')
                    ->setFrom('contact@bledvoyage.com')
                    ->setTo(array('nadir.allam@bledvoyage.com'))
                    ->setBody('Bonjour la liste')
                    ->attach(Swift_Attachment::newInstance($content_1, 'participants.pdf', 'application/pdf'))
                ;
                $this->get('mailer')->send($message);
                return $devisPdf;
            }
        }
        
        return $this->render('BaseBledvoyageBundle:Admin:reservation.html.twig', array(
            'product'       => $sorties,
            'reservation'   => $reservation,
            'invitation'    => $invitation,
        ));
    }
    
    public function commandeAction()
    {
        $locale     = $this->get('request')->getLocale();
        $qb = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.user', 'b')
            ->addSelect('c')
            ->leftJoin('a.categorieTicket', 'c')
            ->orderBy('a.id','ASC');
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $product = $query->getResult();
        
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
    
    public function listesAction()
    {
        $locale     = $this->get('request')->getLocale();
        $qb = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.user', 'b')
            ->addSelect('c')
            ->leftJoin('a.sortie', 'c')
            ->where('a.confirmer_user IS NOT NULL')
            ->orderBy('a.id','ASC');
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $product = $query->getResult();
        
        $totalReservation = $totalPlace = 0;
        $d = $resa = $dateConfirmer = array();
        foreach ($product as $data) {
            if(!in_array($data->getSortie()->getId(), $d)){
                $sorties[]  = $data->getSortie();
                $d[]        = $data->getSortie()->getId();
            }
            if(!in_array($data->getDateConfirmer(), $dateConfirmer)){
                $dateConfirmer['date'] = $data->getDateConfirmer();
            }
            $totalReservation = $totalReservation + 1;
            $totalPlace       = $totalPlace + $data->getNombre();
        }
        $nbrReservation = $nbrPlace = array();
        foreach ($product as $data) {
            foreach($dateConfirmer['date'] as $date){
                if (array_key_exists('a'.strtotime($date), $nbrReservation)) {
                    $nbrReservation['a'.strtotime($date)] = $nbrReservation['a'.strtotime($date)] + 1;
                }else{
                    $nbrReservation['a'.strtotime($date)] = 1;
                }
                if (array_key_exists('a'.strtotime($date), $nbrPlace)) {
                    $nbrPlace['a'.strtotime($date)] = $nbrPlace['a'.strtotime($date)] + $data->getNombre();
                }else{
                    $nbrPlace['a'.strtotime($date)] = $data->getNombre();
                }
            }
        }
        
        return $this->render('BaseBledvoyageBundle:Admin:listes.html.twig', array(
            'product'           => $product,
            'sortie'            => $sorties,
            'resa'              => $resa,
            'dateConfirmer'     => $dateConfirmer,
            'nbrPlace'          => $nbrPlace,
            'nbrReservation'    => $nbrReservation,
            'nbrSortie'         => count($d),
            'totalReservation'  => $totalReservation,
            'totalPlace'        => $totalPlace,
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
            if($request->get('paiement') == "Chenoua"){
                $commande->setModePaiement($request->get('paiement'))
                    ->setNombre($request->get('nombre'))
                    ->setDateRdv(new \DateTime($frToDatetime->toDatetime($request->get('date1'))))
                    ->setHeureRdv($request->get('heure1'))
                    ->setConfirmer('1')
                    ->getUser()->setEmail($request->get('email'));
            }else{
                $commande->setModePaiement($request->get('paiement'))
                    ->setNombre($request->get('nombre'))
                    ->setLieuRdv($request->get('lieuRdv'))
                    ->setDateRdv(new \DateTime($frToDatetime->toDatetime($request->get('dateRdv'))))
                    ->setHeureRdv($request->get('heureRdv'))
                    ->setConfirmer('1')
                    ->getUser()->setEmail($request->get('email'));
            }
            
            $em->persist($commande);
            $operateur = new Operateur();
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                ->setCommande($commande)
                ->setAction('2')
                ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject('test Confirmation de commande') //Confirmation de reservation, bledvoyage.com
                ->setFrom('contact@bledvoyage.com')
                ->setTo(array('nadir.allam@bledvoyage.com'))
                ->setBody($this->renderView('BaseBledvoyageBundle:Mail:commande_confirmer.txt.twig', array(
                    'product' => array(
                        'prenom'        => $commande->getUser()->getSecondename(),
                        'id'            => $commande->getId(),
                        'categorie'     => $commande->getCategorieTicket()->getNom(),
                        'dateTime'      => $commande->getDateTime(),
                        'tarif'         => $commande->getCategorieTicket()->getTarif(),
                        'nombre'        => $commande->getNombre(),
                        'modePaiement'  => $commande->getModePaiement(),
                        'dateRdv'       => $commande->getDateRdv(),
                        'heureRdv'      => $commande->getHeureRdv(),
                        'lieuRdv'       => $commande->getLieuRdv(),
                        'descriptif'    => $commande->getCategorieTicket()->getDescription(),
                        'conditions'    => $commande->getCategorieTicket()->getConditions(),
                    )
                )))
            ;
            $this->get('mailer')->send($message);
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
            $user     = $this->get('security.context')->getToken()->getUser();
            $commande->setPaiement($paiement)
                     ->setNombre($request->get('nombre'))
                     ->setEntreprise($request->get('entreprise'))
                     ->setAdresse($request->get('adresse'))
                     ->setTextPerso($request->get('textPerso'))
                     ->setFacture('1')
                     ->getUser()->setEmail($request->get('email'));
            $user->setNomEntreprise($request->get('entreprise'))
                 ->setAdresseEntreprise($request->get('adresse'));
            $em->persist($commande);
            $ticket  = new Ticket();
            $dateFin = date('Y-m-d', strtotime('+'.$commande->getCategorieTicket()->getDuree().'month', strtotime(date('Y-m-d'))));
            $ticket->setCommande($commande)
                   ->setDateFin(new \DateTime($dateFin))
                   ->setIp($this->getRequest()->getClientIp());
            $em->persist($ticket);
            $operateur = new Operateur();
            $operateur->setUser($user)
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
                    'descriptif'    => $commande->getCategorieTicket()->getDescription(),
                    'conditions'    => $commande->getCategorieTicket()->getConditions(),
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
                ->setSubject('test Votre ticket cadeau, bledvoyage.com')
                ->setFrom('contact@bledvoyage.com')
                ->setTo(array('nadir.allam@bledvoyage.com','karim.man@live.fr'))
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
                        ->setConfirmer_user(null);
            }else if(empty($notearea) && ($note != 'Annulée')){
                $booking->setNote($note);
            }else{
                $booking->setNote($notearea);
            }
            $booking->setNote_user($this->get('security.context')->getToken()->getUser());
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
                    ->getUser()->setEmail($request->get('email'));
            $booking->setConfirmer_user($this->get('security.context')->getToken()->getUser());
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
                ->setSubject('test Confirmation de reservation, bledvoyage.com')
                ->setFrom('contact@bledvoyage.com')
                ->setTo(array('nadir.allam@bledvoyage.com','karim.man@live.fr'))
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
            return $this->forward('BaseBledvoyageBundle:Confirmation:confirmerReservation');
        }
        
        return $this->render('BaseBledvoyageBundle:Admin:reservation_confirmer.html.twig', array(
            'product' => $product,
        ));    
    }
    
    public function reservationAvisAction($id)
    {
        $total   = 0;
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
            $booking->setAvis_user($this->get('security.context')->getToken()->getUser());
            $em->persist($booking);
            $operateur = new Operateur;
            $operateur->setUser($this->get('security.context')->getToken()->getUser())
                      ->setBooking($booking)
                      ->setAction('5')
                      ->setIp($this->getRequest()->getClientIp());
            $em->persist($operateur);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject('test Votre sortie, bledvoyage.com')
                ->setFrom('contact@nroho.com')
                ->setTo(array('nadir.allam@bledvoyage.com','karim.man@live.fr'))
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
    
    /*
    public function reservationVipAction($id)
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
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            $product->getUser()->setVip('1');
            $em->persist($product);
            $em->flush();
            return $this->forward('BaseBledvoyageBundle:Confirmation:avisReservation');
        }
        return $this->render('BaseBledvoyageBundle:Admin:reservation_vip.html.twig', array(
            'product' => $product,
        ));    
    }
    */
    
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
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            $acompte = $request->request->get('acompte');
            if (!empty($acompte)) {
                $product->setAcompte($acompte);
            }
            $product->setAcompte_user($this->get('security.context')->getToken()->getUser());
            $em->persist($product);
            $em->flush();
            return $this->forward('BaseBledvoyageBundle:Confirmation:acompteReservation');
        }
        return $this->render('BaseBledvoyageBundle:Admin:reservation_acompte.html.twig', array(
            'product' => $product,
            'total'   => $total,
        ));    
    }
    
    public function statisticAction()
    {
        $year  = date('Y');
        $month = date('m');
        
        $commandes = $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
                   ->createQueryBuilder('a')
                   ->where('a.dateTime >= :date')
                   ->setParameter('date', date('Y-m-d', strtotime($year.'-01-01')))
                   ->getQuery()
                   ->getResult();
        $reservations = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->where('a.dateTime >= :date')
                   ->setParameter('date', date('Y-m-d', strtotime($year.'-01-01')))
                   ->getQuery()
                   ->getResult();
        
        /*
        $ticket = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Ticket')
                   ->createQueryBuilder('a')
                   ->where('a.dateTime >= :date')
                   ->setParameter('date', date('Y-m-d', strtotime($year.'-01-01')))
                   ->getQuery()
                   ->getResult();
        */
        
        for($i=1; $i<=$month; $i++){
            $dte1[$i]  = $year.'-'.$i.'-01';
            $dte2[$i]  = $year.'-'.($i+1).'-01';
            $date1[$i] = date("Y-m-d", strtotime($dte1[$i]));
            $date2[$i] = date("Y-m-d", strtotime($dte2[$i]));
            // les reservations
            $reservation[$i] = 0;
            foreach($reservations as $data){
                $datetime = $data->getDateTime()->format('Y-m-d');
                if (date($datetime) >= date($date1[$i]) && date($datetime) < date($date2[$i])){
                    $reservation[$i] = $reservation[$i] + 1;
                }
            }
            // les commandes
            $commande[$i] = 0;
            foreach($commandes as $data){
                $datetime = $data->getDateTime()->format('Y-m-d');
                if (date($datetime) >= date($date1[$i]) && date($datetime) < date($date2[$i])){
                    $commande[$i] = $commande[$i] + 1;
                }
            }
        }
        $dataR = $dataC = array();
        for($i=1; $i<=$month; $i++){
            $dataR[]  = $reservation[$i];
            $dataC[]  = $commande[$i];
            switch ($i){
                case  1: $dates[] = 'Janvier';   break;
                case  2: $dates[] = 'Février';   break;
                case  3: $dates[] = 'Mars';      break;
                case  4: $dates[] = 'Avril';     break;
                case  5: $dates[] = 'Maï';       break;
                case  6: $dates[] = 'Juin';      break;
                case  7: $dates[] = 'Juillet';   break;
                case  8: $dates[] = 'Août';      break;
                case  9: $dates[] = 'Septembre'; break;
                case 10: $dates[] = 'Octobre';   break;
                case 11: $dates[] = 'Novembre';  break;
                case 12: $dates[] = 'Décembre';  break;
            }
        }
        $sellsHistory = array(
            array(
                "name" => "Total des reservations", 
                "data" => $dataR,
            ),
            array(
                "name" => "Total des commandes", 
                "data" => $dataC,
            ),
        );
        
        /*
        $reservation1 = $reservation2 = $reservation3 = $reservation4 = $reservation5 = $reservation6 = $reservation7 = 0;
        $commande1 = $commande2 = $commande3 = $commande4 = $commande5 = $commande6 = $commande7 = 0;
        $ticket1 = $ticket2 = $ticket3 = $ticket4 = $ticket5 = $ticket6 = $ticket7 = 0;
        
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
        */
        //$dates  = array($date1, $date2, '$date3', '$date4', '$date5', '$date6', '$date7');
        $ob     = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('linechart');  
        $ob->title->text('Du '.date('d/m/Y', strtotime(date('Y-m-d').' - 6 DAY')).' au '.date('d/m/Y'));
        $ob->chart->type('column');
        $ob->yAxis->title(array('text' => "La quantité"));
        $ob->xAxis->title(array('text' => "La date"));
        $ob->xAxis->categories($dates);
        $ob->series($sellsHistory);
        return $this->render('BaseBledvoyageBundle:Admin:statistic.html.twig', array(
            'chart' => $ob,
        )); 
    }
    
    public function statisticMoisAction($year = 15)
    {
        $locale             = $this->get('request')->getLocale();
        $dateFromNumberWeek = $this->container->get('dateFromNumberWeek');
        $toTwoDate          = $dateFromNumberWeek->toTwoDate(1, 2015);
        $dimanche           = $toTwoDate[0];
        $samedi             = $toTwoDate[1];
        
        $year = '20'.$year;
        if ($year == date('Y')){
            $month = date('m');
            $dateB = date('Y-m-d');
        }else{
            $month = 12;
            $dateB = date('Y-m-d', strtotime($year.'-12-31'));
        }
        
        $qb = $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.categorieTicket', 'b')
            ->where('a.dateTime >= :dateA AND a.dateTime <= :dateB')
            ->setParameters(array(
                'dateA' => date('Y-m-d', strtotime($year.'-01-01')),
                'dateB' => $dateB,
            ));
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $commandes = $query->getResult();
        
        $qb = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.sortie', 'b')
            ->where('a.dateTime >= :dateA AND a.dateTime <= :dateB')
            ->setParameters(array(
                'dateA' => date('Y-m-d', strtotime($year.'-01-01')),
                'dateB' => $dateB,
            ));
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $reservations = $query->getResult();
        
        $operateurs = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Operateur')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.user', 'b')
            ->where('a.dateTime >= :dateA AND a.dateTime <= :dateB')
            ->setParameters(array(
               'dateA' => date('Y-m-d', strtotime($year.'-01-01')),
               'dateB' => $dateB,
            ))
            ->getQuery()
            ->getResult();
        
        $nm = 0;
        $m = array();
        foreach($operateurs as $data){
            if(!in_array($data->getUser()->getEmail(), $m)){
                $m[] = $data->getUser()->getEmail();
            }
            $nm = count($m);
        }
        // initialisation for($j=1; $j<=$nm; $j++){
        for($i=1; $i<=$month; $i++){
            $reservation[$i] = $confirmationR[$i] = $avisR[$i] = $annulationR[$i] = $receteR[$i] = 0;
            $commande[$i] = $confirmationC[$i] = $facture[$i] = $annulationC[$i] = $receteC[$i] = 0;
            $dataR = $dataC = $confirmerR = $avisRR = $annulerR = $confirmerC = $factureC = $annulerC = $recetesR = $recetesC = $noteO = $confirmerO = $acompteO = $factureO = $avisO = array();
            for($j=1; $j<=$nm; $j++){
                $note[$i][$j] = $confirmer[$i][$j] = $acompte[$i][$j] = $factureO[$i][$j] = $avisO[$i][$j] = 0;
                $noteO[$j] = $confirmerO[$j] = $acompteO[$j] = $factureOO[$j] = $avisOO[$j] = array();
            }
        }
        for($i=1; $i<=$month; $i++){
            $dte1[$i]  = $year.'-'.$i.'-01';
            $dte2[$i]  = $year.'-'.$i.'-31';
            $date1[$i] = date("Y-m-d", strtotime($dte1[$i]));
            $date2[$i] = date("Y-m-d", strtotime($dte2[$i]));
            // Les reservations
            
            foreach($reservations as $data){
                $datetime = $data->getDateTime()->format('Y-m-d');
                if (date($datetime) >= date($date1[$i]) && date($datetime) <= date($date2[$i])){
                    $reservation[$i] = $reservation[$i] + 1;
                    if ($data->getConfirmer_user() !== null){
                        $confirmationR[$i] = $confirmationR[$i] + 1;
                    }
                    if ($data->getAvis() === '1'){
                        $avisR[$i] = $avisR[$i] + 1;
                        $receteR[$i] = $receteR[$i] + $data->getNombre() * $data->getSortie()->getTarif();
                    }elseif ($data->getAvis() === '2'){
                        $receteR[$i] = $receteR[$i] + $data->getNombre() * $data->getSortie()->getTarif();
                    }
                    if ($data->getAnnuler() === '1'){
                        $annulationR[$i] = $annulationR[$i] + 1;
                    }
                }
            }
            // Les commandes
            
            foreach($commandes as $data){
                $datetime = $data->getDateTime()->format('Y-m-d');
                if (date($datetime) >= date($date1[$i]) && date($datetime) <= date($date2[$i])){
                    $commande[$i] = $commande[$i] + 1;
                    if ($data->getConfirmer() === '1'){
                        $confirmationC[$i] = $confirmationC[$i] + 1;
                    }
                    if ($data->getFacture() === '1'){
                        $facture[$i] = $facture[$i] + 1;
                        $receteC[$i] = $receteC[$i] + $data->getNombre() * $data->getCategorieTicket()->getTarif();
                    }
                    if ($data->getAnnuler() === '1'){
                        $annulationC[$i] = $annulationC[$i] + 1;
                    }
                }
            }
            // Les operateurs
            foreach($operateurs as $data){
                $datetime = $data->getDateTime()->format('Y-m-d');
                //$note[$i] = $confirmer[$i] = $acompte[$i] = $facture[$i] = $avis[$i] = array();
                if (date($datetime) >= date($date1[$i]) && date($datetime) <= date($date2[$i])){
                    for($j=1; $j<=$nm; $j++){
                        switch($data->getAction()){
                            case 1: $note[$i][$j]      = $note[$i][$j] + 1;      default;
                            case 2: $confirmer[$i][$j] = $confirmer[$i][$j] + 1; default;
                            case 3: $acompte[$i][$j]   = $acompte[$i][$j] + 1;   default;
                            case 4: @$factureO[$i][$j] = @$factureO[$i][$j] + 1;  default;
                            case 5: @$avisO[$i][$j]    = @$avisO[$i][$j] + 1;     default;
                        }
                    }
                }
            }
        }
        for($i=1; $i<=$month; $i++){
            $dataR[]      = $reservation[$i];
            $confirmerR[] = $confirmationR[$i];
            $avisRR[]     = $avisR[$i];
            $annulerR[]   = $annulationR[$i];
            
            $dataC[]      = $commande[$i];
            $confirmerC[] = $confirmationC[$i];
            $factureC[]   = $facture[$i];
            $annulerC[]   = $annulationC[$i];
            
            $recetesR[]   = $receteR[$i];
            $recetesC[]   = $receteC[$i];
            
            for($j=1; $j<=$nm; $j++){
                $noteO[$j][]      = $note[$i][$j];
                $confirmerO[$j][] = $confirmer[$i][$j];
                $acompteO[$j][]   = $acompte[$i][$j];
                //$factureOO[$j][]  = $factureO[$i][$j];
                //$avisOO[$j][]     = $avisO[$i][$j];
            }
            
            switch ($i){
                case  1: $dates[] = 'Janvier';   break;
                case  2: $dates[] = 'Février';   break;
                case  3: $dates[] = 'Mars';      break;
                case  4: $dates[] = 'Avril';     break;
                case  5: $dates[] = 'Maï';       break;
                case  6: $dates[] = 'Juin';      break;
                case  7: $dates[] = 'Juillet';   break;
                case  8: $dates[] = 'Août';      break;
                case  9: $dates[] = 'Septembre'; break;
                case 10: $dates[] = 'Octobre';   break;
                case 11: $dates[] = 'Novembre';  break;
                case 12: $dates[] = 'Décembre';  break;
            }
        }
        $sellsHistory1 = array(
            array(
                "name" => "Réservations", 
                "data" => $dataR,
            ),
            array(
                "name" => "Confirmations", 
                "data" => $confirmerR,
            ),
            array(
                "name" => "Avis", 
                "data" => $avisRR,
            ),
            array(
                "name" => "Annulations", 
                "data" => $annulerR,
            ),
        );
        $sellsHistory2 = array(
            array(
                "name" => "Commandes", 
                "data" => $dataC,
            ),
            array(
                "name" => "Confirmations", 
                "data" => $confirmerC,
            ),
            array(
                "name" => "Factures", 
                "data" => $factureC,
            ),
            array(
                "name" => "Annulations", 
                "data" => $annulerC,
            ),
        );
        /*
        $sellsHistory3 = array(
            array(
                "name" => "Réservations", 
                "data" => $recetesR,
            ),
            array(
                "name" => "Tickets", 
                "data" => $recetesC,
            ),
        );
        */
        for($j=1; $j<=$nm; $j++){
            
            $sellsHistory4[$j] = array(
                
                array(
                    "name" => "Notes", 
                    "data" => $noteO[$j],
                ),
                array(
                    "name" => "Confirmers", 
                    "data" => $confirmerO[$j],
                ),
                array(
                    "name" => "Acomptes", 
                    "data" => $acompteO[$j],
                ),
                
                array(
                    "name" => "Factures", 
                    "data" => $factureOO[$j],
                ),
                array(
                    "name" => "Avis", 
                    "data" => $avisOO[$j],
                ),
            );
        }
        
        
        //$dates  = array($date1, $date2, '$date3', '$date4', '$date5', '$date6', '$date7');
        $ob1 = new Highchart();
        $ob1->chart->renderTo('linechart1'); // ID de l'élement de DOM que vous utilisez comme conteneur
        //$ob->title->text('Du '.date('d/m/Y', strtotime(date('Y-m-d').' - 6 DAY')).' au '.date('d/m/Y'));
        $ob1->title->text('Les réservations');
        $ob1->chart->type('column');
        $ob1->yAxis->title(array('text' => "La quantité"));
        $ob1->xAxis->title(array('text' => "La date"));
        $ob1->xAxis->categories($dates);
        $ob1->series($sellsHistory1);
        
        $ob2 = new Highchart();
        $ob2->chart->renderTo('linechart2'); // ID de l'élement de DOM que vous utilisez comme conteneur
        //$ob->title->text('Du '.date('d/m/Y', strtotime(date('Y-m-d').' - 6 DAY')).' au '.date('d/m/Y'));
        $ob2->title->text('Les commandes');
        $ob2->chart->type('column');
        $ob2->yAxis->title(array('text' => "La quantité"));
        $ob2->xAxis->title(array('text' => "La date"));
        $ob2->xAxis->categories($dates);
        $ob2->series($sellsHistory2);
        
        /*
        $ob3 = new Highchart();
        $ob3->chart->renderTo('linechart3'); // ID de l'élement de DOM que vous utilisez comme conteneur
        //$ob->title->text('Du '.date('d/m/Y', strtotime(date('Y-m-d').' - 6 DAY')).' au '.date('d/m/Y'));
        $ob3->title->text('La recette');
        $ob3->chart->type('column');
        $ob3->yAxis->title(array('text' => "La recette (dinars)"));
        $ob3->xAxis->title(array('text' => "La date"));
        $ob3->xAxis->categories($dates);
        $ob3->series($sellsHistory3);
        */
        
        for($j=1; $j<=$nm; $j++){
            
            $linechart = 'linechart4'.$j;
            $ob4[$j] = new Highchart();
            $ob4[$j]->chart->renderTo($linechart); // ID de l'élement de DOM que vous utilisez comme conteneur
            //$ob->title->text('Du '.date('d/m/Y', strtotime(date('Y-m-d').' - 6 DAY')).' au '.date('d/m/Y'));
            $ob4[$j]->title->text($m[$j-1]);
            $ob4[$j]->chart->type('column');
            $ob4[$j]->yAxis->title(array('text' => "Requêtes effectuées"));
            $ob4[$j]->xAxis->title(array('text' => "La date"));
            $ob4[$j]->xAxis->categories($dates);
            $ob4[$j]->series($sellsHistory4[$j]);
        }
        
        $charts = array();
        for($j=1; $j<=$nm; $j++){
            $charts[] = $ob4[$j];
        }
        
        $azerty = array();
        $azertyy['chart1'] = $ob1;
        $azertyy['chart2'] = $ob2;
        for($j=1; $j<=$nm; $j++){
            $azerty[] = $ob4[$j];
        }
        foreach ($azerty as $key => $value) {
            for($j=0; $j<$nm; $j++){
                if($key == $j){
                    $g = $j+1;
                    $k = 'chart4'.$g;
                    $azertyy[$k] = $value;
                }
            }
        }
        $azertyy['m'] = $nm;
        
        return $this->render('BaseBledvoyageBundle:Admin:statistic.html.twig', $azertyy); 
    }
    
    public function statisticsAction()
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
    
    public function invitationAction(Request $request)
    {
        $locale     = $this->get('request')->getLocale();
        $qb = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Sortie')
            ->createQueryBuilder('a')
            ->where('a.valider = :valider')
            ->setParameter('valider', '1')
            ->orderBy('a.id','ASC');
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $sortie = $query->getResult();
        
        $qb = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Invitation')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.sortie', 'b')
            ->orderBy('a.id','DESC');
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $invitations = $query->getResult();
        
        if ($request->getMethod() == 'POST') {
            $em           = $this->getDoctrine()->getManager();
            $frToDatetime = $this->container->get('FrToDatetime');
            $sortie = $em->getRepository('BaseBledvoyageBundle:Sortie')->find($request->get('sortie'));
            $invitation   = new Invitation();
            $invitation->setNom($request->get('nom'))
                ->setUser($this->get('security.context')->getToken()->getUser())
                ->setSortie($sortie)
                ->setPrenom($request->get('prenom'))
                ->setMail($request->get('mail'))
                ->setEntreprise($request->get('entreprise'))
                ->setTelephone($request->get('tel'))
                ->setNombre($request->get('nombre'))
                ->setPourcentage($request->get('pourcentage'))
                ->setTextPerso($request->get('textPerso'))
                ->setIp($request->getClientIp());
            if (null !== $request->get('dateSortie')){
                $invitation->setDateSortie(new \DateTime($frToDatetime->toDatetime($request->get('dateSortie'))));
            }
            /*
            else{
                $invitation->setDateSortie(new \DateTime('0000-00-00'));
                $dateFin  = "Valable jusqu'au ".date("d/m/Y", strtotime("+ 2 month"));
                $dateMail = date("d/m/Y", strtotime("+ 2 month"));
            }
            */
            $em->persist($invitation);
            $em->flush();
            
            if ($invitation->getDateSortie() == "0000-00-00"){
                $dateFin  = "Valable jusqu'au ".date("d/m/Y", strtotime("+ 2 month"));
                $dateMail = date("d/m/Y", strtotime("+ 2 month"));
            }else{
                $dateFin  = "Valable pour le ".$request->get('dateSortie');
                $dateMail = "Valable pour le ".$request->get('dateSortie');
            }
            
            $ticketPdf = $this->renderView('BaseBledvoyageBundle:Mail:admin_invitation_vip.pdf.twig', array(
                'product' => array(
                    'image'         => $invitation->getImage(),
                    'textPerso'     => $request->get('textPerso'),
                    'sortie'        => $invitation->getSortie()->getTitre(),
                    'code'          => $invitation->getCode(),
                    'dateFin'       => $dateFin,
                )
            ));
            $pdf_1 = new \HTML2PDF('P','A4','fr');
            $pdf_1->pdf->SetDisplayMode('real');
            $pdf_1->writeHTML($ticketPdf);
            $content_1 = $pdf_1->Output('Ticket.pdf', true);
            $message = \Swift_Message::newInstance()
                ->setSubject('test Votre ticket cadeau, bledvoyage.com, invitation')
                ->setFrom('contact@bledvoyage.com')
                ->setTo(array('nadir.allam@bledvoyage.com','karim.man@live.fr'))
                ->setBody($this->renderView('BaseBledvoyageBundle:Mail:admin_invitation_vip.html.twig', array(
                    'product' => array(
                        'sortie'        => $sortie->getTitre(),
                        'prenom'        => $invitation->getPrenom(),
                        'nom'           => $invitation->getNom(),
                        'tel'           => $invitation->getTelephone(),
                        'email'         => $invitation->getMail(),
                        'nombre'        => $invitation->getNombre(),
                        'dateSortie'    => $dateMail,
                    )
                )))
                ->attach(Swift_Attachment::newInstance($content_1, 'Ticket.pdf', 'application/pdf'))
            ;
            $this->get('mailer')->send($message);
        }
        
        return $this->render('BaseBledvoyageBundle:Admin:invitation.html.twig', array(
            'sortie'     => $sortie,
            'invitation' => $invitations,
        ));
    }
    
    public function devisEntrepriseAction(Request $request)
    {
        $locale     = $this->get('request')->getLocale();
        $qb = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Sortie')
            ->createQueryBuilder('a')
            ->where('a.valider = :valider')
            ->setParameter('valider', '1')
            ->orderBy('a.id','ASC');
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $sorties = $query->getResult();
        
        $total = 0;
        if ($request->getMethod() == 'POST') {
            foreach ($sorties as $data) {
                if($request->get('sortie'.$data->getId()) == "1"){
                    $total = $total + ( $request->get('nombre') * $request->get('tarif'.$data->getId()) );
                    $sortie[] = array(
                        'titre' => $data->getTitre(),
                        'tarif' => ( $request->get('nombre') * $request->get('tarif'.$data->getId()) ),
                    );
                }
            }
            $devisPdf = $this->render('BaseBledvoyageBundle:Mail:devis_entreprise.pdf.twig', array(
                'sorties'   => $sortie,
                'total'     => $total,
            ));
            $pdf_1 = new \HTML2PDF('P','A4','fr');
            $pdf_1->pdf->SetDisplayMode('real');
            $pdf_1->writeHTML($devisPdf);
            $content_1 = $pdf_1->Output('Ticket.pdf');
            $message = \Swift_Message::newInstance()
                ->setSubject('test Votre ticket cadeau, bledvoyage.com, devis')
                ->setFrom('contact@bledvoyage.com')
                ->setTo(array('nadir.allam@bledvoyage.com', 'validation@nroho.com'))
                ->setBody('Bonjour le devis')
                ->attach(Swift_Attachment::newInstance($content_1, 'devis_bledvoyage.pdf', 'application/pdf'))
            ;
            $this->get('mailer')->send($message);
            //return $devisPdf;
        }
        
        return $this->render('BaseBledvoyageBundle:Admin:devis_entreprise.html.twig', array(
            'sorties'   => $sorties,
            'total'     => $total,
        ));
    }
    
    public function validationSortieAction()
    {
        $s = 0;
        $locale = $this->get('request')->getLocale();
        
        $qb = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Sortie')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.categorieSortie', 'b')
            ->addSelect('c')
            ->leftJoin('a.picture1', 'c')
            ->AddSelect('d')
            ->leftJoin('a.user', 'd')
            ->where('a.valider = 2')
            ->orderBy('a.id','ASC');
        // Use Translation Walker
        $query = $qb->getQuery();
        $query->setHint(
            \Doctrine\ORM\Query::HINT_CUSTOM_OUTPUT_WALKER,
            'Gedmo\\Translatable\\Query\\TreeWalker\\TranslationWalker'
        );
        // Force the locale
        $query->setHint(
            \Gedmo\Translatable\TranslatableListener::HINT_TRANSLATABLE_LOCALE,
            $locale
        );
        $sorties = $query->getResult();
        foreach($sorties as $data){
            $s++;
        }
        return $this->render('BaseBledvoyageBundle:Admin:nouvelle_sortie.html.twig', array(
            'sorties'   => $sorties,
            'nbrS'      => $s,
        ));
    }
    
    public function validerSortieAction($id)
    {
        $em      = $this->getDoctrine()->getManager();
        $sortie  = $em->getRepository('BaseBledvoyageBundle:Sortie')->find($id);
        $sortie->setValider("1");
        $em->persist($sortie);
        $em->flush(); 
        
        return $this->forward('BaseBledvoyageBundle:Admin:validationSortie');
    }
    
    public function refuserSortieAction($id)
    {
        $em      = $this->getDoctrine()->getManager();
        $sortie  = $em->getRepository('BaseBledvoyageBundle:Sortie')->find($id);
        $sortie->setValider("0");
        $em->persist($sortie);
        $em->flush(); 
        
        return $this->forward('BaseBledvoyageBundle:Admin:validationSortie');
    }
    
    public function ticketAction(Request $request)
    {
        $em         = $this->getDoctrine();
        $emm        = $em->getManager();
        $locale     = $this->get('request')->getLocale();
        $id         = $request->request->get('commande');
        $remarque   = $request->request->get('remarque');
        $nbrTicket  = 0;
        if ($request->getMethod() == 'POST' && null === $remarque) {
            $commande = new Commande();
            $product = $commande->getCommande($em, $id, $locale);
            
            $tickets = new Ticket();
            $ticket  = $tickets->getTicket($em, $id, $locale);
            foreach($ticket as $d) {
                $nbrTicket++;
            }
        }elseif ($request->getMethod() == 'POST' && $remarque === '1') {
            $commande = new Commande();
            $product = $commande->getCommande($em, $id, $locale);
            foreach($product as $data) {
                $oldRemarque = $data->getRemarque();
            }
            
            $update = $emm->createQueryBuilder()
                ->update('BaseBledvoyageBundle:Commande', 'a')
                ->set('a.remarque', "'".$oldRemarque.date('d/m/Y').": ".$request->request->get('remarques')."\n'")
                ->where('a.id = '.$id);
            $update->getQuery()->execute();
            
            $tickets = new Ticket();
            $ticket  = $tickets->getTicket($em, $id, $locale);
            foreach($ticket as $d) {
                $nbrTicket++;
            }
        }else{
            $product    = $ticket = '';
        }
        return $this->render('BaseBledvoyageBundle:Admin:ticket.html.twig', array(
            'product'   => $product,
            'ticket'    => $ticket,
            'nbrTicket' => $nbrTicket,
        ));
    }
}
