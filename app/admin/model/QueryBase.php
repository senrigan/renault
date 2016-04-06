<?php
	abstract class QueryBase{
		abstract public function update();
		abstract public function insert();
		abstract public function getElement($key);
		abstract public function deleteElement($key);

	}


?>
