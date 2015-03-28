<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Base\BledvoyageBundle\Entity\Booking;
use Base\BledvoyageBundle\Entity\Commande;
use Base\BledvoyageBundle\Entity\AvisSortie;
use Base\BledvoyageBundle\Entity\Sortie;
use Base\BledvoyageBundle\Entity\CategorieSortie;
use Base\BledvoyageBundle\Form\Type\CategorieSortieType;
use Base\BledvoyageBundle\Entity\Picture;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:CategorieSortie')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->addSelect('c')
                   ->leftJoin('b.picture1', 'c')
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
                   ->addSelect('c')
                   ->leftJoin('b.picture1', 'c')
                   ->addSelect('d')
                   ->leftJoin('b.picture2', 'd')
                   ->addSelect('e')
                   ->leftJoin('b.picture3', 'e')
                   ->addSelect('f')
                   ->leftJoin('b.picture4', 'f')
                   ->where('b.valider = :valider AND b.id = :id')
                   ->setParameters(
                        array(
                            'valider'    => '1',
                            'id'         => $id,
                        ))
                   ->orderBy('a.id','DESC')
                   ->getQuery()
                   ->getResult();
        foreach ($product as $data) {
            $titre = $data->getSortie()->getTitre();
        }
        $response = $this->render('BaseBledvoyageBundle:Default:product.html.twig', array(
            'product'   => $product,
            'titre'     => $titre,
        ));
        return $response;
    }
    
    public function bookingAction(Request $request, $id)
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
        if ($request->getMethod() == 'POST') {
            $frToDatetime = $this->container->get('FrToDatetime');
            $post = $request->request->all();
            foreach ( $post as $key => $val )
            {
                if(substr($key, 0, 5) == "promo"){
                    $a[] = substr($key, 5);
                }
            }
            $invalide = $nbr_promo = max($a);
            $where = $code = $text = '';
            $nombre = $request->get('nombre');
            for($i=0;$i<=$nbr_promo;$i++){
                if($i == 0){ 
                    $where .= "a.code = '".addslashes($request->get('promo'.$i))."'";
                    $code  .= $request->get('promo'.$i);
                }else{
                    $where .= " OR a.code = '".addslashes($request->get('promo'.$i))."'";
                    $code  .= ', '.$request->get('promo'.$i);
                }
            }
            $promo = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Ticket')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.commande', 'b')
                   ->addSelect('c')
                   ->leftJoin('b.categorieTicket', 'c')
                   ->where($where)
                   ->getQuery()
                   ->getResult();
            foreach($promo as $value){
                $reste = $value->getCommande()->getCategorieTicket()->getNombreActivite() - $value->getUsed();
                if($value->getClose() == '1'){
                    $text .= ', utilisé';
                }else if($value->getDateFin()->format('Y-m-d') < \date('Y-m-d')){
                    $text .= ', expiré';
                }else if($nombre != 0 && $reste > 0 && $reste >  $nombre){
                    // li bqa kter men wech rahi tdemandi
                    // il paye rien
                    $used = $value->getUsed() + $nombre;
                    // update
                    $nombre = 0;
                }else if($nombre != 0 && $reste > 0 && $reste == $nombre){
                    // li bqa kima wech rahi tdemandi
                    // il paye rien
                    $used = $value->getUsed() + $nombre;
                    // update
                    $nombre = 0;
                }else if($nombre != 0 && $reste > 0 && $reste <  $nombre){
                    // li bqa qel men wach rahi tdemandi
                    // il paye la difference
                    $used = $value->getUsed() + $reste;
                    $nombre = $nombre - $reste;
                }else if($nombre != 0 && $reste <= 0){
                    // il ne lui reste plus de place
                    $text .= ', utilisé';
                }
                $invalide--;
            }
            $booking = new Booking();
            $booking->setUser($this->get('security.context')->getToken()->getUser())
                    ->setSortie($this->getDoctrine()->getManager()->getRepository('BaseBledvoyageBundle:Sortie')->find($id))
                    ->setDateReserver(new \DateTime($frToDatetime->toDatetime($request->get('dateReserver'))))
                    ->setNombre($request->get('nombre'))
                    ->setPromo($code)
                    ->setIp($this->getRequest()->getClientIp());
            $em = $this->getDoctrine()->getManager();
            $em->persist($booking);
            $em->flush();
            return $this->render('BaseBledvoyageBundle:Confirmation:user_reservation.html.twig', array(
                'a' => $promo,
            ));
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
            'booking'   => $id,
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
                   ->addSelect('d')
                   ->leftJoin('b.picture1', 'd')
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
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:CategorieTicket')->findAll();
        $response = $this->render('BaseBledvoyageBundle:Default:promotion.html.twig', array(
            'product' => $product,
        ));
        return $response;
    }
    
    public function promotionTypeAction(Request $request, $id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:CategorieTicket')
                   ->createQueryBuilder('a')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            $commande = new Commande();
            $textPerso = $request->get('textPerso');
            if($textPerso == "Ex : Meilleurs Voeux, Bonne Fête Maman, Saint Valentin, Bon anniversaire, ..."){ $textPerso = ""; }
            $commande->setUser($this->get('security.context')->getToken()->getUser())
                     ->setCategorieTicket($em->getRepository('BaseBledvoyageBundle:CategorieTicket')->find($id))
                     ->setPaiement($em->getRepository('BaseBledvoyageBundle:Paiement')->findOneByMode('espèce'))
                     ->setNombre($request->get('nombre'))
                     ->setTextPerso($textPerso)
                     ->setIp($this->getRequest()->getClientIp());
            $em->persist($commande);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email') //Votre commande chez bledvoyage.com
                ->setFrom('contact@bledvoyage.com')
                ->setTo('nadir.allam@bledvoyage.com')
                ->setBody($this->renderView('BaseBledvoyageBundle:Mail:user_commande.txt.twig', array(
                    'product' => $commande)
                ));
            $this->get('mailer')->send($message);
            return $this->render('BaseBledvoyageBundle:Confirmation:user_commande.html.twig');
        }
        $response = $this->render('BaseBledvoyageBundle:Default:commande.html.twig', array(
            'product'   => $product,
            'booking'   => $id,
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
        $fichier  = "offre_journee_team_building.pdf";
        $chemin   = "bundles/basebledvoyage/pdf/"; // emplacement de votre fichier .pdf
        $response = new Response();
        $response->setContent(file_get_contents($chemin.$fichier))
                 //->headers->set('Content-Type', 'application/pdf') // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
                 
                 ->headers->set('Content-Type', 'application/force-download') // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
                 //->headers->set('Content-Disposition', 'attachment; filename="offre_journee_team_building.pdf"')
                 //->headers->set('Content-disposition', 'filename='. $fichier)
                ;
        return $response;
    }
    
    public function suggestAction(Request $request)
    {
        $sortie = new CategorieSortie();
        $form = $this->createForm(new CategorieSortieType(), $sortie);
        
        if ($form->handleRequest($request)->isValid()) {
            $sortie->getSortie()->setIp($this->getRequest()->getClientIp());
            $sortie->getSortie()->setUser($this->get('security.context')->getToken()->getUser());
            $sortie->setIp($this->getRequest()->getClientIp());
            $em = $this->getDoctrine()->getManager();
            $em->persist($sortie);
            $em->flush();
            $response = $this->render('BaseBledvoyageBundle:Confirmation:user_suggest.html.twig');
            return $response;
        }
        /*
        if ($request->getMethod() == 'POST') {
            $frToDatetime = $this->container->get("FrToDatetime");
            $em = $this->getDoctrine()->getManager();
            $sortie = new Sortie();
            $sortie->setUser($this->get('security.context')->getToken()->getUser())
                   ->setLocalisation($request->request->get('localisation'))
                   ->setTitre($request->request->get('titre'))
                   ->setDateDebut(new \DateTime($frToDatetime->toDatetime($request->request->get('dateDebut'))))
                   ->setHeureDebut($request->request->get('heureDebut'))
                   ->setDateFin(new \DateTime($frToDatetime->toDatetime($request->request->get('dateFin'))))
                   ->setHeureFin($request->request->get('heureFin'))
                   ->setTarif($request->request->get('tarif'))
                   ->setMaxPersonne($request->request->get('maxPersonne'))
                   ->setDescriptif($request->request->get('descriptif'))
                   ->setConditions($request->request->get('conditions'))
                   ->setIp($this->getRequest()->getClientIp());
            $picture = new Picture();
            $picture->upload();
            $em->persist($picture);
            $sortie->setPicture1($picture);
            $categorieSortie = new CategorieSortie();
            $categorieSortie->setIp($this->getRequest()->getClientIp());
            if(null != $request->request->get('velo')){ $categorieSortie->setVelo($request->request->get('velo')); }
            if(null != $request->request->get('running')){ $categorieSortie->setRunning($request->request->get('running')); }
            if(null != $request->request->get('kayak')){ $categorieSortie->setKayak($request->request->get('kayak')); }
            if(null != $request->request->get('randonee')){ $categorieSortie->setRandonee($request->request->get('randonee')); }
            if(null != $request->request->get('roller')){ $categorieSortie->setRoller($request->request->get('roller')); }
            if(null != $request->request->get('plangee')){ $categorieSortie->setPlangee($request->request->get('plangee')); }
            if(null != $request->request->get('equitation')){ $categorieSortie->setEquitation($request->request->get('equitation')); }
            if(null != $request->request->get('fitness')){ $categorieSortie->setFitness($request->request->get('fitness')); }
            if(null != $request->request->get('tennis')){ $categorieSortie->setTennis($request->request->get('tennis')); }
            if(null != $request->request->get('golf')){ $categorieSortie->setGolf($request->request->get('golf')); }
            if(null != $request->request->get('marche')){ $categorieSortie->setMarche($request->request->get('marche')); }
            if(null != $request->request->get('visites')){ $categorieSortie->setVisites($request->request->get('visites')); }
            if(null != $request->request->get('sportEau')){ $categorieSortie->setSportEau($request->request->get('sportEau')); }
            if(null != $request->request->get('arc')){ $categorieSortie->setArc($request->request->get('arc')); }
            if(null != $request->request->get('air')){ $categorieSortie->setAir($request->request->get('air')); }
            if(null != $request->request->get('sable')){ $categorieSortie->setSable($request->request->get('sable')); }
            if(null != $request->request->get('quad')){ $categorieSortie->setQuad($request->request->get('quad')); }
            
            
            $em->persist($sortie);
            $categorieSortie->setSortie($sortie);
            $em->persist($categorieSortie);
            $em->flush();
        }
        */
        
        $response = $this->render('BaseBledvoyageBundle:Default:suggest.html.twig', array(
            'form'   => $form->createView(),
        ));
        return $response;
    }
    
    public function avisAction(Resquest $request, $id)
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Booking')
                   ->createQueryBuilder('a')
                   ->addSelect('b')
                   ->leftJoin('a.sortie', 'b')
                   ->where('a.id = :id')
                   ->setParameter('id', $id)
                   ->getQuery()
                   ->getResult();
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
