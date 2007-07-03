<?php

class toba_ei_formulario_def extends toba_ei_def
{
	static function get_estructura()
	{
		$estructura = parent::get_estructura();
		$estructura[] = array( 	'tabla' => 'apex_objeto_ut_formulario',
								'registros' => '1',
								'obligatorio' => false );
		$estructura[] = array( 	'tabla' => 'apex_objeto_ei_formulario_ef',
								'registros' => 'n',
								'obligatorio' => false );
		return $estructura;		
	}

	static function get_vista_extendida($proyecto, $componente=null)
	{
		$sql = parent::get_vista_extendida($proyecto, $componente);
		//Formulario
		$sql["_info_formulario"]['sql'] = "SELECT	auto_reset as	auto_reset,						
										ancho 						as ancho,
										ancho_etiqueta				as ancho_etiqueta
								FROM	apex_objeto_ut_formulario
								WHERE	objeto_ut_formulario_proyecto='$proyecto'";
		if ( isset($componente) ) {
			$sql['_info_formulario']['sql'] .= "	AND		objeto_ut_formulario='$componente' ";	
		}
		$sql['_info_formulario']['sql'] .= ";";
		$sql['_info_formulario']['registros']='1';
		$sql['_info_formulario']['obligatorio']=true;
		//EF
		$sql["_info_formulario_ef"]['sql'] = "SELECT	*
								FROM	apex_objeto_ei_formulario_ef
								WHERE	objeto_ei_formulario_proyecto='$proyecto'";
		if ( isset($componente) ) {
			$sql['_info_formulario_ef']['sql'] .= "	AND		objeto_ei_formulario='$componente' ";	
		}
		$sql['_info_formulario_ef']['sql'] .= " AND	(desactivado=0	OR	desactivado	IS	NULL)
								ORDER	BY	orden;";
		$sql['_info_formulario_ef']['registros']='n';
		$sql['_info_formulario_ef']['obligatorio']=true;
		return $sql;
	}
}
?>