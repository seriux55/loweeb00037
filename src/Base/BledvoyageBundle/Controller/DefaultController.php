<?php

namespace Base\BledvoyageBundle\Controller;

use Base\BledvoyageBundle\Entity\Sortie;
use Base\BledvoyageBundle\Entity\Categorie_sortie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*
        $wilaya = array(
            "01 - Adrar", "02 - Chlef", "03 - Laghouat", "04 - Oum El Bouaghi", "05 - Batna",
            "06 - Bejaia", "07 - Biskra", "08 - Bechar", "09 - Blida", "10 - Bouira", "11 - Tamanrasset",
            "12 - Tebessa", "13 - Tlemcen", "14 - Tiaret", "15 - Tizi Ouzou", "16 - Alger",
            "17 - Djelfa", "18 - Jijel", "19 - Setif", "20 - Saida", "21 - Skikda",
            "22 - Sidi Bel Abbes", "23 - Annaba", "24 - Guelma", "25 - Constantine", "26 - Medea",
            "27 - Mostaganem", "28 - MSila", "29 - Mascara", "30 - Ouargla", "31 - Oran",
            "32 - Bayadh", "33 - Illizi", "34 - Bordj Bou Arreridj", "35 - Boumerdes",
            "36 - El Tarf", "37 - Tindouf", "38 - Tissemsilt", "39 - El Oued", "40 - Khenchela",
            "41 - Souk Ahras", "42 - Tipaza", "43 - Mila", "44 - Ain Defla", "45 - Naama",
            "46 - Ain Temouchent", "47 - Ghardaia", "48 - Relizane"
        );      
        $row = $this->get('database_connection')->prepare("SELECT depart FROM Product");
        $row->execute();
        $ville = array();
        $i = 0;
        while ($data = $row->fetch()) {
            if(!in_array($data['depart'], $ville)){
		$ville[] = $data['depart'];
            }
            $i++;
        }
        asort($ville);
        */
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
                   ->where('a.nom = :nom1 OR a.nom = :nom2 OR a.nom = :nom3 OR a.nom = :nom4 OR a.nom = :nom5')
                   ->setParameters(array(
                            'nom1' => 'montagne',
                            'nom2' => 'sable',
                            'nom3' => 'air',
                            'nom4' => 'terre',
                            'nom5' => 'mer',
                       ))
                   ->orderBy('a.id','ASC')
                   ->getQuery()
                   ->getResult();
        
        $response = $this->render('BaseBledvoyageBundle:Default:index.html.twig', array(
            'product'       => $product,
            'categorie'     => $categorie,
        ));
        return $response;
    }
}
