<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre le nom de l'événement!!!")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    // #[Assert\NotBlank(message: "vous devez mettre la date de l'événement!!!")]
    //#[Assert\DateTime()]
    #[Assert\NotBlank(message: "vous devez mettre la date de l'événement!!!")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[Assert\NotBlank(message: "vous devez mettre l'adresse de l'événement!!!")]
    #[ORM\Column(length: 255)]
    private ?string $adresse = null;


//    #[Assert\NotNull(message: "vous devez mettre une image de l'événement!!!")]
//    #[Assert\File(
//          maxSize: "3M",
//          mimeTypes : ["image/jpg", "image/png"],
//          mimeTypesMessage : "Veuillez choisir un fichier image valide (JPG, PNG)."
//      )]
    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[Assert\NotBlank(message: "vous devez mettre une description de l'événement!!!")]
    #[Assert\Length([
        'min' =>20,
        'max' => 200,
        'minMessage' => 'la description doit contenir au moins {{ limit }} caractères',
        'maxMessage' => 'la description doit contenir au max {{ limit }} caractères',
    ])]
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: Participation::class)]
    private Collection $participations;


    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: Exercice::class)]
    private Collection $exercices;

    public function __construct()
    {
        $this->exercices = new ArrayCollection();
        $this->participations = new ArrayCollection();

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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


    ////fonction qui permet de calculer le nombre de jours restants entre la date de l'evenement et la date actuelle
    public function joursRestants(): int
    {
        // Récupérer la date de l'attribut "date" de l'événement
        $date = $this->getDate();

        // Créer un objet DateTime pour la date actuelle
        $aujourdhui = new DateTime();

        // Calculer la différence entre la date stockée et la date actuelle
        $difference = $date->diff($aujourdhui);

        // Extraire le nombre de jours restants
        $joursRestants = $difference->days;

        return $joursRestants;

    }





    /**
     * @return Collection<int, Exercice>
     */
    public function getExercices(): Collection
    {
        return $this->exercices;
    }

    public function addExercice(Exercice $exercice): self
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices->add($exercice);
            $exercice->setEvenement($this);
        }

        return $this;
    }

    public function removeExercice(Exercice $exercice): self
    {
        if ($this->exercices->removeElement($exercice)) {
            // set the owning side to null (unless already changed)
            if ($exercice->getEvenement() === $this) {
                $exercice->setEvenement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Participation>
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): self
    {
        if (!$this->participations->contains($participation)) {
            $this->participations[] = $participation;
            $participation->setEvenement($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getEvenement() === $this) {
                $participation->setEvenement(null);
            }
        }

        return $this;
    }
}
