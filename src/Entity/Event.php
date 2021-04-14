<?php

declare(strict_types=1);

namespace PHPOnto\Entity;

use DateTimeImmutable;
use PHPOnto\Thing;

/**
 * Class Event
 */
abstract class Event extends Thing
{
    private DateTimeImmutable $eventDate;
    private DateTimeImmutable $eventStartDateTime;
    private DateTimeImmutable $eventEndDateTime;

    private string $eventName;

    /**
     * @return DateTimeImmutable
     */
    public function getEventDate(): DateTimeImmutable
    {
        return $this->eventDate;
    }

    /**
     * @param DateTimeImmutable $eventDate
     *
     * @return Event
     */
    public function setEventDate(DateTimeImmutable $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getEventStartDateTime(): DateTimeImmutable
    {
        return $this->eventStartDateTime;
    }

    /**
     * @param DateTimeImmutable $eventStartDateTime
     *
     * @return Event
     */
    public function setEventStartDateTime(DateTimeImmutable $eventStartDateTime): self
    {
        $this->eventStartDateTime = $eventStartDateTime;

        return $this;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getEventEndDateTime(): DateTimeImmutable
    {
        return $this->eventEndDateTime;
    }

    /**
     * @param DateTimeImmutable $eventEndDateTime
     *
     * @return Event
     */
    public function setEventEndDateTime(DateTimeImmutable $eventEndDateTime): self
    {
        $this->eventEndDateTime = $eventEndDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     *
     * @return Event
     */
    public function setEventName(string $eventName): self
    {
        $this->eventName = $eventName;

        return $this;
    }


}