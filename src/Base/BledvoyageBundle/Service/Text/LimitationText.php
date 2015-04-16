<?php

namespace Base\BledvoyageBundle\Service\Text;

class LimitationText {
    
    /**
     * Limitation du nombre de mots
     *
     * @param string $chaine Le text a limité
     * @param integer $nbmots Le nombre de mots 22
     * @param string $lien Le lien pour les 3 points
     * 
     * @return string
     */
    public function textLimit($chaine, $nbmots, $lien)
    {
        $chaine = preg_replace('!<br.*>!iU', "", $chaine); // remplacement des BR par des espaces 
	$chaine = strip_tags($chaine); 
	$chaine = preg_replace('/\s\s+/', ' ', $chaine); // retrait des espaces inutiles 
	$tab = explode(" ",$chaine); 
	if (count($tab) <= $nbmots) { 
            $affiche = $chaine; 
	} else { 
            $affiche = "$tab[0]"; 
            for ($i=1; $i<$nbmots; $i++) { 
                $affiche .= " $tab[$i]"; 
            } 
	} 
	$affiche .= ' <a href="'.$lien.'">...</a>'; 
	return $affiche;
    }
}
