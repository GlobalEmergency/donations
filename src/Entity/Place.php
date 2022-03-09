<?php

namespace App\Entity;

use App\Repository\PlaceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlaceRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Place
{
    const TYPE_WAREHOUSE = "warehouse";
    const TYPE_RECEPTION = "reception";
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(type="float")
     * @var float
     */
    private float $longitude;

    /**
     * @ORM\Column(type="float")
     * @var float
     */
    private float $latitude;

    /**
     * @ORM\ManyToOne(targetEntity=Project::class, inversedBy="places")
     * @ORM\JoinColumn(nullable=false)
     */
    private Project $project;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private string $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $address;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $contactName;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private ?string $contactPhone;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private ?string $contactEmail;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Place
     */
    public function setLongitude(float $longitude): Place
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Place
     */
    public function setLatitude(float $latitude): Place
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getCoordinates(){
        return [
            $this->getLatitude(),
            $this->getLongitude()
        ];
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

}
