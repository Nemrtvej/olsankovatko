<?php

namespace App\Service\ScheduleParser\Crate;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Day
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var Collection|Court[]
     */
    private $courts;

    /**
     * Day constructor.
     *
     * @param \DateTime $date
     */
    public function __construct(\DateTime $date)
    {
        $this->date = $date;
        $this->courts = new ArrayCollection();
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return Court[]|Collection
     */
    public function getCourts(): Collection
    {
        return $this->courts;
    }

    /**
     * @param Court $court
     */
    public function addCourt(Court $court): void
    {
        $this->courts->add($court);
    }

}