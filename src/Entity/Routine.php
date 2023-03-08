<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


use App\Repository\RoutineRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Nullable;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: RoutineRepository::class)]
class Routine
{
    #[ORM\Id]
    #[ORM\GeneratedValue    ]
    #[ORM\Column]
    /**
     * @Groups ("routinee")
     */


    private ?int $id = null;


    #[ORM\ManyToOne(cascade:  ["persist"], inversedBy: 'routinesDejeuner')]
    #[Assert\NotBlank(message: "Veuillez Séléctionner un aliment")]
    /**
     * @Groups ("routinee")
     *
     */

    private ?Aliment $Dejeuner = null;


    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez remplir les calories consommés")]
    /**
     * @Groups ("routinee")
     */
    private ?int $CalCons = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]

    #[Assert\GreaterThan("today", message:"Date must not be in the past.")]
    /**
     * @Groups ("routinee")
     */
    private ?\DateTimeInterface $Date = null;

    #[ORM\ManyToOne(cascade: ["persist"],inversedBy: 'routines')]
    #[ORM\JoinColumn(nullable: true)]
    /**
     * @Groups ("routinee")
     */
    private ?Aliment $aliments = null;



    #[ORM\ManyToOne(cascade:  ["persist"],inversedBy: 'routines')]
    #[ORM\JoinColumn(nullable: false)]
    /**
     * @Groups ("routinee")
     */
    private ?Objectif $objectif = null;

    #[ORM\ManyToOne(cascade:  ["persist"],inversedBy: 'routinesMidi')]
    #[Assert\NotBlank(message: "Veuillez Séléctionner un aliment")]
    /**
     * @Groups ("routinee")
     */
    private ?Aliment $Midi = null;

    #[ORM\ManyToOne(cascade: ["persist"],inversedBy: 'routinesDinner')]
    #[Assert\NotBlank(message: "Veuillez Séléctionner un aliment")]
    /**
     * @Groups ("routinee")
     */

    private ?Aliment $Dinner = null;

    #[ORM\ManyToMany(cascade:  ["persist"],targetEntity: Aliment::class, inversedBy: 'routiness')]

    private Collection $alimentss;

    public function __construct()
    {
        $this->alimentss = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDej(): ?string
    {
        return $this->Dej;
    }

    public function setDej(string $Dej): self
    {
        $this->Dej = $Dej;

        return $this;
    }






    public function getCalCons(): ?int
    {
        return $this->CalCons;
    }

    public function setCalCons(int $CalCons): self
    {
        $this->CalCons = $CalCons;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getAliments(): ?Aliment
    {
        return $this->aliments;
    }

    public function setAliments(?Aliment $aliments): self
    {
        $this->aliments = $aliments;

        return $this;
    }

    public function getObjectif(): ?Objectif
    {
        return $this->objectif;
    }

    public function setObjectif(?Objectif $objectif): self
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getDejeuner(): ?Aliment
    {
        return $this->Dejeuner;
    }

    public function setDejeuner(?Aliment $Dejeuner): self
    {
        $this->Dejeuner = $Dejeuner;

        return $this;
    }

    public function getMidi(): ?Aliment
    {
        return $this->Midi;
    }

    public function setMidi(?Aliment $Midi): self
    {
        $this->Midi = $Midi;

        return $this;
    }

    public function getDinner(): ?Aliment
    {
        return $this->Dinner;
    }

    public function setDinner(?Aliment $Dinner): self
    {
        $this->Dinner = $Dinner;

        return $this;
    }

    /**
     * @return Collection<int, Aliment>
     */
    public function getAlimentss(): Collection
    {
        return $this->alimentss;
    }

    public function addAlimentss(Aliment $alimentss): self
    {
        if (!$this->alimentss->contains($alimentss)) {
            $this->alimentss->add($alimentss);
        }

        return $this;
    }

    public function removeAlimentss(Aliment $alimentss): self
    {
        $this->alimentss->removeElement($alimentss);

        return $this;
    }
}
