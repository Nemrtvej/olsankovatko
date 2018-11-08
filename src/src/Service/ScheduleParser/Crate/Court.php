<?php

namespace App\Service\ScheduleParser\Crate;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Court
{
    /**
     * @var Collection|TimeEntry[]
     */
    private $timeEntries;

    /**
     * @var Day
     */
    private $day;

    /**
     * @var string
     */
    private $courtName;

    /**
     * Court constructor.
     *
     * @param Day    $day
     * @param string $courtName
     */
    public function __construct(Day $day, string $courtName)
    {
        $this->day = $day;
        $this->timeEntries = new ArrayCollection();
        $this->courtName = $courtName;
    }

    /**
     * @return TimeEntry[]|Collection
     */
    public function getTimeEntries(): Collection
    {
        return $this->timeEntries;
    }

    /**
     * @param TimeEntry $timeEntry
     */
    public function addTimeEntry(TimeEntry $timeEntry): void
    {
        $this->timeEntries->add($timeEntry);
    }

    /**
     * @return Day
     */
    public function getDay(): Day
    {
        return $this->day;
    }

    /**
     * @return string
     */
    public function getCourtName(): string
    {
        return $this->courtName;
    }
}