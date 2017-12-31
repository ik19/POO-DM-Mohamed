<?php

declare(strict_types=1);

namespace Meeting\Collection;

use Meeting\Entity\Meeting;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class MeetingCollection extends IteratorIterator implements Iterator
{

// Constructor
    public function __construct(Meeting ...$meetings)
    {
        parent::__construct(new ArrayIterator($meetings));
    }

    public function current() : ?Meeting
    {
        return parent::current();
    }
}