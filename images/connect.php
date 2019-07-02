<?PHP
$dbname="stquiz";
$user ="stquiz";
$password = "India@121";
$host = "stquiz.db.11651085.hostedresource.com";

$con = mysql_connect($host,$user,$password);

if(!$con)
{
    die("could not connect");
}
$db = mysql_select_db($dbname,$con);
if(!$db)
{
    echo "database is not selected";
}
?>