<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=1,
     *     minMessage="Слишком короткое название"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=1,
     *     minMessage="Слишком короткое имя"
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $author_name;

    /**
     *  @Assert\Length(
     *     min=1,
     *     minMessage="Ошибка даты"
     * )
     * @Assert\NotBlank()
     * @ORM\Column(type="integer")
     */
    private $year;

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

    public function getAuthorName(): ?string
    {
        return $this->author_name;
    }

    public function setAuthorName(string $author_name): self
    {
        $this->author_name = $author_name;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }
}
