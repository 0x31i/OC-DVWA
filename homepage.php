<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/ocPage.inc.php';

dvwaPageStartup( array( 'authenticated' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Welcome' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Welcome to Overclock!</h1>
	<p>The main goal of Overclock is to be an aid for security professionals to test their skills and tools in a legal environment, help web developers better understand the processes of securing web applications and to aid both students & teachers to learn about web application security in a controlled class room environment.</p>
 	<hr />
	<br />

	<h2>Getting Started</h2>
	<p>Launch the Overclock Web Application (OCWA) to get started.</p>
 	<p><strong>Click the option on the main menu titled <em>Launch OCWA</em> to open the Overclock Web Application (OCWA).</strong></p>
	<p>There is a help button at the bottom of each page, which allows you to view hints & tips for that vulnerability. There are also additional links for further background reading, which relates to that security issue.</p>
	<hr />
	<br />

	<h2>WARNING!</h2>
	<p>Please note, the Overclock Web Application is still in development.</p>
	<br />
	<h3>Disclaimer</h3>
	<p>We do not take responsibility for the way in which any one uses this application. </p>
	<hr />
	<br />

</div>";

// Check if the current user is "brandon" and display special content
if (dvwaCurrentUser() === 'brandon') {
    $page[ 'body' ] .= "
	<div style=\"background-color: #f0f8ff; border: 2px solid #4169e1; padding: 15px; margin: 20px 0; border-radius: 5px;\">
		<h2 style=\"color: #4169e1;\">🏁 Special Access Detected!</h2>
		<p><strong>Welcome Brandon!</strong> You have found the hidden content.</p>
		<p><em>CTF Flag:</em> <code style=\"background-color: #333; color: #0f0; padding: 5px; font-family: monospace;\">FLAG{brandon_has_special_access}</code></p>
	</div>
	<hr />
	<br />";
}

dvwaHtmlEcho( $page );

?>
