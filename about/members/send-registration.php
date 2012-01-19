<?php $title='Sending registration...';
include_once($_SERVER['DOCUMENT_ROOT'].'/global/header.php'); ?>

<br />

<?php
/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$name = $HTTP_POST_VARS['name'];
$email = $HTTP_POST_VARS['email'];
$institution = $HTTP_POST_VARS['institution'];
$list = $HTTP_POST_VARS['list'];

if ($list=='yes') {
$addtolist = 'Please add this person to the ET users mailing list.';
}
else {
$addtolist = 'Do not add this person to the ET users mailing list.';
}

$message = "CFD Toolkit mainatiners: \n\n".$name." from ".$institution." has submitted a request to register with the CFD Toolkit. His or her email address is ".$email.". ".$addtolist."\n\n Thanks,\n CFD Toolkit Registration Bot\n";

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
elseif (mail('maintainers@cfdtoolkit.org','New CFD Toolkit registration received',$message,'From: RegistrationBot@cfdtoolkit.org')) {
  echo '<h4>Your registration has been successfully submitted. Thank you for registering!</h4>';
  echo '<br /><a href="/">Home</a>';
} else {
  echo '<h4>Unfortunately, there was a problem registering.</h4>';
  echo '<a href="javascript:history.back(1);">Go back to try again?</a>';
}
?>

<br /><br />

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');?>
