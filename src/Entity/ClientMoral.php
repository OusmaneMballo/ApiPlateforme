<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * ClientMoral
 * @ApiResource(
 *     normalizationContext = {"groups" = {"read: clientM"}}
 * )
 * @ORM\Table(name="client_moral")
 * @ORM\Entity
 */
class ClientMoral
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups ({"read: comptes"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Groups ({"read: clientM"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="raisonsocial", type="string", length=255, nullable=false)
     * @Groups ({"read: clientM"})
     */
    private $raisonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     * @Groups ({"read: clientM"})
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="numIdentifiant", type="string", length=255, nullable=false)
     */
    private $numidentifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     * @Groups ({"read: clientM"})
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Groups ({"read: clientM"})
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=false)
     * @Groups ({"read: clientM"})
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=false)
     * @Groups ({"read: clientM"})
     */
    private $passwd;

    /**
     * ClientMoral constructor.
     */
    public function __construct()
    {
        $this->client_physique=new ArrayCollection();
        $this->compte=new ArrayCollection();
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
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getRaisonsocial(): string
    {
        return $this->raisonsocial;
    }

    /**
     * @param string $raisonsocial
     */
    public function setRaisonsocial(string $raisonsocial): void
    {
        $this->raisonsocial = $raisonsocial;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getNumidentifiant(): string
    {
        return $this->numidentifiant;
    }

    /**
     * @param string $numidentifiant
     */
    public function setNumidentifiant(string $numidentifiant): void
    {
        $this->numidentifiant = $numidentifiant;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPasswd(): string
    {
        return $this->passwd;
    }

    /**
     * @param string $passwd
     */
    public function setPasswd(string $passwd): void
    {
        $this->passwd = $passwd;
    }

}
