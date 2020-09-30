<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * TypeFrais
 * @ApiResource()
 * @ORM\Table(name="type_frais")
 * @ORM\Entity
 */
class TypeFrais
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
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="frai", type="integer", nullable=false)
     */
    private $frai;

    /**
     * TypeFrais constructor.
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
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
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


}
