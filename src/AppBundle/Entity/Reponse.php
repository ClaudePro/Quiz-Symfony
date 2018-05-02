<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_question", type="integer", nullable=true)
     */
    public $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255, nullable=true)
     */
    public $reponse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reponse_expected", type="boolean", nullable=true)
     */
    public $reponseExpected;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;


}

