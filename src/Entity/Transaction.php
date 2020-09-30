<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * Transaction
 * @ApiResource(
 *     normalizationContext = {"groups" = {"read: transaction"}},
 *     collectionOperations={
 *      "post"={},
 *     "get"={},
 *     },
 *     itemOperations={
 *      "get"={},
 *     "put"={},
 *     "delete"={},
 *     }
 * )
 * @ORM\Table(name="transaction", indexes={@ORM\Index(name="IDX_723705D1F2C56620", columns={"compte_id"}), @ORM\Index(name="IDX_723705D1C54C8C93", columns={"type_id"})})
 * @ORM\Entity
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups ({"read: transaction"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255, nullable=false)
     * @Groups ({"read: transaction"})
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var \TypeTransaction
     *
     * @ORM\ManyToOne(targetEntity="TypeTransaction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     * @Groups ({"read: transaction"})
     */
    private $type;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
     * })
     * @Groups ({"read: transaction"})
     */
    private $compte;

    /**
     * Transaction constructor.
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
    public function getMontant(): string
    {
        return $this->montant;
    }

    /**
     * @param string $montant
     */
    public function setMontant(string $montant): void
    {
        $this->montant = $montant;
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
     * @return \TypeTransaction
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \TypeTransaction $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
