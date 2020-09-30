<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * FraisBancaire
 * @ApiResource()
 * @ORM\Table(name="frais_bancaire", indexes={@ORM\Index(name="IDX_E0D9213B92787C86", columns={"typefrai_id"}), @ORM\Index(name="IDX_E0D9213BF2C56620", columns={"compte_id"})})
 * @ORM\Entity
 */
class FraisBancaire
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
     * @var int
     *
     * @ORM\Column(name="frai", type="integer", nullable=false)
     */
    private $frai;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var \TypeFrais
     *
     * @ORM\ManyToOne(targetEntity="TypeFrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typefrai_id", referencedColumnName="id")
     * })
     */
    private $typefrai;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
     * })
     */
    private $compte;


    /**
     * FraisBancaire constructor.
     */
    public function __construct()
    {
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
     * @return int
     */
    public function getFrai(): int
    {
        return $this->frai;
    }

    /**
     * @param int $frai
     */
    public function setFrai(int $frai): void
    {
        $this->frai = $frai;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return \TypeFrais
     */
    public function getTypefrai(): \TypeFrais
    {
        return $this->typefrai;
    }

    /**
     * @param \TypeFrais $typefrai
     */
    public function setTypefrai(\TypeFrais $typefrai): void
    {
        $this->typefrai = $typefrai;
    }

    /**
     * @return \Compte
     */
    public function getCompte(): \Compte
    {
        return $this->compte;
    }

    /**
     * @param \Compte $compte
     */
    public function setCompte(\Compte $compte): void
    {
        $this->compte = $compte;
    }

}
