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
  'LBL_OOTB_WORKFLOW' => 'Procesar Tarefas de Workflow',
  'LBL_OOTB_REPORTS' => 'Executar Tarefas Programadas de Xeración de Informes',
  'LBL_OOTB_IE' => 'Comprobar Bandexas de Entrada',
  'LBL_OOTB_BOUNCE' => 'Executar Proceso Nocturno de Emails de Campaña Rebotados',
  'LBL_OOTB_CAMPAIGN' => 'Executar Proceso Nocturno de Campañas de Email Masivo',
  'LBL_OOTB_PRUNE' => 'Truncar Base de datos ao Inicio do Mes',
  'LBL_OOTB_TRACKER' => 'Truncar Táboas de Monitorización',
  'LBL_OOTB_SUGARFEEDS' => 'Modelar Táboas de SugarFeed',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualizar Táboa tracker_sessions',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executar Envío de Emails de Recordatorios',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar Cola de Traballos',
  'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Extracción de documentos do sistema de arquivos',
  'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
  'LBL_LIST_LIST_ORDER' => 'Planificadores:',
  'LBL_LIST_NAME' => 'Planificador:',
  'LBL_LIST_RANGE' => 'Rango:',
  'LBL_LIST_REMOVE' => 'Quitar:',
  'LBL_LIST_STATUS' => 'Estado:',
  'LBL_LIST_TITLE' => 'Lista de Planificación:',
  'LBL_LIST_EXECUTE_TIME' => 'Será executado en:',
  'LBL_SUN' => 'Domingo',
  'LBL_MON' => 'Luns',
  'LBL_TUE' => 'Martes',
  'LBL_WED' => 'Mércoles',
  'LBL_THU' => 'Xoves',
  'LBL_FRI' => 'Venres',
  'LBL_SAT' => 'Sábado',
  'LBL_ALL' => 'Todos os días',
  'LBL_EVERY_DAY' => 'Todos os días',
  'LBL_AT_THE' => 'O',
  'LBL_EVERY' => 'Cada',
  'LBL_FROM' => 'Desde',
  'LBL_ON_THE' => 'No',
  'LBL_RANGE' => 'a',
  'LBL_AT' => 'en',
  'LBL_IN' => 'en',
  'LBL_AND' => 'e',
  'LBL_MINUTES' => 'minutos',
  'LBL_HOUR' => 'horas',
  'LBL_HOUR_SING' => 'hora',
  'LBL_MONTH' => 'mes',
  'LBL_OFTEN' => 'Tan a miúdo como sexa posible.',
  'LBL_MIN_MARK' => 'marca por minuto',
  'LBL_MINS' => 'min',
  'LBL_HOURS' => 'hrs',
  'LBL_DAY_OF_MONTH' => 'data',
  'LBL_MONTHS' => 'me',
  'LBL_DAY_OF_WEEK' => 'día',
  'LBL_CRONTAB_EXAMPLES' => 'O arriba mostrado utiliza notación estándar de crontab.',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'As especificacións do cron para que se execute é sobre a base da zona horaria do servidor (',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Por favor, especifique o tempo de execución do planificador en consecuencia.',
  'LBL_ALWAYS' => 'Sempre',
  'LBL_CATCH_UP' => 'Executar Se Falla',
  'LBL_CATCH_UP_WARNING' => 'Desmarque se a execución desta tarefa pode durar máis dun momento.',
  'LBL_DATE_TIME_END' => 'Data e Hora de Fin',
  'LBL_DATE_TIME_START' => 'Data e Hora de Inicio',
  'LBL_INTERVAL' => 'Intervalo',
  'LBL_JOB' => 'Tarefa',
  'LBL_JOB_URL' => 'URL da tarefa',
  'LBL_LAST_RUN' => 'Última Esecución Exitosa',
  'LBL_MODULE_NAME' => 'Planificador Sugar',
  'LBL_MODULE_TITLE' => 'Planificadores',
  'LBL_NAME' => 'Nome de Tarefa',
  'LBL_NEVER' => 'Nunca',
  'LBL_NEW_FORM_TITLE' => 'Nova Planificación',
  'LBL_PERENNIAL' => 'continuo',
  'LBL_SEARCH_FORM_TITLE' => 'Búsca de Planificación',
  'LBL_SCHEDULER' => 'Planificador:',
  'LBL_STATUS' => 'Estado',
  'LBL_TIME_FROM' => 'Activo Desde',
  'LBL_TIME_TO' => 'Activo Ata',
  'LBL_WARN_CURL_TITLE' => 'Aviso cURL:',
  'LBL_WARN_CURL' => 'Aviso:',
  'LBL_WARN_NO_CURL' => 'Este sistema non ten as librerías cURL habilitadas/compiladas no módulo de PHP (--with-curl=/ruta/a/libreria_curl).  Por favor, contacte co seu administrador para resolver o problema.  Sen a funcionalidade que provee cURL, o Planificador non pode utilizar fíos cas suas tarefas.',
  'LBL_BASIC_OPTIONS' => 'Configuración Básica',
  'LBL_ADV_OPTIONS' => 'Opcións Avanzadas',
  'LBL_TOGGLE_ADV' => 'Mostrar Opcións Avanzadas',
  'LBL_TOGGLE_BASIC' => 'Mostrar Opcións Básicas',
  'LNK_LIST_SCHEDULER' => 'Planificadores',
  'LNK_NEW_SCHEDULER' => 'Novo Planificador',
  'LNK_LIST_SCHEDULED' => 'Tarefas Planificadas',
  'SOCK_GREETING' => 'Este é o interfaz de usuario para o Servizo de Planificación de SugarCRM. <br />[ Comandos de demonio disponibeis: start|restart|shutdown|status ]<br />Para saír, teclee &#39;quit&#39;.  Para deter o servizo &#39;shutdown&#39;.',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de rexistro para eliminar a planificación.',
  'ERR_CRON_SYNTAX' => 'Sintaxis de Cron inválida',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desexa eliminar este rexistro?',
  'NTC_STATUS' => 'Estableza o estado a Inactivo para quitar esta planificación das listas despregables de selección de Planificador',
  'NTC_LIST_ORDER' => 'Estableza a orde en que esta planificación aparecerá nas listas despregables de selección de Planificador',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar o Planificador de Windows',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar Crontab',
  'LBL_CRON_LINUX_DESC' => 'Nota: Para executar os Planificadores de Sugar, añada a seguinte liña a o seu arquivo crontab:',
  'LBL_CRON_WINDOWS_DESC' => 'Nota: Para executar os planificadores de Sugar, cree un arquivo de proceso por lotes a executar utilizando as Tarefas Programadas de Windows. O arquivo de proceso por lotes debería conter os seguientes comandos:',
  'LBL_NO_PHP_CLI' => 'Se o seu servidor non ten dispoñibles os binarios PHP, pode utilizar wget o curl para lanzar as suas Tarefas.<br>para wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose http://translate.sugarcrm.com/soon/latest/cron.php > /dev/null 2>&1</b><br>para curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent http://translate.sugarcrm.com/soon/latest/cron.php > /dev/null 2>&1',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Rexistro de Tarefas',
  'LBL_EXECUTE_TIME' => 'Tempo de Execución',
  'LBL_REFRESHJOBS' => 'Actualizar Traballos',
  'LBL_POLLMONITOREDINBOXES' => 'Comprobar Contas de Correo Entrante',
  'LBL_PERFORMFULLFTSINDEX' => 'Busca de texto completo Sistema de Índice',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar Campañas de Correo Masivo Nocturnas',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar Proceso Nocturno de Correos Rebotados en Campañas',
  'LBL_PRUNEDATABASE' => 'Truncar Base de Datos o 1º de cada Mes',
  'LBL_TRIMTRACKER' => 'Truncar Táboas de Monitorización',
  'LBL_TRIMSUGARFEEDS' => 'Modelar Táboas de SugarFeed',
  'LBL_SENDEMAILREMINDERS' => 'Executar recordatorios por correo electrónico',
  'LBL_CLEANJOBQUEUE' => 'Liberador da Cola de Traballos',
  'LBL_REMOVEDOCUMENTSFROMFS' => 'Extracción de documentos do sistema de arquivos',
);