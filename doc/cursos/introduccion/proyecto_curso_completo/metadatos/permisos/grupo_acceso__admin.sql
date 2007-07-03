
------------------------------------------------------------
-- apex_usuario_grupo_acc
------------------------------------------------------------
INSERT INTO apex_usuario_grupo_acc (proyecto, usuario_grupo_acc, nombre, nivel_acceso, descripcion, vencimiento, dias, hora_entrada, hora_salida, listar) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	'Administrador', --nombre
	'0', --nivel_acceso
	'Accede a toda la funcionalidad', --descripcion
	NULL, --vencimiento
	NULL, --dias
	NULL, --hora_entrada
	NULL, --hora_salida
	NULL  --listar
);

------------------------------------------------------------
-- apex_usuario_grupo_acc_item
------------------------------------------------------------

--- INICIO Grupo de desarrollo 
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'/inicio'  --item
);
--- FIN Grupo de desarrollo 

--- INICIO Grupo de desarrollo 0
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3374'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3376'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3378'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3379'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3381'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3383'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3385'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3386'  --item
);
INSERT INTO apex_usuario_grupo_acc_item (proyecto, usuario_grupo_acc, item_id, item) VALUES (
	'curso', --proyecto
	'admin', --usuario_grupo_acc
	NULL, --item_id
	'3388'  --item
);
--- FIN Grupo de desarrollo 0