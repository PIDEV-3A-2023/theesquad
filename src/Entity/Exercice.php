<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ExerciceRepository::class)]
class Exercice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("exercices")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mettre le nom de l'exercice!!!")]
    #[Groups("exercices")]
    private ?string $nom = null;

    #[Assert\NotBlank(message: "vous devez mettre la description de l'exercice!!!")]
    #[Assert\Length([
        'min' =>20,
        'max' => 200,
        'minMessage' => 'la description doit contenir au moins {{ limit }} caractères',
        'maxMessage' => 'la description doit contenir au max {{ limit }} caractères',
    ])]
    #[ORM\Column(length: 255)]
    #[Groups("exercices")]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "vous devez mentionner la durée de l'exercice!!!")]
    #[Groups("exercices")]
    private ?string $duree = null;

    #[ORM\ManyToOne(inversedBy: 'exercices')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Evenement $evenement = null;

    #[ORM\Column(length: 255,nullable:true)]
    // #[Assert\NotNull(message: "vous devez mettre une image de l'événement!!!")]
        // #[Assert\File(
        //     maxSize: "3M",
        //     mimeTypes : ["image/jpg", "image/png"],
        //     mimeTypesMessage : "Veuillez choisir un fichier image valide (JPG, PNG)."
        // )]
    private ?string $image = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): self
    {
        $this->evenement = $evenement;

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
}
