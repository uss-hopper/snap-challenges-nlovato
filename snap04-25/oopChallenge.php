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

