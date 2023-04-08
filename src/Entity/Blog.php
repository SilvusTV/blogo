<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Gedmo\Mapping\Annotation\Slug;

#[ORM\Entity(repositoryClass: BlogRepository::class), Vich\Uploadable()]
class Blog
{
    const AUTHOR = [
        1 => 'Hugo',
        2 => 'Valentin',
        3 => 'Corentin',
        4 => 'Marc',
        5 => 'Florent'
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[Vich\UploadableField(mapping: 'blog_image',fileNameProperty: 'thumbnail')]
    private ?File $imageFile = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?int $id_author = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column]
    private ?int $first_page = 0;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $thumbnail = null;

    #[Slug(fields: ['title'])]
    #[ORM\Column(type: 'string', length: 255)]
    private ?string $slug = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->setSlug(null);
    }

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getIdAuthor(): ?int
    {
        return $this->id_author;
    }

    public function setIdAuthor(int $id_author): self
    {
        $this->id_author = $id_author;

        return $this;
    }
    public function getAuthorType():string
    {
        return self::AUTHOR[$this->id_author];
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getFirstPage(): ?int
    {
        return $this->first_page;
    }

    public function setFirstPage(int $first_page): self
    {
        $this->first_page = $first_page;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(?string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(File $imageFile): Blog
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile){
            $this->updated_at = new \DateTimeImmutable('now');
        }
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
