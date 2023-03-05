<?php

namespace App\Entity;

use App\Repository\CategorieProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: CategorieProduitRepository::class)]
class CategorieProduit
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    /**
     * @Groups("categorieproduits")
     */
    public ?int $id = null;

    /**
     * @Assert\NotBlank(message="Le nom ne peut pas être vide")
     * @Assert\Length(max=255, maxMessage="Le nom ne peut pas dépasser {{ limit }} caractères")
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/",
     *     message="Le nom ne doit contenir que des lettres"
     * )
     * @Groups("categorieproduits")
     */
    #[ORM\Column(length: 255)]
    public ?string $nom = null;

    /**
     * @Assert\NotBlank(message="La description ne peut pas être vide")
     * @Assert\Length(
     *     max=255,
     *     maxMessage="La description ne peut pas dépasser {{ limit }} caractères",
     *     min=4,
     *     minMessage="La description doit etre supperiere a 4 caractére ")
     *@Groups("categorieproduits")

     */
    #[ORM\Column(length: 255)]
    public ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Produit::class)]
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
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

    /**
     * @return Collection<int, Produit>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Produit $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setCategory($this);
        }

        return $this;
    }

    public function removeProduct(Produit $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategory() === $this) {
                $product->setCategory(null);
            }
        }

        return $this;
    }
}
