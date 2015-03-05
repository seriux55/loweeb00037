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
        $commande = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Commande')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.user', 'b')
                   ->addSelect('c')
                   ->leftJoin('a.categorieTicket', 'c')
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        
        $d = array();
        foreach ($commande as $data)
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
                'ticket'        => $data->getCategorieTicket()->getNom(),
                'nom'           => $data->getUser()->getFirstname(),
                'prenom'        => $data->getUser()->getSecondename(),
                'tel'           => $data->getUser()->getPhone(),
                'dateTime'      => $data->getDateTime(),
                'place'         => $data->getNombre(),
                'dateAchat'     => $data->getDateAchat(),
                'entreprise'    => $data->getEntreprise(),
                'adresse'       => $data->getAdresse(),
                'modePaiement'  => $data->getModePaiement(),
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
}
