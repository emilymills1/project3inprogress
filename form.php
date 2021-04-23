<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'emilymmills.com' // Put you mail domain here
	,
	'Mosaic at WDW 10 Year Anniversary' // Put your site name / form name here
	,
	'emily.mills@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@emilymmills.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
