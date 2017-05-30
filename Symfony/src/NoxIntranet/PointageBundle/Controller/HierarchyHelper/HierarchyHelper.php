<?php

namespace NoxIntranet\PointageBundle\Controller\HierarchyHelper;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;

class HierarchyHelper {

    public function __construct(ContainerInterface $container, EntityManager $em) {
        $this->container = $container;
        $this->em = $em;
    }

    /**
     * 
     * Retourne l'entitée correspondant au collaborateur dont on passe le nom canonique en paramêtre ou null si aucune correspondance n'est trouvée.
     * 
     * @param String $canonical_name Le nom canonique du collaborateur dont on veut récupérer l'entitée.
     * @return User Entitée du collaborateur.
     */
    public function getUserEntityFromCanonicalName($canonical_name) {
        // On récupère l'ensemble des entitées des collaborateurs.
        $em = $this->em;
        $collaborateurs = $em->getRepository('NoxIntranetUserBundle:User')->findAll();

        // On extrait le nom canonique de chaques collaborateurs.
        $collaborateursCanonicalName = array();
        foreach ($collaborateurs as $collaborateur) {
            $clean_name = strtoupper($this->wd_remove_accents(str_replace("-", " ", $collaborateur->getFirstname() . " " . $collaborateur->getLastname())));
            $collaborateursCanonicalName[$clean_name] = $collaborateur;
        }

        // Si le nom passé en paramêtre correspond à un des collaborateurs...
        if (array_key_exists(strtoupper($this->wd_remove_accents(str_replace("-", " ", $canonical_name))), $collaborateursCanonicalName)) {
            // On retourne l'entité du collaborateur.
            return $collaborateursCanonicalName[strtoupper($this->wd_remove_accents(str_replace("-", " ", $canonical_name)))];
        }
        // Sinon...
        else {
            // On retourne null;
            return null;
        }
    }

    /**
     * 
     * Remplace les caractères accentué par leur équivalent non accentué dans une chaine de charatère.
     * 
     * @param String $str La chaîne dont ont veux supprimer les accents.
     * @param String $charset L'encodage de la chaîne (utf-8 par défaut).
     * @return String La chaîne sans accents.
     */
    private function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

}
