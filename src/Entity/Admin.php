<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminRepository::class)]
class Admin extends User

{   #[ORM\ManyToOne(inversedBy: 'admins')]
 
    private ?Academie $academie;

    #[ORM\ManyToOne(inversedBy: 'admins')]
    private ?Salle $salle;
    
    #[ORM\ManyToOne(inversedBy: 'admins')]
    private ?Cours $cours;

    public function getAcademie(): ?Academie
    {
        return $this->academie;
    }

    public function setAcademie(?Academie $academie): self
    { 
        $this->academie = $academie;

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

    public function getCours(): ?Cours
    {
        return $this->cours;
    }

    public function setCours(?Cours $cours): self
    { 
        $this->cours = $cours;

        return $this;
    } 
  

}