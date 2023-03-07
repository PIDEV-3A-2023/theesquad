<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CoachRepository::class)]
class Coach extends User
{

    #[ORM\Column(length: 255)]
    private ?string $diplome = null;

    #[ORM\Column]
    private ?bool $etatCompte = false;

    public function getDiplome(): ?string
    {
        return $this->diplome;
    }

    public function setDiplome(string $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function isEtatCompte(): ?bool
    {
        return $this->etatCompte;
    }

    public function setEtatCompte(bool $etatCompte): self
    {
        $this->etatCompte = $etatCompte;

        return $this;
    }
}
