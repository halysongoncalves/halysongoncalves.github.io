	<?php
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['message'])) {
	//require("class.phpmailer.php"); //you have to download this plugin from github.com - link is in documentation
	
	$firstname = 	$_POST['firstname'];
	$lastname = 	$_POST['lastname'];
	$email = 		$_POST['email'];
	$message = 		$_POST['message'];

	require 'vendor/autoload.php';
	use Mailgun\Mailgun;

	# Instantiate the client.
	$mgClient = new Mailgun('key-b07b77f2eded53e9e0388422b9b7dc1e');
	$domain = "sandboxb8c9597fe99d4d3ba2a82e0f6cfd1cbd.mailgun.org";

	# Make the call to the client.
	$result = $mgClient->sendMessage("$domain",
	                  array('from'    => 'Mailgun Sandbox <postmaster@sandboxb8c9597fe99d4d3ba2a82e0f6cfd1cbd.mailgun.org>',
	                        'to'      => 'Halyson Lima <halysongoncalves@gmail.com>',
	                        'subject' => 'Hello Halyson Lima',
	                        'text'    => 'Congratulations Halyson Lima, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
	
}
?>   
            