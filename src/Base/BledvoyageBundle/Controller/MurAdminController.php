<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Base\BledvoyageBundle\Entity\AdminComment;
use Base\BledvoyageBundle\Entity\AdminStatut;

class MurAdminController extends Controller
{
    public function indexAction(Request $request)
    {
        $comments   = $request->request->get('comment');
        $etat       = $request->request->get('etat');
        $stat       = $request->request->get('statut');
        if($request->getMethod() == 'POST' && !empty($etat)){
            $statutId = $request->request->get('statutId');
            $statut   = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:AdminStatut')->find($statutId);
            switch($etat){
                case 'Fait'         : $d = '1'; break;
                case 'En attente'   : $d = '2'; break;
                case 'En cours'     : $d = '3'; break;
                case 'Annuler'      : $d = '0'; break;
            }
            $statut->setEtat($d);
            $em = $this->getDoctrine()->getManager();
            $em->persist($statut);
            $em->flush();
        }elseif($request->getMethod() == 'POST' && !empty($comments)){
            $statutId   = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:AdminStatut')->find($request->request->get('statutId'));
            $newcomment = new AdminComment;
            $newcomment->setComment($request->request->get('commentaire'))
                ->setAdminStatut($statutId)
                ->setUser($this->get('security.context')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($newcomment);
            $em->flush();
        }elseif($request->getMethod() == 'POST' && !empty($stat)){
            $newstatut = new AdminStatut;
            $newstatut->setStatut($request->request->get('statut'))
                ->setUser($this->get('security.context')->getToken()->getUser());
            foreach($request->request->get('destinataire') as $data){
                $newstatut->addUser($this->getDoctrine()->getRepository('BaseUserBundle:User')->find($data));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($newstatut);
            $em->flush();
        }
        $shifts = $this->getDoctrine()->getRepository('BaseUserBundle:User')
            ->createQueryBuilder('a')
            ->where("a.roles LIKE '%ROLE_ADMIN%' OR a.roles LIKE '%ROLE_MODERATEUR%' OR a.roles LIKE '%ROLE_MONITEUR%'")
            ->getQuery()
            ->getResult();
        $statuts = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:AdminStatut')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.users', 'b')
            ->addSelect('c')
            ->leftJoin('a.user', 'c')
            ->where('a.enable = 1')
            ->orderBy('a.id', 'DESC')
            ->orderBy('a.etat', 'DESC')
            ->getQuery()
            ->getResult();
        $comment = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:AdminComment')
            ->createQueryBuilder('a')
            ->addSelect('b')
            ->leftJoin('a.user', 'b')
            ->addSelect('c')
            ->leftJoin('a.adminStatut', 'c')
            ->getQuery()
            ->getResult();
        foreach($shifts as $data){
            $shift[] = array(
                'id'    => $data->getId(),
                'name'  => $data->getSecondename(),
            );
        }
        return $this->render('BaseBledvoyageBundle:MurAdmin:index.html.twig', array(
            'statut'  => $statuts,
            'comment' => $comment,
            'shift'   => $shift,
        ));
    }
    
    public function delStatutAction($id)
    {
        $statut = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:AdminStatut')->find($id);
        $statut->setEnable('0');
        $em = $this->getDoctrine()->getManager();
        $em->persist($statut);
        $em->flush();
        return $this->forward('BaseBledvoyageBundle:MurAdmin:index');
    }
}
