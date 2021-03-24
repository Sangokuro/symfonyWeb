<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffreRepository::class)
 */
class Offre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dureeStage;

    /**
     * @ORM\Column(type="float")
     */
    private $baseRemuneration;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveauRecherche;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombrePlace;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getDureeStage(): ?string
    {
        return $this->dureeStage;
    }

    public function setDureeStage(string $dureeStage): self
    {
        $this->dureeStage = $dureeStage;

        return $this;
    }

    public function getBaseRemuneration(): ?float
    {
        return $this->baseRemuneration;
    }

    public function setBaseRemuneration(float $baseRemuneration): self
    {
        $this->baseRemuneration = $baseRemuneration;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNiveauRecherche(): ?string
    {
        return $this->niveauRecherche;
    }

    public function setNiveauRecherche(string $niveauRecherche): self
    {
        $this->niveauRecherche = $niveauRecherche;

        return $this;
    }

    public function getNombrePlace(): ?int
    {
        return $this->nombrePlace;
    }

    public function setNombrePlace(int $nombrePlace): self
    {
        $this->nombrePlace = $nombrePlace;

        return $this;
    }
}
