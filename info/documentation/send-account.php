<?php $title='Sending account request...';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php'); ?>

<br />

<?php
/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$name = $HTTP_POST_VARS['name'];
$email = $HTTP_POST_VARS['email'];
$department = $HTTP_POST_VARS['department'];
$institution = $HTTP_POST_VARS['institution'];
$position = $HTTP_POST_VARS['position'];
$advisor = $HTTP_POST_VARS['advisor'];

if ($position=='undergraduate' || $position=='graduate') {
$mentionadvisor = 'This student\'s advisor is '.$advisor.'.';
}


$message = "Einstein Toolkit maintainers: \n\n".$name.", a(n) ".$position." in the ".$department." Department at ".$institution.", has submitted a request for a test account for the Einstein Toolkit. His or her email address is ".$email.". ".$mentionadvisor." \n\n Thanks,\n Einstein Toolkit Request Bot\n";

/* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
if ($name == '') {
  echo '<h4>Please fill in your name.</h4>';
  echo '<br /><a href="javascript:history.back(1);">Try again</a>';
  }
  elseif (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email)) {
  echo '<h4>Please provide a valid email address.</h4>';
  echo '<br /><a href="javascript:history.back(1);">Try again</a>';
}

/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (mail('maintainers@einsteintoolkit.org','New Einstein Toolkit test account request received',$message,'From: RegistrationBot@einsteintoolkit.org')) {
  echo '<h4>Your request for a test account has been successfully submitted. You will hear from us soon.</h4>';
  echo '<br /><a href="/">Home</a>';
} else {
  echo '<h4>Unfortunately, there was a problem requesting an account.</h4>';
  echo '<a href="javascript:history.back(1);">Go back to try again?</a>';
}
?>

<br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>