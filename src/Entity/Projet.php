<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $resume;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkGit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $LinkCp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getLinkGit(): ?string
    {
        return $this->linkGit;
    }

    public function setLinkGit(?string $linkGit): self
    {
        $this->linkGit = $linkGit;

        return $this;
    }

    public function getLinkCp(): ?string
    {
        return $this->LinkCp;
    }

    public function setLinkCp(?string $LinkCp): self
    {
        $this->LinkCp = $LinkCp;

        return $this;
    }
}
