<?php
$nowamagic = 10;
xdebug_debug_zval('nowamagic');  //refcount=1, is_ref=0
$o_o  = &$nowamagic;
xdebug_debug_zval('nowamagic');  //refcount=2, is_ref=1
unset($o_o);
xdebug_debug_zval('nowamagic');  //refcount=1, is_ref=0
echo $nowamagic;