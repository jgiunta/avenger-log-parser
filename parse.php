<?

echo "<table align=center>";
echo "<tr><td><a href=?function=login>Login</a></td>";
echo "<td><a href=?function=from>From</a></td>";
echo "<td><a href=?function=rcpt>Rcpt</a></td></tr>";
echo "</table>";

if($function == "login") {

}

if($function == "from") {
	$con = mysql_connect("localhost","avenger","avg08");
	mysql_select_db("avenger");
	$sql = "SELECT * FROM tfrom ORDER by hits DESC";
	$res = mysql_query($sql,$con);
	echo "<table align=center>";
	echo "<tr bgcolor=gray><td>From</td><td>Hits</td></tr>";
	while($tmp = mysql_fetch_array($res)) {
		echo "<tr><td>$tmp[from_mail]</td><td>$tmp[hits]</td></tr>";
	}
	echo "</table>";
}

if($function == "rcpt") {
        $con = mysql_connect("localhost","avenger","avg08");
        mysql_select_db("avenger");
        $sql = "SELECT * FROM trcpt ORDER by hits DESC";
        $res = mysql_query($sql,$con);
        echo "<table align=center>";
        echo "<tr bgcolor=gray><td>Rcpt</td><td>Hits</td></tr>";
        while($tmp = mysql_fetch_array($res)) {
                echo "<tr><td>$tmp[rcpt_mail]</td><td>$tmp[hits]</td></tr>";
        }
        echo "</table>";
}
?>
