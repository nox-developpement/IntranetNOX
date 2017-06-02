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
    private $questionsReponses;

    /**
     * @var string
     *
     * @ORM\Column(name="CleFicheEvaluation", type="string")
     */
    private $cleFicheEvaluation;

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
        $this->questionsReponses = $questionsReponses;

        return $this;
    }

    /**
     * Get questionsReponses
     *
     * @return array
     */
    public function getQuestionsReponses()
    {
        return $this->questionsReponses;
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
        $this->cleFicheEvaluation = $cleFicheEvaluation;

        return $this;
    }

    /**
     * Get cleFicheEvaluation
     *
     * @return string
     */
    public function getCleFicheEvaluation()
    {
        return $this->cleFicheEvaluation;
    }
}
