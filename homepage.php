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
	<p>The hub for PC enthusiasts, builders, and performance seekers.</p>
	<p>At Overclock, we bring together a community of hardware lovers who thrive on pushing their systems to the limit. Whether you’re building your first rig, swapping out components for the ultimate upgrade, or fine-tuning every MHz for peak performance, this is the place to share your journey.</p>
	<ul>
		<li>Show off your setup with photos, benchmarks, and detailed specs.</li>
		<li>Discuss upgrades and get feedback from experienced builders.</li>
  		<li>Discover new hardware trends and learn optimization tips from the community.</li>
  		<li>Collaborate and connect with others who share the passion for performance.</li>
	</ul>
 	<hr />
	<br />

	<h2>Getting Started</h2>
	<p>Head to the Forum Page where you can browse discussions or start your own.</p>
	<p>There is a help button at the bottom of each page, which allows you to view hints & tips for that vulnerability. There are also additional links for further background reading, which relates to that security issue.</p>
	<hr />
	<br />

	<h2>WARNING!</h2>
	<p>Please note, the Overclock Web Application is still in development.</p>
	<br />
	<h3>Disclaimer</h3>
	<p>We do not take responsibility for the way in which any one uses this application. Overclock is a community-driven platform where members share personal experiences, advice, and opinions. We are not responsible for any hardware damage, malfunctions, or “exploding computers” caused by following advice found here. Please proceed responsibly and always research before making hardware modifications.</p>
	<hr />
	<br />

</div>";

dvwaHtmlEcho( $page );

?>
