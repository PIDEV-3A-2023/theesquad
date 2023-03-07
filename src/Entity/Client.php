<?php

namespace App\Entity;

use App\Entity\Espace;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\CategorieLocation;
use App\Repository\ClientRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client extends User
{

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(min: 3, max: 255, exactMessage: 'Your Address should contain {{ limit }} characters')]
    private ?string $adresse = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(min: 3, max: 3, exactMessage: 'Your Address should contain 3 numbers')]
    #[Assert\Regex(pattern: '/^[0-9]+$/i', message: 'Your taille should contain only numbers')]
    private ?string $taille = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(min: 2, max: 3, exactMessage: 'Your Address should contain 2 or 3 numbers')]
    #[Assert\Regex(pattern: '/^[0-9]+$/i', message: 'Your poids should contain only numbers')]
    private ?string $poids = null;

    
    #[ORM\ManyToOne(inversedBy:'clients')]
    private  ?Espace $espace;

    #[ORM\ManyToOne(inversedBy:'clients')]
    private ?CategorieLocation $categorielocation;
    




    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(?string $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getEspace(): ?Espace
    {
        return $this->espace;
    }

    public function setEspace(?Espace $espace): self
    {
        $this->espace = $espace;

        return $this;
    }

    public function getCategorieLocation(): ?CategorieLocation
    {
        return $this->categorielocation;
    }

    public function setCategorieLocation(?CategorieLocation $categorielocation): self
    {
        $this->categorielocation = $categorielocation;

        return $this;
    }


}
