<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright � 2002 - 2008 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_icq_include.php
| Author: Digitanium
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

if ($profile_method == "input") {
	echo "<tr>\n";
	echo "<td class='tbl'>".$locale['uf_icq'].":</td>\n";
	echo "<td class='tbl'><input type='text' name='user_icq' value='".(isset($user_data['user_icq']) ? $user_data['user_icq'] : "")."' maxlength='16' class='textbox' style='width:200px;' /></td>\n";
	echo "</tr>\n";
} elseif ($profile_method == "display") {
	if ($user_data['user_icq']) {
		echo "<tr>\n";
		echo "<td width='1%' class='tbl1' style='white-space:nowrap'>".$locale['uf_icq']."</td>\n";
		echo "<td align='right' class='tbl1'>".$user_data['user_icq']."&nbsp;<img style='vertical-align:middle;border:none' src='http://www.IMStatusCheck.com/status/icq/".$user_data['user_icq']."' alt='".$user_data['user_icq']."' /></td>\n";
		echo "</tr>\n";
	}
} elseif ($profile_method == "validate_insert") {
	$db_fields .= ", user_icq";
	$db_values .= ", '".(isset($_POST['user_icq']) && isnum($_POST['user_icq']) ? $_POST['user_icq'] : "")."'";
} elseif ($profile_method == "validate_update") {
	$db_values .= ", user_icq='".(isset($_POST['user_icq']) && isnum($_POST['user_icq']) ? $_POST['user_icq'] : "")."'";
}
?>
