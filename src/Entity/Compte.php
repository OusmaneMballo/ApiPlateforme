<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Compte
 * @ApiResource()
 * @ORM\Table(name="compte", indexes={@ORM\Index(name="IDX_CFF65260E91486CD", columns={"clttMoral_id"}), @ORM\Index(name="IDX_CFF65260C54C8C93", columns={"type_id"}), @ORM\Index(name="IDX_CFF652602CC9D3B8", columns={"cltPhysique_id"})})
 * @ORM\Entity
 */
class Compte
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255, nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="cleRip", type="string", length=255, nullable=false)
     */
    private $clerip;

    /**
     * @var int
     *
     * @ORM\Column(name="solde", type="integer", nullable=false)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="dateCreation", type="string", length=255, nullable=false)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFermeture", type="string", length=255, nullable=false)
     */
    private $datefermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFerTempo", type="string", length=255, nullable=false)
     */
    private $datefertempo;

    /**
     * @var string
     *
     * @ORM\Column(name="dateReouverture", type="string", length=255, nullable=false)
     */
    private $datereouverture;

    /**
     * @var \ClientPhysique
     *
     * @ORM\ManyToOne(targetEntity="ClientPhysique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cltPhysique_id", referencedColumnName="id")
     * })
     */
    private $cltphysique;

    /**
     * @var \TypeCompte
     *
     * @ORM\ManyToOne(targetEntity="TypeCompte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \ClientMoral
     *
     * @ORM\ManyToOne(targetEntity="ClientMoral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clttMoral_id", referencedColumnName="id")
     * })
     */
    private $clttmoral;
    /**
     * Compte constructor.
     */
    public function __construct()
    {
        $this->frai_bancaire=new ArrayCollection();
        $this->transaction=new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getClerip(): string
    {
        return $this->clerip;
    }

    /**
     * @param string $clerip
     */
    public function setClerip(string $clerip): void
    {
        $this->clerip = $clerip;
    }

    /**
     * @return int
     */
    public function getSolde(): int
    {
        return $this->solde;
    }

    /**
     * @param int $solde
     */
    public function setSolde(int $solde): void
    {
        $this->solde = $solde;
    }

    /**
     * @return string
     */
    public function getEtat(): string
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return string
     */
    public function getDatecreation(): string
    {
        return $this->datecreation;
    }

    /**
     * @param string $datecreation
     */
    public function setDatecreation(string $datecreation): void
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @return string
     */
    public function getDatefermeture(): string
    {
        return $this->datefermeture;
    }

    /**
     * @param string $datefermeture
     */
    public function setDatefermeture(string $datefermeture): void
    {
        $this->datefermeture = $datefermeture;
    }

    /**
     * @return string
     */
    public function getDatefertempo(): string
    {
        return $this->datefertempo;
    }

    /**
     * @param string $datefertempo
     */
    public function setDatefertempo(string $datefertempo): void
    {
        $this->datefertempo = $datefertempo;
    }

    /**
     * @return string
     */
    public function getDatereouverture(): string
    {
        return $this->datereouverture;
    }

    /**
     * @param string $datereouverture
     */
    public function setDatereouverture(string $datereouverture): void
    {
        $this->datereouverture = $datereouverture;
    }

    /**
     * @return \ClientPhysique
     */
    public function getCltphysique()
    {
        return $this->cltphysique;
    }

    /**
     * @param \ClientPhysique $cltphysique
     */
    public function setCltphysique( $cltphysique)
    {
        $this->cltphysique = $cltphysique;
    }

    /**
     * @return \TypeCompte
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \TypeCompte $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return \ClientMoral
     */
    public function getClttmoral()
    {
        return $this->clttmoral;
    }

    /**
     * @param \ClientMoral $clttmoral
     */
    public function setClttmoral($clttmoral)
    {
        $this->clttmoral = $clttmoral;
    }

    /**
     * @return ArrayCollection
     */
    public function getFraiBancaire(): ArrayCollection
    {
        return $this->frai_bancaire;
    }

    /**
     * @param ArrayCollection $frai_bancaire
     */
    public function setFraiBancaire(ArrayCollection $frai_bancaire): void
    {
        $this->frai_bancaire = $frai_bancaire;
    }

    /**
     * @return ArrayCollection
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param ArrayCollection $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

}
