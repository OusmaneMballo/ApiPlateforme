<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ClientPhysique
 * @ApiResource()
 * @ORM\Table(name="client_physique", indexes={@ORM\Index(name="IDX_B11F1822FAD40BBD", columns={"typeclient_id"}), @ORM\Index(name="IDX_B11F18225D7C53EC", columns={"employeur_id"})})
 * @ORM\Entity
 */
class ClientPhysique
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;

    /**
     * @var int
     *
     * @ORM\Column(name="salaire", type="integer", nullable=false)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=false)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=false)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="nci", type="string", length=255, nullable=false)
     */
    private $nci;

    /**
     * @var \ClientMoral
     *
     * @ORM\ManyToOne(targetEntity="ClientMoral")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employeur_id", referencedColumnName="id")
     * })
     */
    private $employeur;

    /**
     * @var \TypeClient
     *
     * @ORM\ManyToOne(targetEntity="TypeClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeclient_id", referencedColumnName="id")
     * })
     */
    private $typeclient;
    /**
     * ClientPhysique constructor.
     */
    public function __construct()
    {
        $this->compte=new  ArrayCollection();
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
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
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
     * @return int
     */
    public function getSalaire(): int
    {
        return $this->salaire;
    }

    /**
     * @param int $salaire
     */
    public function setSalaire(int $salaire): void
    {
        $this->salaire = $salaire;
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

    /**
     * @return string
     */
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     */
    public function setProfession(string $profession): void
    {
        $this->profession = $profession;
    }

    /**
     * @return string
     */
    public function getNci(): string
    {
        return $this->nci;
    }

    /**
     * @param string $nci
     */
    public function setNci(string $nci): void
    {
        $this->nci = $nci;
    }

    /**
     * @return \ClientMoral
     */
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * @param \ClientMoral $employeur
     */
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;
    }

    /**
     * @return \TypeClient
     */
    public function getTypeclient()
    {
        return $this->typeclient;
    }

    /**
     * @param \TypeClient $typeclient
     */
    public function setTypeclient($typeclient)
    {
        $this->typeclient = $typeclient;
    }


}
