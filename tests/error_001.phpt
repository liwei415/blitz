--TEST--
broken templates 001 
--FILE--
<?php

include('common.inc');
$T = new Blitz('error_001.tpl');

var_dump($T);

echo "Done\n";
?>
--EXPECTF--	
Warning: blitz::blitz(): SYNTAX ERROR: invalid method call (%serror_001.tpl: line 1, pos 1) in %s on line %d

Warning: blitz::blitz(): SYNTAX ERROR: invalid method call (%serror_001.tpl: line 2, pos 3) in %s on line %d

Warning: blitz::blitz(): SYNTAX ERROR: invalid method call (%serror_001.tpl: line 3, pos 3) in %s on line %d
object(blitz)#%d (1) {
  ["tpl"]=>
  resource(%d) of type (Blitz template)
}
Done