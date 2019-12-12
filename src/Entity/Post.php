<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 */

final class Post {
    /**
     * @ORM\id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private ?int $id = null;

    /**
     * @ORM\Column()
     */
    public string $title;
    
    /**
     * @ORM\Column()
     */    
    public string $description;

    /**
     * @ORM\Column(type="datetime")
     */      
    private \DateTime $createdAt;



}