<?php

namespace App\Entity;

use App\Entity\Client;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\CategorieLocationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorieLocationRepository::class)]
class CategorieLocation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
  
    public  ?int $id = null;
    #[Groups('categories')]
    #[ORM\Column(length: 255)]
  
    #[Assert\NotBlank(message: "le champ est vide!!!")]
    #[Assert\Length(
        min: 4,
        minMessage: 'nom doit avoir au minimum 4 caracteres',
    )]
    #[Groups('categories')]
    public ?string $nom = null;

    #[ORM\Column(length: 255)]
   
    #[Assert\NotBlank(message: "le champ est vide!!!")]
    #[Assert\Length(
        min: 7,
        max:255,
        minMessage: 'caracteristique doit etre >= 7 ',
        maxMessage: 'caracteristique doit etre <=255'
    )]
    #[Groups('categories')]
    public ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'categorielocation', targetEntity: Espace::class)]
    private Collection $espaces;
    


    public function __construct()
    {
        $this->espaces = new ArrayCollection();

    }

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setIdCategorie(int $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Espace>
     */
    public function getEspaces(): Collection
    {
        return $this->espaces;
    }

    public function addEspace(Espace $espace): self
    {
        if (!$this->espaces->contains($espace)) {
            $this->espaces->add($espace);
            $espace->setCategorielocation($this);
        }

        return $this;
    }

    public function removeEspace(Espace $espace): self
    {
        if ($this->espaces->removeElement($espace)) {
            // set the owning side to null (unless already changed)
            if ($espace->getCategorielocation() === $this) {
                $espace->setCategorielocation(null);
            }
        }

        return $this;
    }



}
