<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantiteCommande = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCommande = null;

    #[ORM\Column(length: 255)]
    private ?string $etatCommande = null;

    #[ORM\ManyToMany(targetEntity: Produit::class, mappedBy: 'commande')]
    private Collection $commande;

    #[ORM\ManyToMany(targetEntity: Produit::class)]
    private Collection $produits;

    public function __construct()
    {
        $this->commande = new ArrayCollection();
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteCommande(): ?int
    {
        return $this->quantiteCommande;
    }

    public function setQuantiteCommande(int $quantiteCommande): self
    {
        $this->quantiteCommande = $quantiteCommande;

        return $this;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(?\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function getEtatCommande(): ?string
    {
        return $this->etatCommande;
    }

    public function setEtatCommande(string $etatCommande): self
    {
        $this->etatCommande = $etatCommande;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getCommande(): Collection
    {
        return $this->commande;
    }

    public function addCommande(Produit $commande): self
    {
        if (!$this->commande->contains($commande)) {
            $this->commande->add($commande);
            $commande->addCommande($this);
        }

        return $this;
    }

    public function removeCommande(Produit $commande): self
    {
        if ($this->commande->removeElement($commande)) {
            $commande->removeCommande($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        $this->produits->removeElement($produit);

        return $this;
    }

}
