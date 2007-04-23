<?php

class toba_mc_comp__1553
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'toba_editor',
    'objeto' => 1553,
    'anterior' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'objeto_datos_tabla',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'ITEM - BASE',
    'titulo' => NULL,
    'colapsable' => NULL,
    'descripcion' => NULL,
    'fuente_proyecto' => 'toba_editor',
    'fuente' => 'instancia',
    'solicitud_registrar' => NULL,
    'solicitud_obj_obs_tipo' => NULL,
    'solicitud_obj_observacion' => NULL,
    'parametro_a' => NULL,
    'parametro_b' => NULL,
    'parametro_c' => NULL,
    'parametro_d' => NULL,
    'parametro_e' => NULL,
    'parametro_f' => NULL,
    'usuario' => NULL,
    'creacion' => '2005-09-06 16:20:26',
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '/admin/objetos_toba/editores/db_registros',
    'clase_archivo' => 'nucleo/componentes/persistencia/toba_datos_tabla.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '/admin/objetos_toba/editores/db_registros',
    'clase_icono' => 'objetos/datos_tabla.gif',
    'clase_descripcion_corta' => 'datos_tabla',
    'clase_instanciador_proyecto' => NULL,
    'clase_instanciador_item' => NULL,
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'cant_dependencias' => '0',
  ),
  '_info_estructura' => 
  array (
    'tabla' => 'apex_item',
    'alias' => NULL,
    'min_registros' => NULL,
    'max_registros' => NULL,
    'ap' => 1,
    'ap_sub_clase' => NULL,
    'ap_sub_clase_archivo' => NULL,
    'ap_modificar_claves' => 0,
    'ap_clase' => 'ap_tabla_db_s',
    'ap_clase_archivo' => 'nucleo/componentes/persistencia/toba_ap_tabla_db_s.php',
  ),
  '_info_columnas' => 
  array (
    0 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 229,
      'columna' => 'proyecto',
      'tipo' => 'C',
      'pk' => 1,
      'secuencia' => NULL,
      'largo' => 15,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    1 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 230,
      'columna' => 'item',
      'tipo' => 'C',
      'pk' => 1,
      'secuencia' => 'apex_item_seq',
      'largo' => 60,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    2 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 231,
      'columna' => 'padre_id',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    3 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 232,
      'columna' => 'padre_proyecto',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 15,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    4 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 233,
      'columna' => 'padre',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 60,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    5 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 234,
      'columna' => 'carpeta',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    6 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 235,
      'columna' => 'nivel_acceso',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    7 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 236,
      'columna' => 'solicitud_tipo',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 20,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    8 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 237,
      'columna' => 'pagina_tipo_proyecto',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 15,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    9 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 238,
      'columna' => 'pagina_tipo',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 20,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    10 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 239,
      'columna' => 'nombre',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 80,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    11 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 240,
      'columna' => 'descripcion',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 255,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    12 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 241,
      'columna' => 'actividad_buffer_proyecto',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 15,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    13 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 242,
      'columna' => 'actividad_buffer',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    14 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 243,
      'columna' => 'actividad_patron_proyecto',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 15,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    15 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 244,
      'columna' => 'actividad_patron',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 20,
      'no_nulo' => NULL,
      'no_nulo_db' => 1,
      'externa' => 0,
    ),
    16 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 245,
      'columna' => 'actividad_accion',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 80,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    17 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 246,
      'columna' => 'menu',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    18 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 247,
      'columna' => 'orden',
      'tipo' => 'N',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    19 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 248,
      'columna' => 'solicitud_registrar',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    20 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 249,
      'columna' => 'solicitud_obs_tipo_proyecto',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 15,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    21 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 250,
      'columna' => 'solicitud_obs_tipo',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 20,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    22 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 251,
      'columna' => 'solicitud_observacion',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 90,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    23 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 252,
      'columna' => 'solicitud_registrar_cron',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    24 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 253,
      'columna' => 'prueba_directorios',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    25 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 254,
      'columna' => 'zona_proyecto',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 15,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    26 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 255,
      'columna' => 'zona',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 20,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    27 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 256,
      'columna' => 'zona_orden',
      'tipo' => 'N',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    28 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 257,
      'columna' => 'zona_listar',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    29 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 258,
      'columna' => 'imagen_recurso_origen',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 10,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    30 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 259,
      'columna' => 'imagen',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 60,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    31 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 260,
      'columna' => 'parametro_a',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 100,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    32 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 261,
      'columna' => 'parametro_b',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 100,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    33 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 262,
      'columna' => 'parametro_c',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 100,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    34 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 263,
      'columna' => 'publico',
      'tipo' => 'E',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    35 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 264,
      'columna' => 'usuario',
      'tipo' => 'C',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => 20,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    36 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 265,
      'columna' => 'creacion',
      'tipo' => 'T',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
    37 => 
    array (
      'objeto_proyecto' => 'toba_editor',
      'objeto' => 1553,
      'col_id' => 460,
      'columna' => 'redirecciona',
      'tipo' => 'N',
      'pk' => 0,
      'secuencia' => NULL,
      'largo' => NULL,
      'no_nulo' => NULL,
      'no_nulo_db' => 0,
      'externa' => 0,
    ),
  ),
  '_info_externas' => 
  array (
  ),
  '_info_externas_col' => 
  array (
  ),
);
	}

}

?>