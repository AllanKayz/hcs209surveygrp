<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CURRENCY CONVERTER</title>
</head>

<body>
	<?php                
        $amount_input = filter_input(INPUT_POST, 'amount_input');
        $currency1 = filter_input(INPUT_POST, 'currency1');
        $currency2 = filter_input(INPUT_POST, 'currency2');

        $currencies = array();
        $currencies['USD'] = array(
				'ZAR' => 14.3377,
                'BWP' => 10.8450,
                'ZMW' => 9.83999,
                'TZS' => 2.189,
				'USD' => 1
        );

        $amount_output = $amount_input*$currencies[$currency1][$currency2];
		echo $amount_input." USD = ".$amount_output." ".$currency2;
	?> 
</body>
</html>