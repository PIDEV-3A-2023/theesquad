<?php

namespace App\Entity;
use App\Repository\AlimentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use phpDocumentor\Reflection\Types\Nullable;
use Symfony\Component\Serializer\Annotation\Groups;



#[ORM\Entity(repositoryClass: AlimentRepository::class)]
class Aliment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column  ]
    /**
     * @Groups("aliments")
     */
    public ?int $id = null;

    #[ORM\Column(length: 255)]
    /**
     * @Assert\NotBlank(message="Le nom ne peut pas être vide")
     * @Assert\Length(max=255, maxMessage="Le nom ne peut pas dépasser {{ limit }} caractères")
     * @Groups("aliments")
     */



    public ?string $Nom = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez remplir le nombre de calories")]
    /**
     * @Assert\NotBlank
     * @Assert\Type(type="numeric")
     * @Assert\GreaterThan(value=0, message="Le prix doit être supérieur à {{ compared_value }}.")
     * @Groups("aliments")

     */
    public ?int $NbCal = null;


    #[ORM\Column(length: 255, nullable: true)]
    /**
     * @Groups("aliments")
     */
    public ?string $Descr = null;

    #[ORM\OneToMany(mappedBy: 'aliments', targetEntity: Routine::class)]
    private Collection $routines;

    #[ORM\OneToMany(mappedBy: 'Dejeuner', targetEntity: Routine::class)]
    private Collection $routinesDejeuner;

    #[ORM\OneToMany(mappedBy: 'Midi', targetEntity: Routine::class)]
    private Collection $routinesMidi;

    #[ORM\OneToMany(mappedBy: 'Dinner', targetEntity: Routine::class)]
    private Collection $routinesDinner;

    #[ORM\ManyToMany(targetEntity: Routine::class, mappedBy: 'alimentss')]
    private Collection $routiness;

    public function __construct()
    {
        $this->routines = new ArrayCollection();
        $this->routinesDejeuner = new ArrayCollection();
        $this->routinesMidi = new ArrayCollection();
        $this->routinesDinner = new ArrayCollection();
        $this->routiness = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getNbCal(): ?int
    {
        return $this->NbCal;
    }

    public function setNbCal(int $NbCal): self
    {
        $this->NbCal = $NbCal;

        return $this;
    }

    public function getDescr(): ?string
    {
        return $this->Descr;
    }

    public function setDescr(?string $Descr): self
    {
        $this->Descr = $Descr;

        return $this;
    }

    /**
     * @return Collection<int, Routine>
     */
    public function getRoutines(): Collection
    {
        return $this->routines;
    }

    public function addRoutine(Routine $routine): self
    {
        if (!$this->routines->contains($routine)) {
            $this->routines->add($routine);
            $routine->setAliments($this);
        }

        return $this;
    }

    public function removeRoutine(Routine $routine): self
    {
        if ($this->routines->removeElement($routine)) {
            // set the owning side to null (unless already changed)
            if ($routine->getAliments() === $this) {
                $routine->setAliments(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Routine>
     */
    public function getRoutinesDejeuner(): Collection
    {
        return $this->routinesDejeuner;
    }

    public function addRoutinesDejeuner(Routine $routinesDejeuner): self
    {
        if (!$this->routinesDejeuner->contains($routinesDejeuner)) {
            $this->routinesDejeuner->add($routinesDejeuner);
            $routinesDejeuner->setDejeuner($this);
        }

        return $this;
    }

    public function removeRoutinesDejeuner(Routine $routinesDejeuner): self
    {
        if ($this->routinesDejeuner->removeElement($routinesDejeuner)) {
            // set the owning side to null (unless already changed)
            if ($routinesDejeuner->getDejeuner() === $this) {
                $routinesDejeuner->setDejeuner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Routine>
     */
    public function getRoutinesMidi(): Collection
    {
        return $this->routinesMidi;
    }

    public function addRoutinesMidi(Routine $routinesMidi): self
    {
        if (!$this->routinesMidi->contains($routinesMidi)) {
            $this->routinesMidi->add($routinesMidi);
            $routinesMidi->setMidi($this);
        }

        return $this;
    }

    public function removeRoutinesMidi(Routine $routinesMidi): self
    {
        if ($this->routinesMidi->removeElement($routinesMidi)) {
            // set the owning side to null (unless already changed)
            if ($routinesMidi->getMidi() === $this) {
                $routinesMidi->setMidi(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Routine>
     */
    public function getRoutinesDinner(): Collection
    {
        return $this->routinesDinner;
    }

    public function addRoutinesDinner(Routine $routinesDinner): self
    {
        if (!$this->routinesDinner->contains($routinesDinner)) {
            $this->routinesDinner->add($routinesDinner);
            $routinesDinner->setDinner($this);
        }

        return $this;
    }

    public function removeRoutinesDinner(Routine $routinesDinner): self
    {
        if ($this->routinesDinner->removeElement($routinesDinner)) {
            // set the owning side to null (unless already changed)
            if ($routinesDinner->getDinner() === $this) {
                $routinesDinner->setDinner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Routine>
     */
    public function getRoutiness(): Collection
    {
        return $this->routiness;
    }

    public function addRoutiness(Routine $routiness): self
    {
        if (!$this->routiness->contains($routiness)) {
            $this->routiness->add($routiness);
            $routiness->addAlimentss($this);
        }

        return $this;
    }

    public function removeRoutiness(Routine $routiness): self
    {
        if ($this->routiness->removeElement($routiness)) {
            $routiness->removeAlimentss($this);
        }

        return $this;
    }



}
