<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\SystemeRepository")
 */
class Systeme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Partenaire", inversedBy="systeme")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idsysteme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdsysteme(): ?Partenaire
    {
        return $this->idsysteme;
    }

    public function setIdsysteme(?Partenaire $idsysteme): self
    {
        $this->idsysteme = $idsysteme;

        return $this;
    }
}
