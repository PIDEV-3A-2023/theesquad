<?php

namespace App\Entity;

use App\Entity\Academie;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SalleRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('salle')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Groups('salle')]
    private ?string $nom = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Range(min:10, max:50, minMessage:'La capacité minimum doit étre égale à 10', maxMessage:'Cette valeur doit étre inférieure ou égale à 50')]
    #[Assert\Positive(message: 'La capacité doit etre positive',)]
    #[Groups('salle')]
    private ?int $capacite = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Range(max:10, maxMessage:'cette valeur doit étre inférieure ou égale à 10')]
    #[Assert\Positive(message: 'equipement doit etre positif',)]
    #[Groups('salle')]
    private ?int $equipement = null;

    #[ORM\ManyToOne(inversedBy: 'salles')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message:"le champ est vide")]
    private ?Academie $academie;

    #[ORM\OneToMany(mappedBy: 'salle', targetEntity: Cours::class, orphanRemoval: true)]
    private Collection $cours;
 



    public function __construct()
    {
        $this->cours = new ArrayCollection();
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

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getEquipement(): ?int
    {
        return $this->equipement;
    }

    public function setEquipement(int $equipement): self
    {
        $this->equipement = $equipement;

        return $this;
    }

    public function getAcademie(): ?Academie
    {
        return $this->academie;
    }

    public function setAcademie(?Academie $academie): self
    {
        $this->academie = $academie;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCours(Cours $cours): self
    {
        if (!$this->cours->contains($cours)) {
            $this->cours->add($cours);
            $cours->setSalle($this);
        }

        return $this;
    }

    public function removeCours(Cours $cours): self
    {
        if ($this->cours->removeElement($cours)) {
            // set the owning side to null (unless already changed)
            if ($cours->getSalle() === $this) {
                $cours->setSalle(null);
            }
        }

        return $this;
    }


}
