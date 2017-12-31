<?php

declare(strict_types=1);

namespace Meeting\Collection;

use Meeting\Entity\Participant;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class ParticipantCollection extends IteratorIterator implements Iterator
{

// Constructor
    public function __construct(Participant ...$participants)
    {
        parent::__construct(new ArrayIterator($participants));
    }

    public function current() : ?Participant
    {
        return parent::current();
    }
}