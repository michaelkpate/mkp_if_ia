// TXP 4.6 tag registration
if (class_exists('\Textpattern\Tag\Registry')) {
Txp::get('\Textpattern\Tag\Registry')
->register('mkp_if_ia')
;
}

function mkp_if_ia($atts, $thing='')
{

	global $variable;

	// preg_replace("|^https?://[^/]+|i", "", serverSet('REQUEST_URI')) was copied from the function preText in publish.php

	$parts = explode('/', preg_replace("|^https?://[^/]+|i", "", serverSet('REQUEST_URI')), 5);

	// if the url ends in 'ia' this will return true; otherwise false
	 
	return (end($parts) == 'ia') ? parse(EvalElse($thing, true)) : parse(EvalElse($thing, false));
}
