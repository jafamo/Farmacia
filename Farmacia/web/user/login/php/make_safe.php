<?php 
/*
 * Program:	make_safe($variable);
 *
 * Desc:	Variables secure and block attack sql injection.
 *		
 * Use:		$miVarFormulario = make_safe($_POST['usuario']);
 *		
 */
function make_safe($variable){

$variable = addslashes(trim($variable));

return $variable;

}

?>
