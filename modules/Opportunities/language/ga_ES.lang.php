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
  'LBL_ID' => 'ID',
  'LBL_DATE_ENTERED' => 'Data de Creación',
  'LBL_DATE_MODIFIED' => 'Última Modificación',
  'LBL_MODIFIED' => 'Modificado Por',
  'LBL_MODIFIED_ID' => 'Modificada por ID',
  'LBL_MODIFIED_NAME' => 'Modificada por Usuario',
  'LBL_CREATED' => 'Creado Por',
  'LBL_CREATED_ID' => 'Creada por ID',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DELETED' => 'Eliminado',
  'LBL_NAME' => 'Nome Oportunidade',
  'LBL_CREATED_USER' => 'Usuario Creado',
  'LBL_MODIFIED_USER' => 'Usuario Modificado',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_EDIT_BUTTON' => 'Editar',
  'LBL_REMOVE' => 'Quitar',
  'LBL_ASSIGNED_TO_ID' => 'Usuario Asignado:',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
  'LBL_MODULE_NAME' => 'Oportunidades',
  'LBL_MODULE_TITLE' => 'Oportunidades: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Busca de Oportunidades',
  'LBL_VIEW_FORM_TITLE' => 'Vista de Oportunidades',
  'LBL_LIST_FORM_TITLE' => 'Lista de Oportunidades',
  'LBL_OPPORTUNITY_NAME' => 'Nome Oportunidade:',
  'LBL_OPPORTUNITY' => 'Oportunidade:',
  'LBL_INVITEE' => 'Contactos',
  'LBL_CURRENCIES' => 'Moedas',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Nome',
  'LBL_LIST_ACCOUNT_NAME' => 'Conta',
  'LBL_LIST_AMOUNT' => 'Cantidade da Oportunidade',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Cantidade',
  'LBL_LIST_DATE_CLOSED' => 'Data Peche',
  'LBL_LIST_SALES_STAGE' => 'Etapa de Vendas',
  'LBL_ACCOUNT_ID' => 'ID de Conta',
  'LBL_CURRENCY_ID' => 'ID de Moeda',
  'LBL_CURRENCY_NAME' => 'Nome de Moeda',
  'LBL_CURRENCY_SYMBOL' => 'Símbolo de Moeda',
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
  'UPDATE' => 'Oportunidad - Actualizar Moeda',
  'UPDATE_DOLLARAMOUNTS' => 'Actualizar Cantidades en Dólares EEUU',
  'UPDATE_VERIFY' => 'Verificar Cantidades',
  'UPDATE_VERIFY_TXT' => 'Verifica que os valores das cantidades nas oportunidades son números decimais válidos con só caracteres numéricos (0-9) e decimais(.)',
  'UPDATE_FIX' => 'Correxir Cantidades',
  'UPDATE_FIX_TXT' => 'Intenta correxir calquera cantidade non válida creando un número decimal válido a partir da cantidade actual. Antes realiza unha copia de seguridade de todas as cantidades modificadas no campo de base de datos amount_backup. Se tras a correción detecta problemas, non volva a realizar esta operación sen restaurar os valores previos desde a copia de seguridade xa que se non sobrescribirá a copia de seguridade con novos datos non válidos.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualiza as cantidades en Dólares EEUU para as oportunidades basadas no conxunto actual de cambios de moeda. Este valor usase para calcular gráficas e vistas de listas de cantidades monetarias.',
  'UPDATE_CREATE_CURRENCY' => 'Creación de nova moeda:',
  'UPDATE_VERIFY_FAIL' => 'Fallo de verificación de rexistro:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Cantidade actual:',
  'UPDATE_VERIFY_FIX' => 'A corrección daría',
  'UPDATE_INCLUDE_CLOSE' => 'Rexistros pechados incluidos',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nova cantidade:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova moeda:',
  'UPDATE_DONE' => 'Feito',
  'UPDATE_BUG_COUNT' => 'Problemas detectados cuxa resolución se tentou:',
  'UPDATE_BUGFOUND_COUNT' => 'Problemas detectados:',
  'UPDATE_COUNT' => 'Rexistros actualizados:',
  'UPDATE_RESTORE_COUNT' => 'Rexistros con cantidades restauradas:',
  'UPDATE_RESTORE' => 'Restaurar Cantidades',
  'UPDATE_RESTORE_TXT' => 'Restaura os valores das cantidades desde a copia de seguridade creada durante a corrección.',
  'UPDATE_FAIL' => 'Non se puido actualizar -',
  'UPDATE_NULL_VALUE' => 'A cantidade é NULL, establecéndoa a 0 -',
  'UPDATE_MERGE' => 'Unificar Moedas',
  'UPDATE_MERGE_TXT' => 'Unifica múltiples moedas en unha única moeda. Se detecta que hai múltiples rexistros de tipo moeeda para a mesma moeda, pode unificalas. Esto tamén unificará as moedas para o resto de módulos.',
  'LBL_ACCOUNT_NAME' => 'Conta:',
  'LBL_AMOUNT' => 'Cantidade da Oportunidade:',
  'LBL_AMOUNT_USDOLLAR' => 'Cantidade:',
  'LBL_CURRENCY' => 'Monda:',
  'LBL_DATE_CLOSED' => 'Data de Peche:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campaña:',
  'LBL_NEXT_STEP' => 'Próximo Paso:',
  'LBL_LEAD_SOURCE' => 'Toma de Contacto:',
  'LBL_SALES_STAGE' => 'Etapa de Vendas:',
  'LBL_PROBABILITY' => 'Probabilidade (%):',
  'LBL_DUPLICATE' => 'Posible oportunidade duplicada',
  'MSG_DUPLICATE' => 'O resistro para a oportunidad que vai a crear podería ser un duplicado de outro rexistro de oportunidade existente. Os rexistros de oportunidade con nomes similares listanse a continuación.<br>Faga clic en Gardar para continuar ca creación desta oportunidade, ou en Cancelar para volver ao módulo sen crear a oportunidade.',
  'LBL_NEW_FORM_TITLE' => 'Nova Oportunidade',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_OPPORTUNITY_LIST' => 'Ver Oportunidades',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de rexistro a eliminar.',
  'LBL_TOP_OPPORTUNITIES' => 'As Miñas Principais Oportunidades',
  'NTC_REMOVE_OPP_CONFIRMATION' => '¿Está seguro de que desexa eliminar este contacto da oportunidade?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de que desexa eliminar esta oportunidade do proxecto?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
  'LBL_RAW_AMOUNT' => 'Importe Bruto',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciais',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proxectos',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'As Miñas Oportunidades Pechadas',
  'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades Totais',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades Gañadas',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Campañas',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Proxectos',
  'LABEL_PANEL_ASSIGNMENT' => 'Asignación',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importar Oportunidades',
  'LBL_EDITLAYOUT' => 'Editar deseño',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Id de campaña',
  'LBL_OPPORTUNITY_TYPE' => 'Tipo de oportunidade',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Usuario asignado',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Usuario asignado',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificador por ID',
  'LBL_EXPORT_CREATED_BY' => 'Creado por ID',
  'LBL_EXPORT_NAME' => 'Nome',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Emails de contactos relacionados',
);