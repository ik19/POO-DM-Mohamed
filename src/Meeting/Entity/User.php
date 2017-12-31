<?php

declare(strict_types=1);

namespace Meeting\Entity;

abstract class User
{
    private $name;
	private $firstname;

// Constructor
	public function __construct(string $name, string $firstname)
	{
		$this->name = $name;
		$this->firstname = $firstname;
	}

// Getter & Setter
	public function getName(): string
	{
		return $this->name;
	}
	public function setName(string $name): void
	{
		$this->name = $name;
	}
	public function getFirstname(): string
	{
		return $this->firstname;
	}
	public function setFirstname(string $firstname): void
	{
		$this->firstname = $firstname;
	}

}