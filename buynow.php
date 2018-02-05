<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Buy Now</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.26" />
</head>

<body>
	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PSR52Z84PGP4E">
<input type="image" src="https://www.sandbox.paypal.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

<?php
$paypal_redirect = 'https://www.sandbox.paypal.com/cgi-bin/webscr/?';
$paypal_args = array(
			'business'      => 'chetanshinde685-facilitator@gmail.com',
			'email'         => 'poojamsh258@gmail.com',
			'item_number'   => 1,
			'item_name'     => 'Book',
			'no_shipping'   => '1',
			'shipping'      => '0',
			'no_note'       => '1',
			'currency_code' => 'USD',
			'charset'       => 'utf-8',
			'custom'        => 5,
			'rm'            => '2',
			'return'        => 'https://guarded-tor-23810.herokuapp.com/thankyou.php',
			'cancel_return' => 'https://guarded-tor-23810.herokuapp.com/thankyou.php',
			'notify_url'    => 'https://guarded-tor-23810.herokuapp.com/ipnlistner.php',
			'tax'           => 0,
			'bn'            => 'EasyDigitalDownloads_SP',
			'cmd'           => '_xclick',
			'amount'        => 10
	 	);

    $paypal_redirect .= http_build_query( $paypal_args );

    $paypal_redirect = str_replace( '&amp;', '&', $paypal_redirect );

    header( 'Location: ' . $paypal_redirect );
    exit;
?>
</body>

</html>