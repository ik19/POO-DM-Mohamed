<?php

declare(strict_types=1);

namespace Meeting\Collection;

use Meeting\Entity\Organiser;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class OrganiserCollection extends IteratorIterator implements Iterator
{
// Constructor
    public function __construct(Organiser ...$organisers)
    {
        parent::__construct(new ArrayIterator($organisers));
    }

    public function current() : ?Organiser
    {
        return parent::current();
    }
}