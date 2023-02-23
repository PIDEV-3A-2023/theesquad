<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;


use App\Repository\ObjectifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjectifRepository::class)]
class Objectif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (nullable : true)]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez entrer un poids désiré")]
    /**

     * @Assert\Type(type="numeric")
     * @Assert\GreaterThan(value=0, message="On peut pas mettre 0")
     */

    private ?int $PoidsDes = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez choisir le type de votre régime")]
    /**

     * @Assert\Type(type="numeric")
     * @Assert\Choice(choices={2, 1})

     */

    private ?int $TypeReg = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez rentrer le nombre de calories recommandés")]
    /**

     * @Assert\Type(type="numeric")
     * @Assert\GreaterThan(value=0, message="On peut pas mettre 0")
     */

    private ?int $CalCons = null;

    #[ORM\OneToMany(mappedBy: 'objectif', targetEntity: Routine::class)]
    private Collection $routines;

    public function __construct()
    {
        $this->routines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoidsDes(): ?int
    {
        return $this->PoidsDes;
    }

    public function setPoidsDes(int $PoidsDes): self
    {
        $this->PoidsDes = $PoidsDes;

        return $this;
    }

    public function getTypeReg(): ?int
    {
        return $this->TypeReg;
    }

    public function setTypeReg(int $TypeReg): self
    {
        $this->TypeReg = $TypeReg;

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
            $routine->setObjectif($this);
        }

        return $this;
    }

    public function removeRoutine(Routine $routine): self
    {
        if ($this->routines->removeElement($routine)) {
            // set the owning side to null (unless already changed)
            if ($routine->getObjectif() === $this) {
                $routine->setObjectif(null);
            }
        }

        return $this;
    }
}
