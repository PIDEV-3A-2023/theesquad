<?php

namespace App\Entity;

use App\Entity\Salle;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AcademieRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AcademieRepository::class)]
class Academie
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('academies')]
    public ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Length(
        min: 5,
        minMessage: 'nom doit avoir au minimum 5 caracteres',
    )]
    #[Assert\Regex(pattern:'/^[a-zA-Z]+$/', message:'Le champ name ne doit contenir que des lettres alphabétiques.')]
    #[Groups('academies')]

    public ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Groups('academies')]
   
    public ?string $adresse = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Regex(pattern: '/^\d{8}$/', message: 'Le numéro de téléphone doit être composé de 8 chiffres.')]
    #[Groups('academies')]
    public ?string $numtel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Regex(pattern:'/^[a-zA-Z]+$/', message:'Le champ name ne doit contenir que des lettres alphabétiques.')]
    #[Groups('academies')]
    public ?string $sportpropose = null;

    #[ORM\OneToMany(mappedBy: 'academie', targetEntity: Salle::class)]
    /* #[Assert\NotBlank(message:"le champ est vide")] */
    private Collection $salles;


   
    #[ORM\OneToMany(mappedBy: 'clients', targetEntity: Client::class)]
    private Collection $clients;

    #[ORM\OneToMany(mappedBy: 'academie', targetEntity: Abonnement::class)]
    private Collection $abonnements; 


    public function __construct()
    {
        $this->salles = new ArrayCollection();

       $this->clients = new ArrayCollection();
       $this->abonnements = new ArrayCollection(); 
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    } 

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getSportpropose(): ?string
    {
        return $this->sportpropose;
    }

    public function setSportpropose(string $sportpropose): self
    {
        $this->sportpropose = $sportpropose;

        return $this;
    }

    /**
     * @return Collection<int, Salle>
     */
    public function getSalles(): Collection
    {
        return $this->salles;
    }

  
    public function addSalle(Salle $salle): self
    {
        if (!$this->salles->contains($salle)) {
            $this->salles->add($salle);
            $salle->setAcademie($this);
        }

        return $this;
    }

    public function removeSalle(Salle $salle): self
    {
        if ($this->salles->removeElement($salle)) {
            // set the owning side to null (unless already changed)
            if ($salle->getAcademie() === $this) {
                $salle->setAcademie(null);
            }
        }

        return $this;
    }


 
 /**
     * @return Collection<int, Client>
     */
     
     public function getClients(): Collection
     {
         return $this->clients;
     }
 
     public function addClient(Client $client): self
     {
         if (!$this->clients->contains($client)) {
             $this->clients->add($client);
             $client->setAcademie($this);
         }
 
         return $this;
     }
 
     public function removeClient(Client $client): self
     {
         if ($this->clients->removeElement($client)) {
             // set the owning side to null (unless already changed)
             if ($client->getAcademie() === $this) {
                 $client->setAcademie(null);
             }
         }
 
         return $this;
     }

     /**
      * @return Collection<int, Abonnement>
      */
     public function getAbonnements(): Collection
     {
         return $this->abonnements;
     }

     public function addAbonnement(Abonnement $abonnement): self
     {
         if (!$this->abonnements->contains($abonnement)) {
             $this->abonnements->add($abonnement);
             $abonnement->setAcademie($this);
         }

         return $this;
     }

     public function removeAbonnement(Abonnement $abonnement): self
     {
         if ($this->abonnements->removeElement($abonnement)) {
             // set the owning side to null (unless already changed)
             if ($abonnement->getAcademie() === $this) {
                 $abonnement->setAcademie(null);
             }
         }

         return $this;
     }

    

}
