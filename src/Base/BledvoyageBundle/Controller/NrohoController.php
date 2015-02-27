<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NrohoController extends Controller
{
    public function getSortieAction()
    {
        $product = $this->getDoctrine()->getRepository('BaseBledvoyageBundle:Sortie')
                   ->createQueryBuilder('a')
                   ->where('a.valider = :valider')
                   ->setParameter('valider', '1')
                   ->orderBy('a.id','DESC')
                   ->getQuery()
                   ->getResult();
        
        return $product;
    }
    
    /**
     * Collection post action
     * @var Request $request
     * @return View|array
     */
    public function cpostSortieAction(Request $request)
    {
        $entity = new Organisation();
        $form = $this->createForm(new OrganisationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectView(
                $this->generateUrl(
                'get_organisation',
                array('id' => $entity->getId())
                ),
                Codes::HTTP_CREATED
            );
        }

        return array(
            'form' => $form,
        );
    }
    
    /**
     * Put action
     * @var Request $request
     * @var integer $id Id of the entity
     * @return View|array
     */
    public function putSortieAction(Request $request, $id)
    {
        $entity = $this->getEntity($id);
        $form = $this->createForm(new OrganisationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->view(null, Codes::HTTP_NO_CONTENT);
        }

        return array(
            'form' => $form,
        );
    }
    
    /**
     * Delete action
     * @var integer $id Id of the entity
     * @return View
     */
    public function deleteSortieAction($id)
    {
        $entity = $this->getEntity($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($entity);
        $em->flush();

        return $this->view(null, Codes::HTTP_NO_CONTENT);
    }
}
