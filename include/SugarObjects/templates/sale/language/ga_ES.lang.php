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
  'LBL_MODULE_NAME' => 'Vendas',
  'LBL_MODULE_TITLE' => 'Vendas: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Busca de Vendas',
  'LBL_VIEW_FORM_TITLE' => 'Vista de Vendas',
  'LBL_LIST_FORM_TITLE' => 'Lista de Vendas',
  'LBL_SALE_NAME' => 'Nome de Venda:',
  'LBL_SALE' => 'Venda:',
  'LBL_NAME' => 'Nome de Venda',
  'LBL_LIST_SALE_NAME' => 'Nome',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome de Conta',
  'LBL_LIST_AMOUNT' => 'Cantidade',
  'LBL_LIST_DATE_CLOSED' => 'Peche',
  'LBL_LIST_SALE_STAGE' => 'Etapa de Vendas',
  'LBL_ACCOUNT_ID' => 'ID de Conta',
  'LBL_CURRENCY_ID' => 'ID de Moeda',
  'db_sales_stage' => NULL,
  'db_name' => NULL,
  'db_amount' => NULL,
  'db_date_closed' => NULL,
  'UPDATE' => 'Venda - Actualización de Moeda',
  'UPDATE_DOLLARAMOUNTS' => 'Actualizar Cantidades en Dólares EEUU',
  'UPDATE_VERIFY' => 'Verificar Cantidades',
  'UPDATE_VERIFY_TXT' => 'Verifica que os valores das cantidades nas vendas son números decimais válidos con só caracteres numéricos (0-9) e decimais(.)',
  'UPDATE_FIX' => 'Correxir Cantidades',
  'UPDATE_FIX_TXT' => 'Tenta correxir calquera cantidade non válida creando un número decimal válido a partir da cantidade actual. Antes realiza unha copia de seguridade de todas as cantidades modificadas no campo de base de datos amount_backup. Se tras a correción detecta problemas, non volva realizar esta operación sen restaurar os valores previos desde a copia de seguridade xa que se non sobrescribirá a copia de seguridade con novos datos non válidos.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualiza as cantidades en Dólares EEUU para as vendas baseadas no conxunto actual de cambios de moeda. Este valor úsase para calcular gráficas e vistas de listas de cantidades monetarias.',
  'UPDATE_CREATE_CURRENCY' => 'Creando Nova Moeda:',
  'UPDATE_VERIFY_FAIL' => 'Fallo de Verificación de Rexistro:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Moeda Actual:',
  'UPDATE_VERIFY_FIX' => 'A Corrección daría',
  'UPDATE_INCLUDE_CLOSE' => 'Rexistros Pechados Incluidos',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nova Cantidade:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova Moeda:',
  'UPDATE_DONE' => 'Feito',
  'UPDATE_BUG_COUNT' => 'Problemas Detectados cuxa Resolución se Tentou:',
  'UPDATE_BUGFOUND_COUNT' => 'Problemas Detectados:',
  'UPDATE_COUNT' => 'Rexistros Actualizados:',
  'UPDATE_RESTORE_COUNT' => 'Rexistros con Cantidades Restauradas:',
  'UPDATE_RESTORE' => 'Restaurar Cantidades',
  'UPDATE_RESTORE_TXT' => 'Restaura os valores das cantidades desde a copia de seguridade creada durante a corrección.',
  'UPDATE_FAIL' => 'Non puido actualizarse -',
  'UPDATE_NULL_VALUE' => 'A cantidade é NULL, establecendoa a 0 -',
  'UPDATE_MERGE' => 'Unificar Moedas',
  'UPDATE_MERGE_TXT' => 'Unifica múltiples moedas nunha única moeda. Se detecta que hai múltiples rexistros de tipo moeda para a mesma moeda, pode unificalas. Isto tamén unificará as moedas para o resto de módulos.',
  'LBL_ACCOUNT_NAME' => 'Nome de Conta:',
  'LBL_AMOUNT' => 'Cantidade:',
  'LBL_AMOUNT_USDOLLAR' => 'Cantidade en Dólares EEUU:',
  'LBL_CURRENCY' => 'Moeda:',
  'LBL_DATE_CLOSED' => 'Data de Peche Prevista:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campaña:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciais',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proxectos',
  'LBL_NEXT_STEP' => 'Próximo Paso:',
  'LBL_LEAD_SOURCE' => 'Toma de Contacto:',
  'LBL_SALES_STAGE' => 'Etapa de Vendas:',
  'LBL_PROBABILITY' => 'Probabilidade (%):',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DUPLICATE' => 'Posible Venda Duplicada',
  'MSG_DUPLICATE' => 'O rexistro para a venda que vai crear podería ser un duplicado doutro rexistro de venda existente. Os rexistros de venda con nomes similares se listan a continuación.<br>Faga clic en Gardar para continuar coa creación desta venda, ou en Cancelar para volver ao módulo sen crear a venda.',
  'LBL_NEW_FORM_TITLE' => 'Nova Venda',
  'LNK_NEW_SALE' => 'Nova Venda',
  'LNK_SALE_LIST' => 'Venda',
  'ERR_DELETE_RECORD' => 'Debe de especificar un número de rexistro para eliminar a venda.',
  'LBL_TOP_SALES' => 'As miñas Principais Vendas Abertas',
  'NTC_REMOVE_OPP_CONFIRMATION' => '¿Está seguro de que desexa eliminar este contacto da venda?',
  'SALE_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de que desexa eliminar esta venda do proxecto?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Venda',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
  'LBL_RAW_AMOUNT' => 'Importe Bruto',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_ASSIGNED_TO_NAME' => 'Usuario:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_MY_CLOSED_SALES' => 'As Miñas Vendas Pechadas',
  'LBL_TOTAL_SALES' => 'Vendas Totais',
  'LBL_CLOSED_WON_SALES' => 'Vendas Gañadas',
  'LBL_ASSIGNED_TO_ID' => 'Asignada a ID',
  'LBL_CREATED_ID' => 'Creada por ID',
  'LBL_MODIFIED_ID' => 'Modificada por ID',
  'LBL_MODIFIED_NAME' => 'Modificada por Usuario',
  'LBL_SALE_INFORMATION' => 'Información sobre a Venda',
  'LBL_CURRENCY_NAME' => 'Nome de Moeda',
  'LBL_CURRENCY_SYMBOL' => 'Símbolo de Moeda',
  'LBL_EDIT_BUTTON' => 'Editar',
  'LBL_REMOVE' => 'Quitar',
);