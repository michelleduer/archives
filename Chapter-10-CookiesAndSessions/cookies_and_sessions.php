<!--

COOKIE COMPONENTS:

cookie name (e.g. font size)
value (e.g. 3)
expires (UNIX timestamp)
path (e.g. "/admin/" or "/")
domain
secure 
HttpOnly

EXAMPLE: 
setcookie("fontSize", 3, time() + 60 * 60 * 24 * 365, "/", ".example.com", false, true);

note: time() returns current time

EXAMPLE 2:
setcookie("pageViews", 7, 0, "/", "", false, true);

====================

ACCESSING COOKIES (note: important to filter/validate data from $_COOKIE prior to outputting it):

echo $_COOKIE["pageViews"];

====================

REMOVING COOKIES:

setcookie("fontSize", "", time() - 3600, "/", ".example.com", false, true);

the expiry time set in the past (1 hour) effecitvely deletes the cookie when the browser is next loaded

-->


<!-- 

SESSIONS (refer to shopping_cart.php for an example)

DESTROYING A SESSION:

// erases data from disk, but $_SESSION data remains
session_destroy();

// erases more, but trace remains as a PHPSESSID cookie on user's browser
$_SESSION = array();
session_destroy();

// full-deletion
if (isset($_COOKIE[session_name]())) {
	setcookie(session_name(), "", time()-3600, "/");
}

$_SESSION = array();
session_destroy();


-->



