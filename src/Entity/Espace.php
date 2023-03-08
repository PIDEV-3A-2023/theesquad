<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Client;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\CategorieLocation;
use App\Repository\EspaceRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;




#[ORM\Entity(repositoryClass: EspaceRepository::class)]
class Espace 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('espaces')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups('espaces')]
    #[Assert\NotBlank(message: "le champ est vide!!!")]
    #[Assert\Length(
        min: 10,
        minMessage: 'nom doit avoir au minimum 10 caracteres',
    )]
    private ?string $nom = null;

   
    #[ORM\Column(length: 255)]
    #[Groups('espaces')]
    #[Assert\NotBlank(message: "le champ est vide!!!")]
    #[Assert\Length(
        min: 7,
        max:200,
        minMessage: 'caracteristique doit etre >= 7 ',
        maxMessage: 'caracteristique doit etre <=200'
    )]
    private ?string $caracteristique = null;

    #[ORM\Column(length: 255)]
    #[Groups('espaces')]
    private ?string $image=null;

    #[ORM\Column(length: 255)]
    #[Groups('espaces')]
    #[Assert\NotBlank(message: "le champ de l'adresse est vide!!!")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9\s\-]+$/',
        message: 'L\'adresse ne doit contenir que des caractères alphanumériques, des espaces et des tirets.'
    )]
    private ?string $adresse = null;
    
    #[ORM\Column]
    #[Groups('espaces')]
    #[Assert\NotBlank(message: "le champ de disponibilité est vide!!!")]
    private ?string $dispo= null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups('espaces')]
    #[Assert\GreaterThan("today", message:"Le tarif horaire de location ne doit pas être antérieur à la date et l'heure actuelles")]
    private ?\DateTimeInterface $tarifhoraire;
    

    

    #[ORM\Column]
    #[Groups('espaces')]
    #[Assert\Positive(
        message: 'le prix de location doit etre positif',
    )]
    #[Assert\NotEqualTo(
        value: 0,
        message: 'le prix de location d\'un espace ne doit pas etre egal à 0',
    )]
    private ?float $prixlocation;
   

   
    #[ORM\ManyToOne(inversedBy: 'espaces')]
    // #[Assert\Choice(callback: [CategorieLocation::class, 'getCategorielocation'])]
    private ?CategorieLocation $categorielocation = null;
   

    public function __construct(){
        $this->clients = new ArrayCollection();
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }
    //getter pour le nom
    public function getNom(): ?string
    {
        return $this->nom;
    }
    //setter pour le nom
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
     //getter pour caracteristique
    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }
     //setter pour caracteristique
    public function setCaracteristique(string $caracteristique): self
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }
    
     //getter pour image
    public function getImage(): ?string
    {
        return $this->image;
    }
     //setter pour image 
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    //getter pour adresse
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }
    //setter pour adresse 
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
    
    public function getDispo(): ?string
    {
        return $this->dispo;
    }
    //setter pour adresse 
    public function setDispo(string $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    } 
 
    public function getTarifhoraire(): ?\DateTimeInterface
    {
        return $this->tarifhoraire;
    }

    public function setTarifhoraire(\DateTimeInterface $tarifhoraire): self
    {
        $this->tarifhoraire = $tarifhoraire;

        return $this;
    }
    
    
   

    public function getPrixlocation(): ?float
    {
        return $this->prixlocation;
    }

    public function setPrixlocation(?float $prixlocation): self
    {
        $this->prixlocation = $prixlocation;

        return $this;
    }
   
    //calcul simple pour faire une remise sur le prix de location 
    public function getPrixLocationAvecRemise(): float
{
    // Appliquer une remise de 10% si le prix est supérieur à 100
    $prix = $this->prixlocation;
    if ($prix > 100) {
        $prix = $prix * 0.9;
    }
   
    return $prix;
}

    public function getCategorielocation(): ?CategorieLocation
    {
        return $this->categorielocation;
    }

    public function setCategorielocation(?CategorieLocation $categorielocation): self
    {
        $this->categorielocation = $categorielocation;

        return $this;
    }



  
}
