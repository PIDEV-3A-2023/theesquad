<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CoursRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Regex(pattern:'/^[a-zA-Z]+$/', message:'Le champ name ne doit contenir que des lettres alphabétiques.')]
    public ?string $nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThan("today", message:"La date de cours ne doit pas être antérieur à la date et l'heure actuelles")]
    public ?DateTimeInterface $date = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Range(min:1, max:2, minMessage:'La durée minimale doit étre égale à 1h', maxMessage:'La durée doit étre inférieure ou égale à 2h')]
    #[Assert\Positive(message: 'La capacité doit etre positive',)]
    public ?int $duree = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"le champ est vide")]
    #[Assert\Range(min:10, max:30, minMessage:'Le nombre minimum des participants doit étre égale à 10', maxMessage:'Le nombre maximale des participants doit étre égale à 30')]
    #[Assert\Positive(message: 'La capacité doit etre positive',)]
    public ?int $nbparticipants = null;

    #[ORM\ManyToOne(inversedBy: 'cours')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message:"le champ est vide")]
    public ?Salle $salle = null;

    #[ORM\ManyToOne(inversedBy: 'cours')]
    public ?Coach $coach = null;




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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNbparticipants(): ?int
    {
        return $this->nbparticipants;
    }

    public function setNbparticipants(int $nbparticipants): self
    {
        $this->nbparticipants = $nbparticipants;

        return $this;
    }

    public function getSalle(): ?Salle
    {
        return $this->salle;
    }

    public function setSalle(?Salle $salle): self
    {
        $this->salle = $salle;

        return $this;
    }

    public function getCoach(): ?Coach
    {
        return $this->coach;
    }

    public function setCoach(?Coach $coach): self
    {
        $this->coach = $coach;

        return $this;
    }
    

  
}
