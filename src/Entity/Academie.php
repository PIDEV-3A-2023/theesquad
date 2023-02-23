<?php

namespace App\Entity;

use App\Repository\AcademieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Salle;


#[ORM\Entity(repositoryClass: AcademieRepository::class)]
class Academie
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Length(
        min: 5,
        minMessage: 'nom doit avoir au minimum 5 caracteres',
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Regex(pattern: '/^\d{8}$/', message: 'Le numéro de téléphone doit être composé de 8 chiffres.')]
    private ?string $numtel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    private ?string $sportpropose = null;

    #[ORM\OneToMany(mappedBy: 'academie', targetEntity: Salle::class)]
    #[Assert\NotBlank(message:"le champ est vide")]
    private Collection $salles;

  
    public function __construct()
    {
        $this->salles = new ArrayCollection();
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

 

    

}
