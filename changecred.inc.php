<?php

if(isset($_SESSION['recipeuser']))
{
	$userid = $_SESSION['recipeuser'];
	$query = "SELECT * FROM users WHERE userid = '$userid'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	$firstName = $row['firstName'];
	$lastName = $row['lastName'];
	$email = $row['email'];
	$geneID = $row['geneID'];
	$relationID = $row['relationID'];

echo "<h1>$firstName $lastName's Account</h1>\n";
	// userid section
echo "<form action=\"index.php\" method=\"post\">\n";
echo "<table width=\"80%\" cellpadding=\"0\" cellspacing=\"3\" border=\"0\" align=\"center\">\n";
echo "<tr><td align=\"right\">Userid:</td><td><b><i>$userid</i></b></td></tr>\n";
echo "<tr><td colspan=\"2\" align=\"center\">\n";
echo "I'm sorry but your userid is unchangable!</td></tr>\n";
	// firstname section
echo "<tr><td align=\"right\">First Name:</td><td align=\"left\">\n";
echo " <input type=\"text\" size=\"40\" value=\"$firstName\" name=\"firstName\" id=\"firstName\"></td></tr>\n";
	// lastname section
echo "<tr><td align=\"right\">Last Name:</td><td align=\"left\">\n";
echo " <input type=\"text\" size=\"40\" value=\"$lastName\" name=\"lastName\" id=\"lastName\"></td></tr>\n";
	// gender section
echo "<tr><td align=\"right\">Gender:</td>\n";
if($geneID == 1) {
	echo "<td align=\"left\"><input type=\"radio\" name=\"geneID\" value=\"1\" checked>Male \n";
	echo "<input type=\"radio\" name=\"geneID\" value=\"2\">Female</td></tr>\n";
} else if($geneID == 2) {
	echo "<td align=\"left\"><input type=\"radio\" name=\"geneID\" value=\"1\">Male \n";
	echo "<input type=\"radio\" name=\"geneID\" value=\"2\" checked>Female</td></tr>\n";
} else {
        echo "<td align=\"left\"><input type=\"radio\" name=\"geneID\" value=\"1\" checked>Male \n";
        echo "<input type=\"radio\" name=\"geneID\" value=\"2\">Female</td></tr>\n";
}
	// Birthdate section

	// relationship status section
echo "<tr><td align=\"right\">Relationship Status:</td>\n";
if($relationID == 1) {
	echo "<td align=\"left\"><input type=\"radio\" name=\"relationID\" value=\"1\" checked>Single \n";
	echo "<input type=\"radio\" name=\"relationID\" value=\"2\">In a Relationship \n";
	echo "<input type=\"radio\" name=\"relationID\" value=\"3\">Married</td></tr>\n";
} else if($relationID == 2) {
        echo "<td align=\"left\"><input type=\"radio\" name=\"relationID\" value=\"1\">Single \n";
        echo "<input type=\"radio\" name=\"relationID\" value=\"2\" checked>In a Relationship \n";
				echo "<input type=\"radio\" name=\"relationID\" value=\"3\">Married</td></tr>\n";
} else if($relationID == 3) {
				echo "<td align=\"left\"><input type=\"radio\" name=\"relationID\" value=\"1\">Single \n";
				echo "<input type=\"radio\" name=\"relationID\" value=\"2\">In a Relationship \n";
				echo "<input type=\"radio\" name=\"relationID\" value=\"3\" checked>Married</td></tr>\n";
} else {
        echo "<td align=\"left\"><input type=\"radio\" name=\"relationID\" value=\"1\" checked>Single \n";
        echo "<input type=\"radio\" name=\"relationID\" value=\"2\">In a Relationship \n";
				echo "<input type=\"radio\" name=\"relationID\" value=\"3\">Married</td></tr>\n";
}
	// email section
echo "<tr><td align=\"right\">Email:</td><td align=\"left\">\n";
echo " <input type=\"text\" size=\"50\" value=\"$email\" name=\"email\" id=\"email\"></td></tr>\n";

echo "<tr><td colspan=\"2\"></td></tr>\n";
echo "<tr><td colspan=\"2\"></td></tr>\n";
	// Password section
echo "<tr><td align=\"right\">Password:</td><td align=\"left\">\n";
echo " <input type=\"password\" size=\"40\" name=\"password\" id=\"passwordREG\"></td></tr>\n";
echo "<tr><td align=\"right\">Confirm Password:</td><td align=\"left\">\n";
echo " <input type=\"password\" size=\"40\" name=\"confirm\" id=\"confirmPASS\"></td></tr>\n";
echo "<tr><td colspan=\"2\" align=\"center\">\n";
echo "<input type=\"submit\" value=\"update\" id=\"updatebtn\"></td></tr>\n";
echo "</table>\n";
	// Hidden Fields
echo "<input type=\"hidden\" name=\"card\" value=\"savecred\">\n";
echo "<input type=\"hidden\" name=\"id\" value=\"$userid\">\n";
echo "</form>\n";
}
?>
