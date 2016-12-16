<?php
class Person
{
	protected $name;
	protected $email;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function __toString()
	{
		return "$this->name <$this->email>";
	}
}
	$Person = new Person();
	$Person->setName('gaoyang');
	$Person->setEmail('137542696@qq.com');
	echo $Person;