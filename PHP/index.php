<?php
/**
 * @version 0.1.0
 * @license MIT license
 * @link    http://ibtci.github.io/
 * @author  chagry
 * @package Example index.php
 */

/*
 * Import lib.
 */
require_once 'jsonRPC2Client.php';

// Execute code.
try {

    // Init API.
	$call = new jsonRPC2Client("https://ibtc.cash/api/");
    
    // Call API.
    $rep = $call->pay_info('1M1L7b4tdrY95wYbfqVAhwYEw214WHyB9H');

// If error.
} catch (Exception $e) {

    // print error
    print_r($e->getMessage());
    
    // Or init error.
    //throw new Exception($e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
	<body>
		<pre>
			<code>
				<?php print_r($rep); ?>
			</code>
		</pre>
	</body>
</html>