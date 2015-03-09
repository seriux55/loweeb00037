<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Base\BledvoyageBundle\Entity\Booking;
use Base\BledvoyageBundle\Form\Type\BookingType;
use Base\BledvoyageBundle\Entity\AvisSortie;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:CategorieSortie')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->where('b.valider = :valider')
                   ->setParameter('valider', '1')
                   ->orderBy('a.id','DESC')
                   ->getQuery()
                   ->getResult();
        $categorie = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Categorie')
                   ->createQueryBuilder('a')
                   ->where('a.nom = :nom1 OR a.nom = :nom2 OR a.nom = :nom3 OR a.nom = :nom4 OR a.nom = :nom5 OR a.nom = :nom6')
                   ->setParameters(array(
                            'nom1' => 'montagne',
                            'nom2' => 'sable',
                            'nom3' => 'air',
                            'nom4' => 'terre',
                            'nom5' => 'mer',
                            'nom6' => 'formation',
                       ))
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        foreach ($categorie as $data)
        {
            if($data->getNom() == 'formation'){ $formation = $data->getId(); }
        }
        $response = $this->render('BaseBledvoyageBundle:Default:index.html.twig', array(
            'product'       => $product,
            'categorie'     => $categorie,
            'formation'     => $formation,
        ));
        return $response;
    }
    
    public function productAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:CategorieSortie')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->where('b.valider = :valider AND b.id = :id')
                   ->setParameters(
                        array(
                            'valider'    => '1',
                            'id'         => $id,
                        ))
                   ->orderBy('a.id','DESC')
                   ->getQuery()
                   ->getResult();
        
        $response = $this->render('BaseBledvoyageBundle:Default:product.html.twig', array(
            'product'   => $product,
        ));
        return $response;
    }
    
    public function bookingAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:DateSortie')
                   ->createQueryBuilder('a')
                   ->where('a.sortie = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        $dateDebut = array();
        foreach($product as $value){
            $dateDebut[] = array($value->getDateDebut()->format('Y-m-d') => $value->getDateDebut()->format('d/m/Y'));
        }
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $frToDatetime = $this->container->get('FrToDatetime');
            $booking = new Booking();
            $booking->setUser($this->get('security.context')->getToken()->getUser())
                    ->setSortie($this->getDoctrine()->getManager()->getRepository('BaseBledvoyageBundle:Sortie')->find($id))
                    ->setDateReserver(new \DateTime($frToDatetime->toDatetime($request->get('dateReserver'))))
                    ->setNombre($request->get('nombre'))
                    ->setIp($this->getRequest()->getClientIp());
            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);
            $em->flush();
            return $this->forward('BaseBledvoyageBundle:Confirmation:userBooking');
        }
        /*
        $booking = new Booking();
        $form = $this->createForm(new BookingType($id, $dateDebut), $booking);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $frToDatetime = $this->container->get('FrToDatetime');
                $booking->setSortie($this->getDoctrine()->getManager()->getRepository('BaseBledvoyageBundle:Sortie')->find($id));
                $booking->setUser($this->get('security.context')->getToken()->getUser());
                $booking->setDateReserver(new \DateTime($frToDatetime->toDatetime($request->get('dateResever'))));
                $booking->setIp($this->getRequest()->getClientIp());
                $em = $this->getDoctrine()->getManager();
                $em->persist($booking);
                $em->flush();
                return $this->redirect($this->generateUrl('base_bledvoyage_homepage'));
            }
        }
        */
        $response = $this->render('BaseBledvoyageBundle:Default:booking.html.twig', array(
            'product'   => $product,
        ));
        return $response;
    }
    
    public function typeAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:CategorieSortie')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->addSelect('c')
                   ->leftJoin('b.categorie', 'c')
                   ->where('b.valider = :valider AND b.categorie = :id')
                   ->setParameters(array(
                            'valider'   => '1',
                            'id'        => $id,
                       ))
                   ->orderBy('a.id','DESC')
                   ->getQuery()
                   ->getResult();
        $categorie = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Categorie')
                   ->createQueryBuilder('a')
                   ->where('a.nom = :nom1 OR a.nom = :nom2 OR a.nom = :nom3 OR a.nom = :nom4 OR a.nom = :nom5 OR a.nom = :nom6')
                   ->setParameters(array(
                            'nom1' => 'montagne',
                            'nom2' => 'sable',
                            'nom3' => 'air',
                            'nom4' => 'terre',
                            'nom5' => 'mer',
                            'nom6' => 'formation',
                       ))
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        foreach ($categorie as $data)
        {
            if($data->getNom() == 'formation'){ $formation = $data->getId(); }
        }
        $response = $this->render('BaseBledvoyageBundle:Default:type.html.twig', array(
            'product'       => $product,
            'categorie'     => $categorie,
            'formation'     => $formation,
        ));
        return $response;
    }
    
    public function promotionAction()
    {
        $response = $this->render('BaseBledvoyageBundle:Default:promotion.html.twig', array(
            //'form'   => $form->createView(),
        ));
        return $response;
    }
    
    public function teambuildingAction()
    {
        $response = $this->render('BaseBledvoyageBundle:Default:teambuilding.html.twig', array(
            //'form'   => $form->createView(),
        ));
        return $response;
    }
    
    public function pdfTeambuildingAction()
    {
        $fichier  = "offre_journée_team_building.pdf";
        $chemin   = "bundles/basebledvoyage/pdf/"; // emplacement de votre fichier .pdf
        $response = new Response();
        $response->setContent(file_get_contents($chemin.$fichier))
                 ->headers->set('Content-Type', 'application/force-download') // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
                 ->headers->set('Content-disposition', 'filename='. $fichier);
        return $response;
    }
    
    public function suggestAction()
    {
        $response = $this->render('BaseBledvoyageBundle:Default:suggest.html.twig', array(
            //'form'   => $form->createView(),
        ));
        return $response;
    }
    
    public function avisAction($id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $avis = new AvisSortie();
            $booking = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')->find($id);
            $avis->setBooking($booking)
                 ->setAvis($request->get('avis'))
                 ->setEmotion($request->get('emotion'))
                 ->setDateTime(new \DateTime())
                 ->setIp($this->getRequest()->getClientIp());
            $em = $this->getDoctrine()->getManager();
            $em->persist($avis);
            $booking->setAvis('1');
            $em->persist($booking);
            $em->flush();
            return $this->render('BaseBledvoyageBundle:Confirmation:user_sortie_avis.html.twig');
        }
        $response = $this->render('BaseBledvoyageBundle:Default:avis.html.twig', array(
            'product' => $product,
        ));
        return $response;
    }
}
