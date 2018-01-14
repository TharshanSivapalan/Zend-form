<?php

declare(strict_types=1);

namespace Meetup\Entity;

use Ramsey\Uuid\Uuid;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Meetup
 *
 * @package Application\Entity
 * @ORM\Entity(repositoryClass="\Meetup\Repository\MeetupRepository")
 * @ORM\Table(name="meetups")
 */

class Meetup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=36)
     **/
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=2000, nullable=false)
     */
    private $description = '';

    /**
     * @ORM\Column(type="string", name="datestart", nullable=false)
     */
    private $datestart;
    
        /**
     * @ORM\Column(type="string", name="dateend", nullable=false)
     */

    private $dateend;


    public function __construct(string $title, string $description = '', string $datestart = '', string $dateend = '')
    {
        $this->id = Uuid::uuid4()->toString();
        $this->title = $title;
        $this->description = $description;
        $this->datestart = $datestart;
        $this->dateend = $dateend;
    }

    /**
     * @return string
     * 
     */
    /**
     *  @return mixed
     * 
     */

    public function getId() : string
    {
        return $this->id;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getDatestart() : string
    {
        return $this->datestart;
    }

    public function getDateend() : string
    {
        return $this->dateend;
    }

    public function setTitle (string $title) : void
    {
        $this->title = $title;
    }

    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }

  public function setDatestart(string $datestart) : void
    {
        $this->datestart = $datestart;
    }

    public function setDateend(string $dateend) : void
    {
        $this->dateend = $dateend;
    }
   


}
