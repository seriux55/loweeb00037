<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
                    'id'            => $data->getCategorieTicket()->getId(),
                    'titre'         => $data->getCategorieTicket()->getNom(),
                    'tarif'         => $data->getCategorieTicket()->getTarif(),
                    'duree'         => $data->getCategorieTicket()->getDuree(),
                    'nombre'        => $data->getCategorieTicket()->getNombreActivite(),
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
            $commande->setModePaiement($request->get('paiement'));
            $commande->setNombre($request->get('nombre'));
            $commande->setLieuRdv($request->get('lieuRdv'));
            $commande->setDateRdv(new \DateTime($frToDatetime->toDatetime($request->get('dateRdv'))));
            $commande->setHeureRdv($request->get('heureRdv'));
            $commande->getUser()->setEmail($request->get('email'));
            $commande->setConfirmer('1');
            $em->persist($commande);
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
            $commande->setNote($request->get('note'));
            $em->persist($commande);
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
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        foreach ($product as $data)
        {
            $total = $data->getCategorieTicket()->getTarif() * $data->getNombre();
        }
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $commande = $em->getRepository('BaseBledvoyageBundle:Commande')->find($id);
            $commande->setPaiement($request->get('paiement'));
            $commande->setNombre($request->get('nombre'));
            $commande->setEntreprise($request->get('entreprise'));
            $commande->setAdresse($request->get('adresse'));
            $commande->setUser()->setEmail($request->get('email'));
            $commande->setTextPerso($request->get('textPerso'));
            $commande->setFacturer('1');
            $em->persist($commande);
            $em->flush();
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
            $em = $this->getDoctrine()->getManager();
            $booking = $em->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            if(empty($request->get('notearea'))){
                $booking->setNote($request->get('note'));
            }else{
                $booking->setNote($request->get('notearea'));
            }
            $em->persist($booking);
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
            if(!empty($request->get('date1')) || !empty($request->get('heure1'))){
                $booking->setdateRdv(new \DateTime($frToDatetime->toDatetime($request->get('date1'))))
                        ->setHeureRdv($request->get('heure1'))
                        ->setLieuRdv('Chenoua');
            }elseif(!empty($request->get('date2')) || !empty($request->get('heure2')) || !empty($request->get('lieu2'))){
                $booking->setDateRdv(new \DateTime($frToDatetime->toDatetime($request->get('date2'))))
                        ->setHeureRdv($request->get('heure2'))
                        ->setLieurdv($request->get('lieu2'));
            }
            $em->persist($booking);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email') //Confirmation de reservation, bledvoyage.com
                ->setFrom('contact@nroho.com')
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
            $total = $data->getCategorieTicket()->getTarif() * $data->getNombre();
        }
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $booking = $em->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            $em->persist($booking);
            $em->flush();
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
}
