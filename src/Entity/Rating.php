<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column]
    private ?int $iduser = null;



    #[ORM\Column]
    private ?int $rating = null;


    #[ORM\Column]
    private ?int $idexercice = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of idexercice
     *
     * @return  int
     */
    public function getIdexercice()
    {
        return $this->idexercice;
    }

    /**
     * Set the value of idexercice
     *
     * @param  int  $idexercice
     *
     * @return  self
     */
    public function setIdexercice(int $idexercice)
    {
        $this->idexercice = $idexercice;

        return $this;
    }






    /**
     * Get the value of rating
     *
     * @return  int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set the value of iduser
     *
     * @param  int  $rating
     *
     * @return  self
     */
    public function setRating(int $rating)
    {
        $this->rating = $rating;

        return $this;
    }


    /**
     * Get the value of iduser
     *
     * @return  int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set the value of iduser
     *
     * @param  int  $iduser
     *
     * @return  self
     */
    public function setIduser(int $iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

}
