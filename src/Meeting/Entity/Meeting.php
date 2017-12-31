<?php

declare(strict_types=1);

namespace Meeting\Entity;

final class Meeting
{
    private $id;
	private $title;
	private $description;
	private $date_start;
	private $date_end;

// Constructor
    public function __construct(int $id, string $title, string $description, string $date_start, string $date_end)
    {
		$this->id = $id;
	    $this->title = $title;
        $this->description = $description;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
	}

// Getter & Setter
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
	public function getTitle()
	{
		return $this->titre;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getDateStart()
	{
			return $this->date_start;
	}
	public function getDateEnd()
	{
			return $this->date_end;
	}

}
