<?php

namespace App\Service\ScheduleParser\Crate;

class TimeEntry
{
    /**
     * @var boolean
     */
    private $isFull;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var Court
     */
    private $court;

    /**
     * @var Day
     */
    private $day;

    /**
     * TimeEntry constructor.
     *
     * @param bool  $isFull
     * @param \DateTime   $time
     * @param Court $court
     * @param Day   $day
     */
    public function __construct(bool $isFull, \DateTime $time, Court $court, Day $day)
    {
        $this->isFull = $isFull;
        $this->time = $time;
        $this->court = $court;
        $this->day = $day;
    }

    /**
     * @return bool
     */
    public function isFull(): bool
    {
        return $this->isFull;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @return Court
     */
    public function getCourt(): Court
    {
        return $this->court;
    }

    /**
     * @return Day
     */
    public function getDay(): Day
    {
        return $this->day;
    }
}