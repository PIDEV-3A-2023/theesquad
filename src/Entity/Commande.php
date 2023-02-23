<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    /**
     * @Assert\NotBlank
     * @Assert\Type(type="numeric")
     * @Assert\GreaterThan(value=0, message="Le prix doit être supérieur à {{ compared_value }}.")
     */
    #[ORM\Column]
    private ?int $quantiteCommande = null;



    #[Assert\GreaterThan("today", message:"The tarifhoraire must not be in the past.")]
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCommande = null;



    /**
     * @Assert\Choice(choices={"disponible", "non disponible"}, message="L'état de la commande doit être 'disponible' ou 'non disponible'")
     */
    #[ORM\Column(length: 255)]
    private ?string $etatCommande = null;

    #[ORM\ManyToMany(targetEntity: Produit::class, mappedBy: 'commande')]
    private Collection $commande;

    public function __construct()
    {
        $this->commande = new ArrayCollection();
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
}
