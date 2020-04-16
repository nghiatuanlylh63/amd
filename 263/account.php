<?php

$this->acc = array(
# Example: 'accounts'	=> array('user:pass','cookie'),
# Example with letitbit.net: 'accounts'    => array('user:pass','cookie','prekey=xxxx'),

	'alldebrid.com'		=> array(
								'max_size'	=> 125600,
								'accounts'	=> array("uid=f0716662570312b6524e264b"),
							),
	'real-debrid.com'		=> array(
								'max_size'	=> 125600,
								'accounts'	=> array("auth=EOKBM2YWF2OMBP2PKFFPVSWNDKWUHR4JZYCBNGQ"),
							),
	'premiumize.me'			=> array(
								'max_size'	=> 125600,
								'accounts'	=> array("xss-token=24b5abe26c28807549d94d59fcd15fd1;PHPSESSID=8ssndto8o1h51k624os30h8587;login=342948765%3Awct24xu324gpkhx6;"),
							),						
);
$this->max_size_other_host = 20480000;

?>