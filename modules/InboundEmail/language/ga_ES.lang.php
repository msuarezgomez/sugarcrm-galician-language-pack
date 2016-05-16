<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the Spanish language pack for the base application.
 * Portions created by Indra
 * All Rights Reserved.
 * Contributor(s): Indra (www.indracompany.com)
 ********************************************************************************/
 
$mod_strings = array (
  'LBL_RE' => 'RE:',
  'ERR_BAD_LOGIN_PASSWORD' => 'Usuario ou contrasinal incorrecta',
  'ERR_BODY_TOO_LONG' => '\\rO texto do corpo é demasiado largo para capturar o email COMPLETO. Truncado.',
  'ERR_INI_ZLIB' => 'Non puido deshabilitarse a compresión Zlib temporalmente.  Pode que "Comprobar Configuración" falle.',
  'ERR_MAILBOX_FAIL' => 'Non se puido recuperar ningunha conta de correo.',
  'ERR_NO_IMAP' => 'Non se atoparon as librerías de IMAP.  Por favor, resolva esto antes de continuar ca configuración de correo entrante',
  'ERR_NO_OPTS_SAVED' => 'Non se gardaron valores óptimos ca sua conta de correo entrante.  Por favor, revise a configuración',
  'ERR_TEST_MAILBOX' => 'Por favor, comprobe a sua configuración e ténteo de novo.',
  'LBL_APPLY_OPTIMUMS' => 'Aplicar Valores Óptimos',
  'LBL_ASSIGN_TO_USER' => 'Asignar a Usuario',
  'LBL_AUTOREPLY_OPTIONS' => 'Opcións de Resposta Automática',
  'LBL_AUTOREPLY' => 'Modelo de Resposta Automática',
  'LBL_AUTOREPLY_HELP' => 'Seleccione unha resposta automática para notificar aos remitentes de correo que a su resposta foi recibida.',
  'LBL_BASIC' => 'Información da Conta de Correo',
  'LBL_CASE_MACRO' => 'Macro de Casos',
  'LBL_CASE_MACRO_DESC' => 'Establece a macro que será analizada e utilizada para vincular o email importado a un Caso.',
  'LBL_CASE_MACRO_DESC2' => 'Estableza ésto a calquera valor que desexe, pero preserve o <b>"%1"</b>.',
  'LBL_CERT_DESC' => 'Forzar a validación do Certificado de Seguridade do servidor - non utilizar en certificados non firmados por unha autoridade raíz recoñecida.',
  'LBL_CERT' => 'Validar Certificado',
  'LBL_CLOSE_POPUP' => 'Pechar Xanela',
  'LBL_CREATE_NEW_GROUP' => '--Crear Grupo ao Gardar--',
  'LBL_CREATE_TEMPLATE' => 'Crear',
  'LBL_SUBSCRIBE_FOLDERS' => 'Suscribirse a Carpetas',
  'LBL_DEFAULT_FROM_ADDR' => 'Por defecto:',
  'LBL_DEFAULT_FROM_NAME' => 'Por defecto:',
  'LBL_DELETE_SEEN' => 'Eliminar Emails Leídos Tras Importación',
  'LBL_EDIT_TEMPLATE' => 'Editar',
  'LBL_EMAIL_OPTIONS' => 'Opcións de Xestión de Correo',
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcións de Xestión de Rebotes',
  'LBL_FILTER_DOMAIN_DESC' => 'Especificar un dominio ao cal non se enviarán respostas automáticas.',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Seleccione esta opción para que se creen automáticamente rexistros de correo en Sugar para todos os correos entrantes.',
  'LBL_POSSIBLE_ACTION_DESC' => 'Para usar a opción Novo Caso, debe seleccionar unha Carpeta de Grupo',
  'LBL_FILTER_DOMAIN' => 'Non enviar Respostas Automáticas a este Dominio',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Buscando variables óptimas de conexión.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Buscar Configuración Óptima',
  'LBL_FIND_SSL_WARN' => '<br>A comprobación de SSL pode durar bastante tempo.  Por favor, teña paciencia.<br>',
  'LBL_FORCE_DESC' => 'Alguns servidores IMAP/POP3 requiren opcións especiais. Marque para forzar unha opción negativa ao conectar (ej., /notls)',
  'LBL_FORCE' => 'Forzar Negativo',
  'LBL_FOUND_MAILBOXES' => 'Encontraronse as seguintes carpetas utilizables.<br>Faga clic nunha para seleccionala:',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Opcións óptimas encontradas.	Presione o seguinte botón para aplicarlas a sua conta de correo.',
  'LBL_FROM_ADDR' => 'Enderezo do remitente',
  'LBL_FROM_ADDR_DESC' => 'O enderezo de correo electrónico posta aquí non aparece no campo &#39;De&#39; enderezo de correo electrónico do remitente debido ás restriccións impostas polo proveedor de servizos de correo electrónico. Nestas circunstancias, o enderezo de correo electrónico que se define é a do servidor de correo saínte que esta configurado.',
  'LBL_FROM_NAME_ADDR' => 'Nome/Correo do Remitente',
  'LBL_FROM_NAME' => 'Nome do remitente',
  'LBL_GROUP_QUEUE' => 'Asignar a Grupo',
  'LBL_HOME' => 'Inicio',
  'LBL_LIST_MAILBOX_TYPE' => 'Utilización de Conta de Correo',
  'LBL_LIST_NAME' => 'Nome:',
  'LBL_LIST_GLOBAL_PERSONAL' => 'Tipo',
  'LBL_LIST_SERVER_URL' => 'Servidor de Correo',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LOGIN' => 'Nome de Usuario',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_SSL_DESC' => 'Usar SSL na conexión. Se non funciona, comprobe que a sua instalación de PHP inclue "--with-imap-ssl" na configuración.',
  'LBL_MAILBOX_SSL' => 'Usar SSL',
  'LBL_MAILBOX_TYPE' => 'Accións Posibles',
  'LBL_DISTRIBUTION_METHOD' => 'Método de Distribución',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Novo Modelo de Resposta Automática para Caso',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Seleccione unha resposta automática para notificar aos remitentes de correo que se creou un novo caso. O correo contén o número de caso na liña de Asunto acorde ca configuración da Macro de Caso.  Esta resposta só se enviará cando se reciba o primeirp correo dun remitente.',
  'LBL_MAILBOX' => 'Carpetas Monitorizadas',
  'LBL_TRASH_FOLDER' => 'Papeleira',
  'LBL_GET_TRASH_FOLDER' => 'Obter Papeleira',
  'LBL_SENT_FOLDER' => 'Elementos Enviados',
  'LBL_GET_SENT_FOLDER' => 'Obter Elementos Eliminados',
  'LBL_SELECT' => 'Seleccionar',
  'LBL_MARK_READ_DESC' => 'Importar e marcar mensaxes como leídos no servidor de correo; non borrar.',
  'LBL_MARK_READ_NO' => 'Email marcado como borrado tras importación',
  'LBL_MARK_READ_YES' => 'Email deixado no servidor tras importación',
  'LBL_MARK_READ' => 'Deixar mensaxes no servidor',
  'LBL_MAX_AUTO_REPLIES' => 'Número de respostas automáticas',
  'LBL_MAX_AUTO_REPLIES_DESC' => 'Establece o máximo número de respostas automáticas a enviar a un único enderezo de correo durante un período de 24 horas.',
  'LBL_PERSONAL_MODULE_NAME' => 'Conta de Correo Persoal',
  'LBL_CREATE_CASE' => 'Crear Caso desde Correo',
  'LBL_CREATE_CASE_HELP' => 'Seleccione esta opción para crear automáticamente rexistros de casos en Sugar a partir de correos entrantes.',
  'LBL_MODULE_NAME' => 'Conta de Correo de Grupo',
  'LBL_BOUNCE_MODULE_NAME' => 'Bandexa de Xestión de Correo Rebotado',
  'LBL_MODULE_TITLE' => 'Correo Entrante',
  'LBL_NAME' => 'Nome',
  'LBL_NONE' => 'Ningún',
  'LBL_NO_OPTIMUMS' => 'Non se encontraron valores óptimos.  Por favor, comprobe a sua configuración e ténteo de novo.',
  'LBL_ONLY_SINCE_DESC' => 'Ao usar POP3, PHP non se poden realizar filtros en mesaxes Novos/Non leídos.  Esta opción permite que se soliciten mensaxes desde a última vez que a bandexa foi consultada.  Esto mellorará significativamente o rendimiento se o seu servidor de correo non soporta IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Non. Comprobar contra todos os correos no servidor de correo.',
  'LBL_ONLY_SINCE_YES' => 'Sí.',
  'LBL_ONLY_SINCE' => 'Importar só desde a última comprobación',
  'LBL_OUTBOUND_SERVER' => 'Servidor de Correo Saínte',
  'LBL_PASSWORD_CHECK' => 'Comprobar Contrasinal',
  'LBL_PASSWORD' => 'Contrasinal',
  'LBL_POP3_SUCCESS' => 'A sua proba de conexión de POP3 tuvo éxito.',
  'LBL_POPUP_FAILURE' => 'Proba de conexión fallida. O erro é o seguinte:',
  'LBL_POPUP_SUCCESS' => 'Proba de conexión exitosa.  A sua configuración funciona.',
  'LBL_POPUP_TITLE' => 'Comprobar Configuración',
  'LBL_GETTING_FOLDERS_LIST' => 'Obtendo Lista de Carpetas',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Seleccionar Carpetas Suscritas',
  'LBL_SELECT_TRASH_FOLDERS' => 'Seleccionar Papeleira',
  'LBL_SELECT_SENT_FOLDERS' => 'Seleccionar Carpeta de Elementos Enviados',
  'LBL_DELETED_FOLDERS_LIST' => 'As seguintes carpetas %s ou non existen ou foran eliminadas do servidor',
  'LBL_PORT' => 'Porto do Servidor de Correo',
  'LBL_QUEUE' => 'Cola da Conta de Correo',
  'LBL_REPLY_NAME_ADDR' => 'Responder a Nome/Correo',
  'LBL_REPLY_TO_NAME' => 'Nome de "Responder A"',
  'LBL_REPLY_TO_ADDR' => 'Enderezo de "Responder A"',
  'LBL_SAME_AS_ABOVE' => 'Usando o mesmo Nome/Enderezo',
  'LBL_SAVE_RAW' => 'Gardar Código Fonte Orixinal',
  'LBL_SAVE_RAW_DESC_1' => 'Seleccione "Sí" se quere preservar o código fonte orixinal para cada email importado.',
  'LBL_SAVE_RAW_DESC_2' => 'Os arquivos adxuntos grandes pueden producir erros en bases de datos configuradas de forma restrinxida ou incorrecta.',
  'LBL_SERVER_OPTIONS' => 'Configuración Avanzada',
  'LBL_SERVER_TYPE' => 'Protocolo do Servidor de Correo',
  'LBL_SERVER_URL' => 'Enderezo do Servidor de Correo',
  'LBL_SSL_DESC' => 'Se o seu servidor de correo soporta conexións seguras de sockets (SSL), habilitar esta opción forzará conexións SSL ao importar o correo.',
  'LBL_ASSIGN_TO_TEAM_DESC' => 'O equipo seleccionado ten acceso á conta de correo.',
  'LBL_SSL' => 'Usar SSL',
  'LBL_STATUS' => 'Estado',
  'LBL_SYSTEM_DEFAULT' => 'Por Defecto no Sistema',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Probar [Alt+T]',
  'LBL_TEST_SETTINGS' => 'Probar Configuración',
  'LBL_TEST_SUCCESSFUL' => 'Conexión completada con éxito.',
  'LBL_TEST_WAIT_MESSAGE' => 'Un momento, por favor...',
  'LBL_TLS_DESC' => 'Usar Transport Layer Security para conectarse ao servidor de correo - só use ésto se o seu servidor de correo soporta este protocolo.',
  'LBL_TLS' => 'Usar TLS',
  'LBL_WARN_IMAP_TITLE' => 'Correo Entrante Deshabilitado',
  'LBL_WARN_IMAP' => 'Avisos:',
  'LBL_WARN_NO_IMAP' => 'O Correo Entrante <b>non pode</b> funcionar sen as librerías de C do cliente de IMAP habilitadas/compiladas no módulo de PHP.  Por favor, contacte co seu administrador para resolver este problema.',
  'LNK_CREATE_GROUP' => 'Crear Novo Grupo',
  'LNK_LIST_CREATE_NEW_GROUP' => 'Nova Conta de Correo de Grupo',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nova Conta de Xestión de Rebotes',
  'LNK_LIST_MAILBOXES' => 'Todas as Contas de Correo',
  'LNK_LIST_QUEUES' => 'Todas as Colas',
  'LNK_LIST_SCHEDULER' => 'Planificadores',
  'LNK_LIST_TEST_IMPORT' => 'Probar Importación de Correo',
  'LNK_NEW_QUEUES' => 'Crear Nova Cola',
  'LNK_SEED_QUEUES' => 'Crear Cabeza de Serie para Colas de Equipos',
  'LBL_IS_PERSONAL' => 'persoal',
  'LBL_GROUPFOLDER_ID' => 'Id de Carpeta de Grupo',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Asignar a Carpeta de Grupo',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir que os usuarios envíen correo usando o Nome e o Enderezo do campo "De" como enderezo de resposta',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Cando se selecciona esta opción, o Nome e Enderezo do remitente asociados á conta de correo deste grupo aparecerán coma unha opción para o campo "De" ao escribir un correo para os usuarios que teñan acceso á conta de correo do grupo.',
  'LBL_STATUS_ACTIVE' => 'Activo',
  'LBL_STATUS_INACTIVE' => 'Inactivo',
  'LBL_IS_GROUP' => 'grupo',
  'LBL_ENABLE_AUTO_IMPORT' => 'Importar Correos Automáticamente',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Aviso: Está modificando a sua configuración de importación automática o cal pode provocar pérdida de datos.',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Aviso: A importación automática debe estar habilitada para a creación automática de casos.',
  'LBL_EDIT_LAYOUT' => 'Editar deseño',
);