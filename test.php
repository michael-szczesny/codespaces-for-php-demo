<?php

class Test
{
	public int $age;
	public string $name;

	public function __construct(
		int $age = 18,
		string $name = 'John'
	) {
		$this->age = $age;
		$this->name = $name;
	}
}
