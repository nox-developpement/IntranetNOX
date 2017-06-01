<?php

namespace NoxIntranet\SatisfactionClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheEvaluationST
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\SatisfactionClientBundle\Entity\FicheEvaluationSTRepository")
 */
class FicheEvaluationST {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Evaluateur", type="string", length=255)
     */
    private $evaluateur;

    /**
     * @var string
     *
     * @ORM\Column(name="QuestionReponses", type="array")
     */
    private $questions_reponses;

    /**
     * @var string
     *
     * @ORM\Column(name="CleFicheEvaluation", type="string")
     */
    private $cle_fiche_evaluation;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set evaluateur
     *
     * @param string $evaluateur
     *
     * @return FicheEvaluationST
     */
    public function setEvaluateur($evaluateur)
    {
        $this->evaluateur = $evaluateur;

        return $this;
    }

    /**
     * Get evaluateur
     *
     * @return string
     */
    public function getEvaluateur()
    {
        return $this->evaluateur;
    }

    /**
     * Set questionsReponses
     *
     * @param array $questionsReponses
     *
     * @return FicheEvaluationST
     */
    public function setQuestionsReponses($questionsReponses)
    {
        $this->questions_reponses = $questionsReponses;

        return $this;
    }

    /**
     * Get questionsReponses
     *
     * @return array
     */
    public function getQuestionsReponses()
    {
        return $this->questions_reponses;
    }

    /**
     * Set cleFicheEvaluation
     *
     * @param string $cleFicheEvaluation
     *
     * @return FicheEvaluationST
     */
    public function setCleFicheEvaluation($cleFicheEvaluation)
    {
        $this->cle_fiche_evaluation = $cleFicheEvaluation;

        return $this;
    }

    /**
     * Get cleFicheEvaluation
     *
     * @return string
     */
    public function getCleFicheEvaluation()
    {
        return $this->cle_fiche_evaluation;
    }
}
