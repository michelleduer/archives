<?php

class User {
	// obviously, in real-world situation, the following would be private
	public $username;
	public $password;
	public $loginsToday;

	public function __sleep() {
		// Clean up: close database handles, etc
		return array("username", "password");
		// alternatively, if you want to preserve object's properties:
		// return array_keys(get_object_vars($this));
	}
}

$user = new User;
$user->username = "harry";
$user->password = "monkey";
$user->loginsToday = 3;
echo "The original user object: <br>";
print_r($user);
echo "<br><br>";
echo "Serializing the object...<br>";
$userString = serialize($user);
echo "The user is now serialized in the following string:<br>";
echo "$userString<br><br>";
echo "Converting the string back to an object...<br><br>";
$obj = unserialize($userString);
echo "The unserialized object:<br>";
print_r($obj);
echo "<br><br>";



class User2 {
	public function __wakeup() {
		echo "Yawn...what's for breakfast?<br>";
	}
}

$user = new User2;
$userString = serialize($user);
$obj = unserialize($userString);

?>
