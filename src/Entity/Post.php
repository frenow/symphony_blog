<?php
namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 */

final class Post {
     
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private ?int $id = null;

    /**
     * @ORM\Column()
     * @Assert\NotBlank()
     * @Assert\Length(min="3", max="50")
     */
    public ?string $title;
    
    /**
     * @ORM\Column()
     * @Assert\NotBlank()
     * @Assert\Length(min="3")
     */    
    public ?string $description;

    /**
     * @ORM\Column(type="datetime")
     */      
    private \DateTime $createdAt;

    public function __construct(string $title = null, string $description = null) {
        $this->title = $title;
        $this->description = $description;
        $this->createdAt = new \DateTime();
    }
    public function getId() {
        return $this->id;
    }

    public function getCreatedAt(): \Datetime {
        return $this->createdAt;
    }

}