<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    /**
     * @Assert\NotBlank(message="Le nom ne peut pas être vide")
     * @Assert\Length(max=255, maxMessage="Le nom ne peut pas dépasser {{ limit }} caractères")
     * * @Assert\Regex(pattern="/^[a-zA-Z]+$/", message="Le champ name ne doit contenir que des lettres alphabétiques.")
     */
    #[ORM\Column(length: 255)]
    private ?string $nom = null;



    /**
     * @Assert\NotBlank(message="La description ne peut pas être vide")
     * @Assert\Length(
     *     max=255,
     *     maxMessage="La description ne peut pas dépasser {{ limit }} caractères",
     *     min=4,
     *     minMessage="La description doit etre supperiere a 4 caractére ")
     */
    #[ORM\Column(length: 255)]
    private ?string $description = null;


    /**
     * @Assert\NotBlank
     * @Assert\Type(type="numeric")
     * @Assert\GreaterThan(value=0, message="Le prix doit être supérieur à {{ compared_value }}.")
     */
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CategorieProduit $category = null;

    #[ORM\ManyToMany(targetEntity: Commande::class, inversedBy: 'commande')]
    private Collection $commande;


    /**
     * @Assert\File(
     *     maxSize = "2M",
     *     mimeTypes = {"image/jpeg", "image/png", "image/gif"},
     *     mimeTypesMessage = "Veuillez télécharger une image valide (jpeg, png ou gif) et de taille maximale 2 Mo."
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function __construct()
    {
        $this->commande = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCategory(): ?CategorieProduit
    {
        return $this->category;
    }

    public function setCategory(?CategorieProduit $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommande(): Collection
    {
        return $this->commande;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commande->contains($commande)) {
            $this->commande->add($commande);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        $this->commande->removeElement($commande);

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
