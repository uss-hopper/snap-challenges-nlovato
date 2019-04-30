<?php


public function setlist(string $newList) : void {
	$newList = trim($newList);
	$newList =filter_var($newList, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if(empty($newList) === true) {
		throw(nw\InvalidArguementException("User list empty or insecure."));
	}
	//verify the list will fit in the database
	if(strlen($newList) > 128) {
		throw(new \RangeException("User list is too large."));
	}
	// store the list
	$this->$newList = $newList;
}

public function getList() : ?string {
	return $this->list;
}


{
	$list = new list("sdailfjweljoajjflishjriwenl");
}

/*
 * class,  two state variables, accessors, mutators and a method
 *
 * class Foo {
 * 	private $bar;
 * 	private $baz;
 * 	public function __construct( string $newBar, $newBaz)
 * 	$this->setBar($newBaz);
 * 	$this->setBaz($newBar;
 * echo "I am Groot";
 * 	}
 * 	public function setBar(string $newBar) : void {
 * 	$this->>bar = $newBar;
 * }
 * 	public function getBar() : string {
 * 		return $this->bar;
 * }
 * 	public function getBaz() : int {
 * 		return $this->baz;
 * }
 *
 * 	public function concat() : string {
 * 	return $this->bar . (string)$this->baz;
 * 	}
 * }
 *
 * instantiate class and call to a method
 *
 * $foo = new Foo("string", 12345);
 * concat $foo->concat();
 */