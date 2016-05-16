<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
* The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings= array (
'LBL_BASIC_SEARCH'                                 => 'Busca básica',
'LBL_ADVANCED_SEARCH'                              => 'Búsqueda Avanzada',
'LBL_BASIC_TYPE'                                   => 'Tipo básico',
'LBL_ADVANCED_TYPE'                                => 'Tipo avanzado',
'LBL_SYSOPTS_1'                                    => 'Seleccione unha das seguintes opcións de configuración do sistema a continuación.',
'LBL_SYSOPTS_2'                                    => '¿Qué tipo de base de datos se utilizará para a instancia de Sugar que vai a instalar?',
'LBL_SYSOPTS_CONFIG'                               => 'Configuración do sistema',
'LBL_SYSOPTS_DB_TYPE'                              => ' ',
'LBL_SYSOPTS_DB'                                   => 'Especificar o tipo de base de datos',
'LBL_SYSOPTS_DB_TITLE'                             => 'Tipo de base de datos',
'LBL_SYSOPTS_ERRS_TITLE'                           => 'Por favor, corrixa os erros seguintes antes de continuar:',
'LBL_MAKE_DIRECTORY_WRITABLE'                      => 'Por favor, habilite a escritura do seguinte directorio :',
'ERR_DB_VERSION_FAILURE'                           => 'Non se pode comprobar a versión de base de datos.',
'DEFAULT_CHARSET'                                  => 'UTF-8',
'ERR_ADMIN_USER_NAME_BLANK'                        => 'Proporcione o nome de usuario para o usuario administrador de Sugar.',
'ERR_ADMIN_PASS_BLANK'                             => 'Proporcione o contrasinal para o usuario admin de Sugar.',
'ERR_CHECKSYS'                                     => 'Detectaronse erros durante a proba de compatibilidade. Para que a sua instalación de SugarCRM funcione correctamente, por favor, tome as medidas adecuadas para hacer frente ás cuestións que se enumeran a continuación e pulse o botón volver a revisar, ou trate de instalar de novo.',
'ERR_CHECKSYS_CALL_TIME'                           => 'Permitir chamadas Time Reference Pass está ON (esto debe poñerse en Off en php.ini)',
'ERR_CHECKSYS_CURL'                                => 'Non se encontrou: Sugar Scheduler executarase con funcionalidade limitada.',
'ERR_CHECKSYS_FASTCGI_LOGGING'                     => 'Para unha experiencia óptima utilizando IIS / FastCGI SAPI, creado fastcgi.logging a 0 no arquivo php.ini.',
'ERR_CHECKSYS_IMAP'                                => 'Non encontrado: InboundEmail e Campañas (Correo eleectrónico) require as bibliotecas IMAP. Tampoucoo será funcional.',
'ERR_CHECKSYS_MSSQL_MQGPC'                         => 'Magic Quotes GPC non se pode activar "On" cando se utiliza MS SQL Server.',
'ERR_CHECKSYS_MEM_LIMIT_0'                         => 'Advertencia:',
'ERR_CHECKSYS_MEM_LIMIT_1'                         => '(Poña esto a',
'ERR_CHECKSYS_MEM_LIMIT_2'                         => 'M ou maior no seu arquivo php.ini)',
'ERR_CHECKSYS_MYSQL_VERSION'                       => 'Versión mínima 4.1.2 - Encontrado:',
'ERR_CHECKSYS_NO_SESSIONS'                         => 'Erro ao escribir e leer variables de sesión. Non se pode continuar ca instalación.',
'ERR_CHECKSYS_NOT_VALID_DIR'                       => 'Non é un directorio válido',
'ERR_CHECKSYS_NOT_WRITABLE'                        => 'Advertencia: Non se pode escribir',
'ERR_CHECKSYS_PHP_INVALID_VER'                     => 'A sua versión de PHP non é compatible con Sugar. Vostede terá que instalar unha versión que sexa compatible ca aplicación de Sugar. Por favor, consulte a Matriz de compatibilidade nas notas da versión para as versións de PHP compatibles. A sua versión é',
'ERR_CHECKSYS_IIS_INVALID_VER'                     => 'A sua versión de IIS non é compatible con Sugar. Vostede terá que instalar una versión que sexa compatible ca aplicación de Sugar. Por favor, consulte a Matriz de compatibilidade nas notas da versión para as versións compatibles de IIS. A sua versión é',
'ERR_CHECKSYS_FASTCGI'                             => 'Detectamos que non está utilizando unah asignación de controlador para PHP FastCGI. Vostede terá que instalar/configurar unha versión que sexa compatible ca aplicación de Sugar. Por favor, consulte a Matriz de compatibilidade nas notas da versión para as versións soportadas. Por favor, consulte <a href="http://www.iis.net/php/" http://www.iis.net/php/ target="_blank"> </ a> para obter máis información',
'ERR_CHECKSYS_PHP_UNSUPPORTED'                     => 'Versión PHP instalada non é compatible: (ver',
'LBL_DB_UNAVAILABLE'                               => 'Base de datos inalcanzable',
'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE'            => 'Non se encontrou soporte para a base de datos. Por favor, asegúrese de que ten os controladores necesarios para un dos tipos de bases de datos soportados seguintes: MySQL o MS SQL Server. Pode que teña que descomentar a extensión no arquivo php.ini ou recompile co arquivo binario correcto, dependendo da versión de PHP. Por favor, consulte o Manual de PHP para obter máis información sobre cómo activar o soporte de base de datos.',
'LBL_CHECKSYS_XML_NOT_AVAILABLE'                   => 'Funcións asociadas con XML Parser Libraries que son necesarias para a aplicación de Sugar non foran encontrados. Pode que teña que descomentar a extensión no arquivo php.ini ou recompile co arquivo binario correcto, dependendo da versión de PHP. Por favor, consulte o Manual de PHP para máis información.',
'ERR_CHECKSYS_MBSTRING'                            => 'Funcións releacionadas ca extensión Multibyte Strings PHP (mbstring) que son necesarios para a aplicación de Sugar non foron encontradas. <br/> En xeral, o módulo mbstring non está actido por defecto en PHP e debe ser activa ca opción - enable-mbstring cando o binario de PHP se constrúe. Por favor, consulte o Manual de PHP para obter máis información sobre cómo habilitar a compatibilidade mbstring.',
'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'           => 'O axuste session.save_path no arquivo de configuración de PHP (php.ini) non se estableceu ou estableceuse nunha carpeta que non existe. É posible que necesite axustar a configuración de save_path en php.ini ou verificar que os conjuntos de carpeta en save_path existe.',
'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'      => 'O axuste session.save_path no arquivo de configuración de PHP (php.ini) estableceuse nunha carpeta que non se pode escribir. Por favor, tome as medidas necesarias para que a carpeta sexa escribible. <br> Dependendo do seu sistema operativo, o que podría requerir que vostede cambie os permisos executando chmod 766, ou faga clic dereito sobre o nome do arquivo para acceder ás propiedades e desactive a opción de só lectura.',
'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'                 => 'O arquivo de configuración existe, pero nom se pode escribir. Por favor, tome as medidas necesarias para que o arquivo se poda escribir. Dependendo do seu sistema operativo, o que podería requerir que vostede cambie os permisos executando chmod 766, ou faga clic dereito sobre o nome do arquivo para acceder ás propiedades e desactive a opción de só lectura.',
'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'        => 'O arquivo de sustitución de configuración existe, pero non se pode escribir. Por favor, tome as medidas necesarias para que o arquivo se poda escribir. Dependiendo de su sistema operativo, lo que podría requerir que vostede cambie os permisos executando chmod 766, ou faga clic dereito sobre o nome do arquivo para acceder ás propiedades e desactive a opción de só lectura.',
'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'                 => 'O Directorio persoal existe pero non se pode escribir. Pode que teña que cambiar os permisos no (chmod 766) ou clic dereito sobre él e desmarque a opción de só lectura, dependendo do seu sistema operativo. Por favor, tome as medidas necesarias para que arquivo se poda escribir.',
'ERR_CHECKSYS_FILES_NOT_WRITABLE'                  => 'Os arquivos ou directorios que figuran a continuación non teñen permisos de escritura ou perdense e non se pode crear. Dependendo do seu sistema operativo, para correxir esto pode requerir que vostede teña que cambiar os permisos dos arquivos ou directorios pai (chmod 755), ou faga clic dereito sobre o directorio pai e desactive a casiña "só lectura" e aplicalo a todas as subcarpetas.',
'ERR_CHECKSYS_SAFE_MODE'                           => 'Modo seguro está activado (podese deshabilitar en php.ini)',
'ERR_CHECKSYS_ZLIB'                                => 'ZLib support not found: SugarCRM reaps enormous performance benefits with zlib compression.',
'ERR_CHECKSYS_ZIP'                                 => 'Apoyo ZLib not found: SugarCRM colleita grandes beneficios de rendemento con compresión zlib.',
'ERR_DB_ADMIN'                                     => 'O nome de usuario de base de datos que lle proporcionou o administrador e/ou o contrasinal non é válido, e a conexión á base de datos non puido ser establecida. Por favor, introduza un nome de usuario e contrasinal válido. (Erro:',
'ERR_DB_ADMIN_MSSQL'                               => 'O nome de usuario de base de datos que lle proporcionou o administrador e/ou contrasinal non é válido, e a conexión á base de datos non puido ser establecida. Por favor, introduza un nome de usuario e contrasinal válido.',
'ERR_DB_EXISTS_NOT'                                => 'A base de datos especificada non existe.',
'ERR_DB_EXISTS_WITH_CONFIG'                        => 'A base de datos xa existe cos datos de configuración. Para executar unha instalación ca base de datos escollida, volva a executar a instalación e escolla: "¿Quitar e volver a crear as tabóas existentes SugarCRM?" Para actualizar, utilice o Asistente para actualización na consola de administración. Por favor, lea a documentación de actualización situada <a href="http://www.sugarforge.org/content/downloads/" target="_new"> aquí </ a>.',
'ERR_DB_EXISTS'                                    => 'O nombre da base de datos xa existe - non pode crear outra co mesmo nome.',
'ERR_DB_EXISTS_PROCEED'                            => 'O nome da base de datos xa existe. Pode <br> 1. pulsar o botón de novo e escoller un nome de base de datos novo <br> 2. facer clic en seguinte e continuar, pero quitaranse todas as tabóas existentes nesta base de datos. <strong> Esto significa que sus tabóas e os datos serán arrastrados. </ strong>',
'ERR_DB_HOSTNAME'                                  => 'O nome de host non pode estar en blanco.',
'ERR_DB_INVALID'                                   => 'O tipo de base de datos seleccionado non é válido.',
'ERR_DB_LOGIN_FAILURE'                             => 'O host de base de datos proporcionado, nome de usuario e/ou contrasinal non é válido, e a conexión á base de datos non puido ser establecida. Por favor, introduza un host válido nome de usuario e contrasinal. ',
'ERR_DB_LOGIN_FAILURE_MYSQL'                       => 'O host de base de datos proporcionado, nome de usuario e/ou contrasinal non é válido, e a conexión á base de datos non puido ser establecida. Por favor, introduza un host válido nome de usuario e contrasinal.',
'ERR_DB_LOGIN_FAILURE_MSSQL'                       => 'O host de base de datos proporcionado, nome de usuario e/ou contrasinal non é válido, e a conexión á base de datos non puido ser establecida. Por favor, introduza un host válido nome de usuario e contrasinal. ',
'ERR_DB_MYSQL_VERSION'                             => 'A sua versión de MySQL (% s) non está soportada por Sugar. Vostede terá que instalar unha versión que sexa compatible ca aplicación de Sugar. Por favor, consulte a Matriz de compatibilidade nas notas da versión para versiones compatibles de MySQL.',
'ERR_DB_NAME'                                      => 'O nome de base de datos non pode estar en blanco.',
'ERR_DB_NAME2'                                     => "O nome de base de datos non pode conter un carácter '\\', '/', ou '.'",
'ERR_DB_MYSQL_DB_NAME_INVALID'                     => "O nome de base de datos non pode conter un carácter '\\', '/', ou '.'",
'ERR_DB_MSSQL_DB_NAME_INVALID'                     => "O nome de basede datos non pode comenzar con un número, &'#', oo '@'  e non pode conter un espacio,, '\"', \"'\", '*', '/', '\', '?', ':', '<', '>', '&', '!', ou '-'",
'ERR_DB_OCI8_DB_NAME_INVALID'                      => "O nome de base de datos só pode conter caracteres alfanuméricos e os símbolos, '#', '_' ou '$'",
'ERR_DB_PASSWORD'                                  => 'Os contrasinais proporcionados polo administrador da base de datos de Sugar non coinciden. Por favor, volva a introducir o mesmo contrasinal nos campos de contrasinal.',
'ERR_DB_PRIV_USER'                                 => 'Proporcione o nome de usuario do administrador de base de datos . Requirese o usuario para a conexión inicial á base de datos',
'ERR_DB_USER_EXISTS'                               => 'O nome de usuario para a base de datos de Sugar xa existe - non pode crear outro co mesmo nome. Por favor, introduza un novo nome de usuario.',
'ERR_DB_USER'                                      => 'Introduza un nome de usuario para o administrador da base de Sugar.',
'ERR_DBCONF_VALIDATION'                            => 'Por favor, corrixa os erros seguintes antes de continuar:',
'ERR_DBCONF_PASSWORD_MISMATCH'                     => 'Os contrasinais proporcionados polo usuario de base de de dato de Sugar non son iguais. Por favor, volva a introducir o mesmo misma contrasinal nos campos de contrasinais.',
'ERR_ERROR_GENERAL'                                => 'Encontraronse os seguintes erros :',
'ERR_LANG_CANNOT_DELETE_FILE'                      => 'Non se puido eliminar o arquivo:',
'ERR_LANG_MISSING_FILE'                            => 'Non se puido encontrar o arquivo:',
'ERR_LANG_NO_LANG_FILE'                            => 'Arquivo non encontrado no paquete de idiomas include/language interno:',
'ERR_LANG_UPLOAD_1'                                => 'Hubo un problema ca subida. Por favor, ténteo de novo.',
'ERR_LANG_UPLOAD_2'                                => 'Os paquetes de idiomas deben ser arquivos ZIP.',
'ERR_LANG_UPLOAD_3'                                => 'PHP non puido mover o arquivo temporal no directorio de actualización.',
'ERR_LICENSE_MISSING'                              => 'Faltan Campos Obligatorios',
'ERR_LICENSE_NOT_FOUND'                            => 'O arquivo de licenza non se encontra!',
'ERR_LOG_DIRECTORY_NOT_EXISTS'                     => 'Directorio de rexistro proporcionado non é un directorio válido.',
'ERR_LOG_DIRECTORY_NOT_WRITABLE'                   => 'Directorio de rexistro proporcionado non é un directorio escribible.',
'ERR_LOG_DIRECTORY_REQUIRED'                       => 'O directorio de rexistro é necesario se desexa especificar o seu propio directorio.',
'ERR_NO_DIRECT_SCRIPT'                             => 'Non se pode procesar directamente o script.',
'ERR_NO_SINGLE_QUOTE'                              => 'Non se pode utilizar a comiña simple para',
'ERR_PASSWORD_MISMATCH'                            => 'Os contrasinais proporcionados polo usuario admin Sugar non coinciden. Por favor, volva a introducir o mesmo contrasinal nos campos de contrasinal.',
'ERR_PERFORM_CONFIG_PHP_1'                         => 'Non se pode escribir no arquivo config.php <span class=stop> </ span> arquivo.',
'ERR_PERFORM_CONFIG_PHP_2'                         => 'Pode seguir esta instalación creando manualmente o arquivo config.php e pegar a información de configuración abaixo no arquivo config.php. Con todo, vostede debe <strong> </ strong> crear o arquivo config.php antes de continuar co seguinte paso.',
'ERR_PERFORM_CONFIG_PHP_3'                         => '¿Lembrouse de crear o arquivo config.php?',
'ERR_PERFORM_CONFIG_PHP_4'                         => 'Advertencia: Non se puido escribir no arquivo config.php. Por favor, asegúrese de que exista.',
'ERR_PERFORM_HTACCESS_1'                           => 'No se pode escribir nel',
'ERR_PERFORM_HTACCESS_2'                           => 'arquivo.',
'ERR_PERFORM_HTACCESS_3'                           => 'Se desexa protexer o seu arquivo de rexistro de ser accesible a través do navegador, cree un arquivo htaccess no seu directorio de rexistro ca liña.:',
'ERR_PERFORM_NO_TCPIP'                             => '<b> Non se puido detectar unha conexión a Internet. </ b> Se Vostede ten unha conexión, por favor visite <a rexistrarse con SugarCRM. Ao deixarnos saber un poco acerca de cómo a sua compañía planea utilizar SugarCRM, podemos asegurar que estamos entregando sempre a aplicación correcta para as suas necesidades empresariais.',
'ERR_SESSION_DIRECTORY_NOT_EXISTS'                 => 'O directorio de sesión indicado non é un directorio válido.',
'ERR_SESSION_DIRECTORY'                            => 'O directorio de sesión indicado non é un directorio non é un directorio escribible.',
'ERR_SESSION_PATH'                                 => 'Debe especificar a ruta da sesión se desexa especificar unha.',
'ERR_SI_NO_CONFIG'                                 => 'Vostede non inclueu config_si.php na raíz do documento, ou non se definiu en config.php $ sugar_config_si',
'ERR_SITE_GUID'                                    => 'O ID de aplicación é necesario se desexa especificar o seu propio ID.',
'ERROR_SPRITE_SUPPORT'                             => 'Actualmente non é capaz de localizar a biblioteca GD, como resultado, Vostede non será capaz de utilizar a funcionalidade de Sprite CSS.',
'ERR_UPLOAD_MAX_FILESIZE'                          => 'Advertencia: A configuración de PHP debe ser cambiada para permitir cargar os arquivos de polo menos 6 MB.',
'LBL_UPLOAD_MAX_FILESIZE_TITLE'                    => 'Tamaño de subida do ficheiro',
'ERR_URL_BLANK'                                    => 'Proporcionar a URL base para a instancia de Sugar.',
'ERR_UW_NO_UPDATE_RECORD'                          => 'Non se puido encontrar rexistro de instalación',
'ERROR_FLAVOR_INCOMPATIBLE'                        => 'O arquivo subido non é compatible con esta versión (Community Edition, Professional o Enterprise) de Sugar:',
'ERROR_LICENSE_EXPIRED'                            => 'Erro: A sua licenza expirou',
'ERROR_LICENSE_EXPIRED2'                           => "día(s) antes. Por favor, vaia a <a href='index.php?action=LicenseSettings&module=Administration'>'\"License Management\"</a> na pantalla de administración para ingresar a clave de licenza nova. Se non se introduce una nova clave de licenza dentro dos 30 días do seu vencimiento de clave de licenza, xa non será capaz de acceder a esta aplicación.",
'ERROR_MANIFEST_TYPE'                              => 'O arquivo de manifiesto debe especificar o tipo de paquete.',
'ERROR_PACKAGE_TYPE'                               => 'O arquivo de manifiesto especifica un tipo de paquete non recoñecido',
'ERROR_VALIDATION_EXPIRED'                         => 'Erro: A su licenza expirou',
'ERROR_VALIDATION_EXPIRED2'                        => "día(s) antes. Por favor, vaia a <a href='index.php?action=LicenseSettings&module=Administration'>'\"License Management\"</a>  na pantalla de administración para ingresar a nova clave de validación. Se non se introduce unha nova clave de validación dentro de los 30 días do vencimiento de clave de validación, Vostede xa no será capaz de acceder a esta aplicación.",
'ERROR_VERSION_INCOMPATIBLE'                       => 'O arquivo subido non é compatible con esta versión de Sugar:',
'LBL_BACK'                                         => 'Atrás',
'LBL_CANCEL'                                       => 'Cancelar',
'LBL_ACCEPT'                                       => 'Acepto',
'LBL_CHECKSYS_1'                                   => 'Para que a sua instalación de SugarCRM funcione correctamente , por favor asegúrese de que todos os elementos de verificación do sistema que se enumeran a continuación son de cor verde . Se algún está vermello, por favor, tome as medidas necesarias para solucionalos. <BR> Para obter axuda sobre estas comprobacións do sistema , por favor visite o <a href = "http://www.sugarcrm.com/crm/installation" target = "_blank"> Sugar Wiki </ a>.',
'LBL_CHECKSYS_CACHE'                               => 'A cache de subdirectorios é escribible ',
'LBL_DROP_DB_CONFIRM'                              => 'Xa existe o nome de base de datos proporcionado <br> Vostede pode:. <br> 1. facer clic no botón Cancelar e escoller un nome de base de datos novo ou <br> 2. facer clic no botón Aceptar e continuar. Todas as tabóas existentes na base de datos serán dadas de baix. <strong> Esto significa que todas as tabóas e os datos pre-existentes serán arrastrados. </ strong>',
'LBL_CHECKSYS_CALL_TIME'                           => 'PHP Permitie que as o Tempo de chamada Referencia Pass se desactive',
'LBL_CHECKSYS_COMPONENT'                           => 'Componente',
'LBL_CHECKSYS_COMPONENT_OPTIONAL'                  => 'Componentes opcionais',
'LBL_CHECKSYS_CONFIG'                              => 'O arquivo de configuración de SugarCRM é escribible (config.php)',
'LBL_CHECKSYS_CONFIG_OVERRIDE'                     => 'O arquivo de configuración de SugarCRM é escribible (config_override.php)',
'LBL_CHECKSYS_CURL'                                => 'Módulo cURL',
'LBL_CHECKSYS_SESSION_SAVE_PATH'                   => 'Configuración da ruta de gardado da sessión',
'LBL_CHECKSYS_CUSTOM'                              => 'Directorio personalizado escribible',
'LBL_CHECKSYS_DATA'                                => 'Datos de sub-directorio son escribibles',
'LBL_CHECKSYS_IMAP'                                => 'Módulos IMAP',
'LBL_CHECKSYS_FASTCGI'                             => 'FastCGI',
'LBL_CHECKSYS_MQGPC'                               => 'Magic Quotes GPC',
'LBL_CHECKSYS_MBSTRING'                            => 'Módulo MB Strings',
'LBL_CHECKSYS_MEM_OK'                              => 'OK (Sen límite)',
'LBL_CHECKSYS_MEM_UNLIMITED'                       => 'OK (Ilimitado)',
'LBL_CHECKSYS_MEM'                                 => 'Limite de memoria PHP',
'LBL_CHECKSYS_MODULE'                              => 'Módulos programables de sub-directorios e arquivos',
'LBL_CHECKSYS_MYSQL_VERSION'                       => 'Versión MySQL',
'LBL_CHECKSYS_NOT_AVAILABLE'                       => 'Non dispoñible',
'LBL_CHECKSYS_OK'                                  => 'OK',
'LBL_CHECKSYS_PHP_INI'                             => 'Ubicación dos arquivos de configuración de PHP (php.ini):',
'LBL_CHECKSYS_PHP_OK'                              => 'OK (ver ',
'LBL_CHECKSYS_PHPVER'                              => 'Versión PHP',
'LBL_CHECKSYS_IISVER'                              => 'Versión IIS',
'LBL_CHECKSYS_RECHECK'                             => 'Volver a comprobar',
'LBL_CHECKSYS_SAFE_MODE'                           => 'PHP Modo seguro desactivado',
'LBL_CHECKSYS_SESSION'                             => 'Writable Session Save Path (',
'LBL_CHECKSYS_STATUS'                              => 'Estado',
'LBL_CHECKSYS_TITLE'                               => 'Sistema de aceptación de chequeos',
'LBL_CHECKSYS_VER'                                 => 'Encontrado: ( ver ',
'LBL_CHECKSYS_XML'                                 => 'XML Parsing',
'LBL_CHECKSYS_ZLIB'                                => 'ZLIB Módulo de Compresión',
'LBL_CHECKSYS_ZIP'                                 => 'Manexo de módulo ZIP',
'LBL_CHECKSYS_FIX_FILES'                           => 'Por favor, corrixa os seguintes arquivos ou directorios antes de continuar:',
'LBL_CHECKSYS_FIX_MODULE_FILES'                    => 'Por favor, corrixa os seguintes directorios de módulo e os arquivos debaixo de antes de continuar:',
'LBL_CHECKSYS_UPLOAD'                              => 'Directorio de subida é accesible a escritura',
'LBL_CLOSE'                                        => 'Cerrar',
'LBL_THREE'                                        => '3',
'LBL_CONFIRM_BE_CREATED'                           => 'crearse',
'LBL_CONFIRM_DB_TYPE'                              => 'Tipo de base de datos',
'LBL_CONFIRM_DIRECTIONS'                           => 'Por favor, confirme os axustes seguintes. Se desexa cambiar algún dos valores, faga clic en "Volver" para editar. Do contrario, faga clic en "seguinte" para comenzar a instalación.',
'LBL_CONFIRM_LICENSE_TITLE'                        => 'Información de licenza',
'LBL_CONFIRM_NOT'                                  => 'Non',
'LBL_CONFIRM_TITLE'                                => 'Confirmar parámetros',
'LBL_CONFIRM_WILL'                                 => 'querer',
'LBL_DBCONF_CREATE_DB'                             => 'Crear base de datos',
'LBL_DBCONF_CREATE_USER'                           => 'Crear usuario',
'LBL_DBCONF_DB_DROP_CREATE_WARN'                   => 'Precaución: Todos os datos se borrarán de Sugar <br> se esta casiña está marcada.',
'LBL_DBCONF_DB_DROP_CREATE'                        => 'Quitar e Recrear as tabóas existentes de Sugar?',
'LBL_DBCONF_DB_DROP'                               => 'Eliminar tabóas',
'LBL_DBCONF_DB_NAME'                               => 'Nome de base de datos',
'LBL_DBCONF_DB_PASSWORD'                           => 'Contrasinal de usuario da base de datos de Sugar',
'LBL_DBCONF_DB_PASSWORD2'                          => 'Volva a introducir o seu contrasinal de usuario de base de datos de Sugar',
'LBL_DBCONF_DB_USER'                               => 'Nome de usuario da base de datos de Sugar',
'LBL_DBCONF_SUGAR_DB_USER'                         => 'Nome de usuario da base de datos de Sugar',
'LBL_DBCONF_DB_ADMIN_USER'                         => 'Nombre de usuario de Administrador da base de datos de Sugar',
'LBL_DBCONF_DB_ADMIN_PASSWORD'                     => 'Contrasinal de usuario de Administrador da base de datos de Sugar',
'LBL_DBCONF_DEMO_DATA'                             => 'Cargar a base de datos con datos de demostración?',
'LBL_DBCONF_DEMO_DATA_TITLE'                       => 'Escoller datos de demostración',
'LBL_DBCONF_HOST_NAME'                             => 'Nome de Host',
'LBL_DBCONF_HOST_INSTANCE'                         => 'Instancia de Host',
'LBL_DBCONF_HOST_PORT'                             => 'Porto',
'LBL_DBCONF_INSTRUCTIONS'                          => 'Por favor ingrese a sua información de configuración de base de datos a continuación. Se non está seguro do que debe introducir, suxerimos que utilice os valores predeterminados.',
'LBL_DBCONF_MB_DEMO_DATA'                          => 'Usar múltiples bytes de texto en datos de demostración?',
'LBL_DBCONFIG_MSG2'                                => 'Nome de servidor de web ou da máquina (host) no que se encontra a base de datos (como localhost o www.mydomain.com):',
'LBL_DBCONFIG_MSG3'                                => 'Nome da base de datos que conterá os datos da instancia de Sugar que vai instalar:',
'LBL_DBCONFIG_B_MSG1'                              => 'O nome de usuario e o contrasinal de un administrador de base de datos que pode crear tabóas e usuarios de bases de datos e que pode escribir na base de datos é necesario para configurar a base de datos de Sugar',
'LBL_DBCONFIG_SECURITY'                            => 'Por motivos de seguridade, pode especificar un usuario de base de datos exclusiva para conectarse á base de datos de Sugar. Este usuario debe ser capaz de escribir , actualizar e recuperar datos na base de datos de Sugar que se creará para esta instancia . Este usuario pode ser o administrador de base de datos especificado anteriormente , ou vosteder pode proporcionar información nova ou existente de usuario de base de datos .',
'LBL_DBCONFIG_AUTO_DD'                             => 'Faino por mín',
'LBL_DBCONFIG_PROVIDE_DD'                          => 'Proporcionar usuario existente',
'LBL_DBCONFIG_CREATE_DD'                           => 'Definir usuario a crear',
'LBL_DBCONFIG_SAME_DD'                             => 'Igual que usuario Admin',
'LBL_FTS'                                          => 'Busca de texto completo',
'LBL_FTS_INSTALLED'                                => 'instalado',
'LBL_FTS_INSTALLED_ERR1'                           => 'Funcionalidade de busca de texto non está instalada.',
'LBL_FTS_INSTALLED_ERR2'                           => 'Ainda se pode instalar, pero non será capaz de utilizar a funcionalidade de busca de texto. Por favor, consulte a guía de instalación do seu servidor de base de datos sobre a maneira de facer esto, ou póñase en contacto co administrador.',
'LBL_DBCONF_PRIV_PASS'                             => 'Contrasinal de usuario de base de datos con privilexios',
'LBL_DBCONF_PRIV_USER_2'                           => 'O usuario da base de datos indicado arriba é un usuario privilexiado ?',
'LBL_DBCONF_PRIV_USER_DIRECTIONS'                  => 'Este usuario privilexiado da base de datos debe ter os permisos apropiados para crear una base de datos, borrar/crear tabóas e crear usuarios. Este usuario só se usará para realizar as tarefas necesarias durante a instalación. Tambén pode utilizar o mesmo usuario da base de datos anterior, se o usuario ten privilexios suficientes.',
'LBL_DBCONF_PRIV_USER'                             => 'Usuario da base de datos con privilexios',
'LBL_DBCONF_TITLE'                                 => 'Configuración da base de datos',
'LBL_DBCONF_TITLE_NAME'                            => 'Proporcione o nome de base de datos',
'LBL_DBCONF_TITLE_USER_INFO'                       => 'Proporcionar información de usuario da base de datos ',
'LBL_DISABLED_DESCRIPTION_2'                       => 'Despois que este cambio esté feito, pode facer clic no botón "Inicio" para comezar a instalación. Despois da instalación, terá que cambiar o valor de  \'installer_locked\' a \'true\'. </ i>',
'LBL_DISABLED_DESCRIPTION'                         => 'O programa de instalación xa se executou unha vez. Como medida de seguridade, desactivouse a execución dunha segunda vez. Se está absolutamente seguro de que desexa que se execute de novo, por favor vaia ao seu arquivo config.php e busque (ou engada) unha variable chamada \'installer_locked\'; e poñao en \'false\'. A liña debería ter este aspecto:',
'LBL_DISABLED_HELP_1'                              => 'Se necesita axuda para a instalación, por favor visite SugarCRM',
'LBL_DISABLED_HELP_LNK'                            => 'http://www.sugarcrm.com/forums/',
'LBL_DISABLED_HELP_2'                              => 'Foros de soporte',
'LBL_DISABLED_TITLE_2'                             => 'Instalación SugarCRM foi desactivada',
'LBL_DISABLED_TITLE'                               => 'Instalación SugarCRM está desactivada',
'LBL_EMAIL_CHARSET_DESC'                           => 'Conxunto de caracteres máis utilizado no entorno local',
'LBL_EMAIL_CHARSET_TITLE'                          => 'Configuración de correo electrónico saínte',
'LBL_EMAIL_CHARSET_CONF'                           => 'Xogo de caracteres para o correo electrónico saínte',
'LBL_HELP'                                         => 'Axuda',
'LBL_INSTALL'                                      => 'Instalar',
'LBL_INSTALL_TYPE_TITLE'                           => 'Opcións de instalación',
'LBL_INSTALL_TYPE_SUBTITLE'                        => 'Escolla tipo de instalación',
'LBL_INSTALL_TYPE_TYPICAL'                         => '<b> Instalación típica </ b>',
'LBL_INSTALL_TYPE_CUSTOM'                          => '<b> Instalación personalizada </ b>',
'LBL_INSTALL_TYPE_MSG1'                            => 'A clave é necesaria para a funcionalidade de aplicación xeral, pero non é necesario para a instalación. Non é necesario introducir a clave neste momento, pero Vostede terá que proporcionar a clave despois de haber instalado a aplicación.',
'LBL_INSTALL_TYPE_MSG2'                            => 'Requirese información mínima para a instalación. Recomendado para os nuevos usuarios.',
'LBL_INSTALL_TYPE_MSG3'                            => 'Ofrece opcións adicionais para configurar durante a instalación. A maioría destas opcións tamén están dispoñibles despois da instalación nas pantallas de administración. Recomiendase para usuarios avanzados.',
'LBL_LANG_1'                                       => 'Para utilizar unha linguaxe no Sugar que non sexa o idioma por defecto (US-Inglés), pode cargar e instalar o paquete de idioma neste momento. Vostede será capaz de cargar e instalar os paquetes de idioma desde a aplicación de Sugar. Se desexa omitir este paso, faga clic en seguinte.',
'LBL_LANG_BUTTON_COMMIT'                           => 'Instalar',
'LBL_LANG_BUTTON_REMOVE'                           => 'Quitar',
'LBL_LANG_BUTTON_UNINSTALL'                        => 'Desinstalar',
'LBL_LANG_BUTTON_UPLOAD'                           => 'Subir',
'LBL_LANG_NO_PACKS'                                => 'ningún',
'LBL_LANG_PACK_INSTALLED'                          => 'Os paquetes de idioma que xa están instalados son os seguintes:',
'LBL_LANG_PACK_READY'                              => 'Os seguintes paquetes de idioma están listos para ser instalados:',
'LBL_LANG_SUCCESS'                                 => 'O paquete de idioma cargouse con éxito.',
'LBL_LANG_TITLE'                                   => 'Paquete de idioma',
'LBL_LAUNCHING_SILENT_INSTALL'                     => 'Instalando Sugar ahora. Esto pode tomar hasta uns poucos minutos.',
'LBL_LANG_UPLOAD'                                  => 'Sube un paquete de idioma',
'LBL_LICENSE_ACCEPTANCE'                           => 'Aceptación de licenza',
'LBL_LICENSE_CHECKING'                             => 'Comprobación da compatibilidade de sistema.',
'LBL_LICENSE_CHKENV_HEADER'                        => 'Comprobación do entorno',
'LBL_LICENSE_CHKDB_HEADER'                         => 'Verificación de Credenciais da base de datos.',
'LBL_LICENSE_CHECK_PASSED'                         => 'Sistema aprobado; Comprobar a compatibilidade.',
'LBL_LICENSE_REDIRECT'                             => 'Redireccionando',
'LBL_LICENSE_DIRECTIONS'                           => 'Se Vostede tén a sua información de licenza, por favor escríbaa no campo de abaixo.',
'LBL_LICENSE_DOWNLOAD_KEY'                         => 'Ingrese a clave de descarga',
'LBL_LICENSE_EXPIRY'                               => 'Data de expiración',
'LBL_LICENSE_I_ACCEPT'                             => 'Acepto',
'LBL_LICENSE_NUM_USERS'                            => 'Número de usuarios',
'LBL_LICENSE_OC_DIRECTIONS'                        => 'Por favor, introduza o número de clientes comprados sen conexión.',
'LBL_LICENSE_OC_NUM'                               => 'Number of Offline Client Licenses',
'LBL_LICENSE_OC'                                   => 'Número de licenzas de cliente sin conexión',
'LBL_LICENSE_PRINTABLE'                            => 'Vista para imprimir',
'LBL_PRINT_SUMM'                                   => 'Imprimir resumen',
'LBL_LICENSE_TITLE_2'                              => 'Licenza SugarCRM',
'LBL_LICENSE_TITLE'                                => 'Información de licenza',
'LBL_LICENSE_USERS'                                => 'Usuarios con licenza',
'LBL_LOCALE_CURRENCY'                              => 'Configuración de divisas',
'LBL_LOCALE_CURR_DEFAULT'                          => 'Moneda predeterminada',
'LBL_LOCALE_CURR_SYMBOL'                           => 'Símbolo de moeda',
'LBL_LOCALE_CURR_ISO'                              => 'Código de moeda (ISO 4217)',
'LBL_LOCALE_CURR_1000S'                            => 'Separador de 1000',
'LBL_LOCALE_CURR_DECIMAL'                          => 'Separador Decimal',
'LBL_LOCALE_CURR_EXAMPLE'                          => 'Exemplo',
'LBL_LOCALE_CURR_SIG_DIGITS'                       => 'Díxitos significativos',
'LBL_LOCALE_DATEF'                                 => 'Formato de data por defecto',
'LBL_LOCALE_DESC'                                  => 'A configuración rexional especificados reflexase globalmente no caso de Sugar',
'LBL_LOCALE_EXPORT'                                => 'Conxunto de caracteres para <br> Importar/Exportar <i> (Email,. Csv, vCard, PDF, importación de datos) </ i>',
'LBL_LOCALE_EXPORT_DELIMITER'                      => 'Exportación (. Csv) Delimitador',
'LBL_LOCALE_EXPORT_TITLE'                          => 'Configuraciones Importar/exportar',
'LBL_LOCALE_LANG'                                  => 'Linguaxe por defecto',
'LBL_LOCALE_NAMEF'                                 => 'Nome de formato por defecto',
'LBL_LOCALE_NAMEF_DESC'                            => 's = saúdo <br /> <br n = nome /> l = apelido',
'LBL_LOCALE_NAME_FIRST'                            => 'David',
'LBL_LOCALE_NAME_LAST'                             => 'Livingstone',
'LBL_LOCALE_NAME_SALUTATION'                       => 'Dr.',
'LBL_LOCALE_TIMEF'                                 => 'Formato de hora por defecto ',
'LBL_LOCALE_TITLE'                                 => 'Configuración rexional',
'LBL_CUSTOMIZE_LOCALE'                             => 'Personalizar a configuración rexional',
'LBL_LOCALE_UI'                                    => 'Interfaz de usuario',
'LBL_ML_ACTION'                                    => 'Acción',
'LBL_ML_DESCRIPTION'                               => 'Descripción',
'LBL_ML_INSTALLED'                                 => 'Data de instalación',
'LBL_ML_NAME'                                      => 'Nome',
'LBL_ML_PUBLISHED'                                 => 'Data de publicación',
'LBL_ML_TYPE'                                      => 'Tipo',
'LBL_ML_UNINSTALLABLE'                             => 'Desinstalador',
'LBL_ML_VERSION'                                   => 'Versión',
'LBL_MSSQL'                                        => 'Servidor SQL',
'LBL_MSSQL2'                                       => 'Servidor SQL (FreeTDS)',
'LBL_MSSQL_SQLSRV'                                 => 'Servidor SQL  (Microsoft SQL Server Driver for PHP) ',
'LBL_MYSQL'                                        => 'MySQL',
'LBL_MYSQLI'                                       => 'MySQL (mysqli extension) ',
'LBL_IBM_DB2'                                      => 'IBM DB2 ',
'LBL_NEXT'                                         => 'seguinte',
'LBL_NO'                                           => 'Non',
'LBL_ORACLE'                                       => 'Oracle',
'LBL_PERFORM_ADMIN_PASSWORD'                       => 'Configuración do contrasinal de administrador do sitio',
'LBL_PERFORM_AUDIT_TABLE'                          => 'auditoría táboa /',
'LBL_PERFORM_CONFIG_PHP'                           => 'Creación de arquivo de configuración de Sugar',
'LBL_PERFORM_CREATE_DB_1'                          => '<b> Crear a base de datos </ b>',
'LBL_PERFORM_CREATE_DB_2'                          => ' <b>on</b> ',
'LBL_PERFORM_CREATE_DB_USER'                       => 'Creación de usuario e contrasinal da base de datos de...',
'LBL_PERFORM_CREATE_DEFAULT'                       => 'Creación de datos por defecto de Sugar',
'LBL_PERFORM_CREATE_LOCALHOST'                     => 'Creación de datos por defecto de Sugar...',
'LBL_PERFORM_CREATE_RELATIONSHIPS'                 => 'Creación de relacións de tabóas de Sugar ',
'LBL_PERFORM_CREATING'                             => 'creando / ',
'LBL_PERFORM_DEFAULT_REPORTS'                      => 'Creación de informes predeterminados',
'LBL_PERFORM_DEFAULT_SCHEDULER'                    => 'Creando programa de traballos por defecto',
'LBL_PERFORM_DEFAULT_SETTINGS'                     => 'Inserción da configuración predeterminada',
'LBL_PERFORM_DEFAULT_USERS'                        => 'Creación de usuarios por defecto',
'LBL_PERFORM_DEMO_DATA'                            => 'Enchendo as tabóas de base de datos con datos de exemplo (esto pode tardar un pouco)',
'LBL_PERFORM_DONE'                                 => 'Feito<br>',
'LBL_PERFORM_DROPPING'                             => 'dropping / ',
'LBL_PERFORM_FINISH'                               => 'Terminar',
'LBL_PERFORM_LICENSE_SETTINGS'                     => 'Actualización da información de licencia',
'LBL_PERFORM_OUTRO_1'                              => 'A configuración de Sugar',
'LBL_PERFORM_OUTRO_2'                              => 'Completouse!',
'LBL_PERFORM_OUTRO_3'                              => 'Tempo total:',
'LBL_PERFORM_OUTRO_4'                              => 'segundos.',
'LBL_PERFORM_OUTRO_5'                              => 'Memoria utilizada aproximada:',
'LBL_PERFORM_OUTRO_6'                              => ' bytes.',
'LBL_PERFORM_OUTRO_7'                              => 'O seu sistema xa está instalado e configurado para o seu uso.',
'LBL_PERFORM_REL_META'                             => 'relationship meta ... ',
'LBL_PERFORM_SUCCESS'                              => 'Éxito!',
'LBL_PERFORM_TABLES'                               => 'Creación de tabóas de aplicación, tabóas de auditoría e os metadatos relación de Sugar ',
'LBL_PERFORM_TITLE'                                => 'Realice a configuración',
'LBL_PRINT'                                        => 'Imprimir',
'LBL_REG_CONF_1'                                   => 'Por favor complete o formulario a continuación para recibir anuncios de productos, noticias, formación, ofertas especiais e invitacións para eventos especiais de SugarCRM. Non vendemos, alquilamos, compartimos ou distribuimos a información recollida aquí a terceiros.',
'LBL_REG_CONF_2'                                   => 'O seu nome e enderezo de correo electrónico son os únicos campos necesarios para o rexistro. Todos os demáis campos son opcionais, pero moi útiles. Non vendemos, alquilamos, compartimos ou distribuimos a información recollida aquí a terceiros.',
'LBL_REG_CONF_3'                                   => 'Gracias por rexistrarse. Faga clic no botón Finalizar para iniciar sesión en SugarCRM. Vostede terá que iniciar a sesión por primeira vez co nombre de usuario "admin" e o contrasinal que introduxo no paso 2.',
'LBL_REG_TITLE'                                    => 'Inscripción',
'LBL_REG_NO_THANKS'                                => 'Non, gracias',
'LBL_REG_SKIP_THIS_STEP'                           => 'Saltar este paso',
'LBL_REQUIRED'                                     => '*Campo requerido',
'LBL_SITECFG_ADMIN_Name'                           => 'Nome de administrador de Sugar',
'LBL_SITECFG_ADMIN_PASS_2'                         => 'Volva a introducir o contrasinal do usuario admin',
'LBL_SITECFG_ADMIN_PASS_WARN'                      => 'Precaución: Esto anulará o contrasinal de administrador de calquera instalación anterior.',
'LBL_SITECFG_ADMIN_PASS'                           => 'contrasinal do usuario admin',
'LBL_SITECFG_APP_ID'                               => 'ID da aplicación',
'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'                 => 'Se é selecccionado, Vostede debe proporcionar un ID de aplicación para reemplazar o ID generado automáticamente. A identificación asegura que as sesións dunha instancia de Sugar non son utilizados por outras instancias. Se Vostede ten un grupo de instalaciones de Sugar, todos eles deben compartir a identificación da mesma aplicación.',
'LBL_SITECFG_CUSTOM_ID'                            => 'Proporcione o seu propio ID de aplicación',
'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'                => 'Se se selecciona, debese especificar un directorio de rexistro para anular o directorio predeterminado para o rexistro de Sugar. Independientemente da ubicación donde se encontra o arquivo de rexistro, o acceso a ela a través den navegador web será restrinxido a través dun arquivo. Htaccess redirect.',
'LBL_SITECFG_CUSTOM_LOG'                           => 'Utilizar un directorio de rexistro personalizado',
'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'            => 'Se é seleeccionado, Vostede debe proporcionar unha carpeta segura para almacenar información da sesión. Esto podese facer para evitar que os datos de sesión sexan vulnerable nos servidores compartidos.',
'LBL_SITECFG_CUSTOM_SESSION'                       => 'Utilizar un directorio de sesión personalizado para Sugar',
'LBL_SITECFG_DIRECTIONS'                           => 'Por favor ingrese a sua información de configuración do sitio Web máis abaixo. Se non está seguro dos campos, suxerimoslle que utilice os valores predeterminados.',
'LBL_SITECFG_FIX_ERRORS'                           => '<b> Por favor, corrixa os erros seguintes antes de continuar: </ b>',
'LBL_SITECFG_LOG_DIR'                              => 'Directorio do rexistro',
'LBL_SITECFG_SESSION_PATH'                         => 'Ruta do directorio da sesión <br>(debe ter permisos de escritura)',
'LBL_SITECFG_SITE_SECURITY'                        => 'Selseccione opcións de seguridade',
'LBL_SITECFG_SUGAR_UP_DIRECTIONS'                  => 'S se selecciona, o sistema comprobará periódicamente versións actualizadas dla aplicación.',
'LBL_SITECFG_SUGAR_UP'                             => 'Comprobar automáticamente se hai actualizacións?',
'LBL_SITECFG_SUGAR_UPDATES'                        => 'Configuración de actualizacións de Sugar',
'LBL_SITECFG_TITLE'                                => 'Configuración do sitio',
'LBL_SITECFG_TITLE2'                               => 'Identificar administración de usuarios',
'LBL_SITECFG_SECURITY_TITLE'                       => 'Seguridade do Sitio',
'LBL_SITECFG_URL'                                  => 'URL Instancia de Sugar',
'LBL_SITECFG_USE_DEFAULTS'                         => 'Utilizar as opcións predeterminadas?',
'LBL_SITECFG_ANONSTATS'                            => 'Enviar estadísticas anónimas de uso?',
'LBL_SITECFG_ANONSTATS_DIRECTIONS'                 => 'Se se selecciona, Sugar enviará <b>anónimo</ b> información sobre a instalación de SugarCRM Inc. cada vez que o sistema comprueba se hai nuevas versiones. Esta información axudaralle a entender mellor cómo se utiliza a aplicación e orientar as melloras ao producto.',
'LBL_SITECFG_URL_MSG'                              => 'Introduza a dirección URL que se utiliza para acceder á instancia de Sugar despois da instalación. Do URL tambén se pode utilizar como unha base para as URLs das páginas de Sugar de aplicación. A URL debe incluir o servidor web ou o nome do equipo ou a dirección IP.',
'LBL_SITECFG_SYS_NAME_MSG'                         => 'Escriba un nome para o sistema. Este nome mostrarase na barra de título do navegador cando o usuario visita la aplicación de Sugar.',
'LBL_SITECFG_PASSWORD_MSG'                         => 'Despois da instalación, deberá utilizar o usuario admin Sugar (nome de usuario predeterminado = admin) para iniciar sesión na instancia de Sugar. Introduza un contrasinal para este usuario administrador. Este contrasinal pode ser cambiado despois da sesión inicial. Tamén pode ingresar outro nome de usuario de administrador para utilizar ademáis do valor predeterminado que se proporciona.',
'LBL_SITECFG_COLLATION_MSG'                        => 'Seleccione intercalación (clasificación) para o seu sistema. Esta configuración crea as tabóas con a linguaxe específica que utilice. No caso de que o seu linguaxe non requira axustes especiais por favor utilice o valor predeterminado.',
'LBL_SPRITE_SUPPORT'                               => 'Soporte Sprite',
'LBL_SYSTEM_CREDS'                                 => 'Sistema de Verificación de Poderes',
'LBL_SYSTEM_ENV'                                   => 'Entorno do sistema',
'LBL_START'                                        => 'Iniciar',
'LBL_SHOW_PASS'                                    => 'Mostrar contrasinais',
'LBL_HIDE_PASS'                                    => 'Esconder contrasinais ',
'LBL_HIDDEN'                                       => '<i>(oculto)</i>',
'LBL_CHOOSE_LANG'                                  => '<b>escolla o seu idioma</b>',
'LBL_STEP'                                         => 'Paso',
'LBL_TITLE_WELCOME'                                => 'Benvido a SugarCRM ',
'LBL_WELCOME_1'                                    => 'Este instalador crea as tabás da base de SugarCRM e establece as variables de configuración que necesita para comezar. Todo o proceso debe tomar aproximadamente dez minutos.',
'LBL_WELCOME_2'                                    => 'Para a documentación da instalación, por favor visite a <a href="http://www.sugarcrm.com/crm/installation" target="_blank"> Sugar Wiki </ a>. <BR> <BR> Tamén pode encontrar a axuda da Comunidad de Sugar na <a href="http://www.sugarcrm.com/forums/" target="_blank"> Foros Sugar </ a>.',
'LBL_TITLE_ARE_YOU_READY'                          => '¿Estás listo para instalar?',
'REQUIRED_SYS_COMP'                                => 'Compoñentes do sistema necesarios',
'REQUIRED_SYS_COMP_MSG'                            => 'Antes de empezar, asegúrese de que dispón das versións compatibles dos seguintes sistemas
                       compoñentes: <br>
                       <ul>
                       <li> Base de datos / Database Management System (Ejemplos: MySQL, SQL Server, Oracle) </ li>
                       <li> servidor web (Apache, IIS) </ li>
                       </ ul>
                       Consulte a Matriz de compatibilidade nas notas da versión para
                       compoñentes de sistemas compatibles para a versión de sugar que vai a instalar.<br>',
'REQUIRED_SYS_CHK'                                 => 'Comprobación  Inicial do Sistema',
'REQUIRED_SYS_CHK_MSG'                             => 'Cuando Vostede comienza o proceso de instalación, unha comprobación do sistema levarase a cabo no servidor Web no que os arquivos de Sugar se encontran co fin de
                       asegúrese de que o sistema esté configurado correctamente e tén todos os compoñentes necesarios
                       para completar con éxito a instalación. <br><br>
                       o sistema comprueba todos os seguintes: <br>
                       <ul>
                       <li> <b> versión de PHP </ b> - debe ser compatible
                       coa aplicación </ li>
                                         <li> <b> Sesión Variables </ b> - debe estar funcionando correctamente </ li>
                                             <li> <b> Strings MB </ b> - debe estar instalado e habilitado en php.ini </ li>

                       <li> <b> Soporte Base de datos </ b> - debe existir para MySQL, SQL
                       Server u Oracle </ li>

                       <li> <b> config.php </ b> - debe existir e debe ter a adecuada
                                   Permisos para darlle permisos de escritura </ li>
<li> Los arquivos de Sugar como consecuencia deben ser regrabables: <ul> <li> <b> / personalizada </ li>
<li> / cache </ li>
<li> / modules </ b> </ li> </ ul> </ li> </ ul>
                                   Se a verificación falla, non será capaz de continuar ca instalación. Un mensaxe de erro aparecerá, explicando por qué o sistema
                                   non pasou a verificación.
                                   Despois de facer os cambios necesarios, pode someterse ao sistema
                                   comprobar de nuevo para continuar a instalación.<br>',
'REQUIRED_INSTALLTYPE'                             => 'Instalación típica o personalizada',
'REQUIRED_INSTALLTYPE_MSG'                         => 'Despois de que a comprobación do sistema se leva a cabo, pode escoller calquera das duas
                      a típica ou a instalación personalizada. <br>
                      Para ambas <b> típicas </ b> e <b> personalizadas </ b> das instalacións, deberá saber o seguinte: <br>
                      <ul>
                      <li> <b> Tipo de base de datos </ b> que albergará os datos de Sugar <ul> <li> Compatible base de datos
                      tipos: MySQL, MS SQL Server, Oracle <br><br> </ li> </ ul> </ li>.
                      <li> <b> Nome do servidor web </ b> o da máquina (host) na que se encuentra a base de datos
                      <ul> <li> Esto pode ser <i> localhost </ i> se a base de datos está no equipo local ou se encontra no mesmo servidor web ou da máquina como arquivos de Sugar. <br> </ li> < / ul> </ li>
                      <li> <b> Nome da base de datos </ b> que desexa utilizar para aloxar os datos de Sugar </ li>
                        <ul>
                          <li> É posible que xa teñan unha base de datos existente que desexa utilizar. Se
                          se proporciona o nome dunha base de datos existente, as tabóas da base de datos se
                          se reduxo durante a instalación cando o esquema da base de datos de Sugar está definido. </ li>
                          <li> Se ainda non dispón dunha base de datos, o nome que proporcione utilizarase para
                          a nova base de datos que se crea para a instancia durante a instalación. <br> </ li>
                        </ Ul>
                      <li> Database <b> administrador nome de usuario ey contrasinal </ b> <ul> <li> o administrador de base de datos debe ser capaz de crear tabóas e usuarios e escribir na base de datos. </ li> <li>É posible que necesite
                      póñase en contacto co seu administrador de base de datos para esta información se a base de datos
                      non se encontra no equipo local e/ou si Vostede non é o administrador de base de datos. <br> </ ul> </ li> </ li>
                      <li> Sugar <b> nome de usuario e contrasinal da base de datos </ b>
                      </ Li>
                        <ul>
                          <li> o usuario pode ser o administrador da base de datos, o pode proporcionar o nome de
                          outro usuario de base de datos existente. </ Li>
                          <li> Se desexa crear un novo usuario de base para este propósito, querese 
                          ser capaz de proporcionar un novo nome de usuario e un contrasinal durante o proceso de instalación,
                          e o usuario será creado durante a instalación. </ Li>
                        </ Ul> </ ul> <p>

                      Por encargo <b> </ b> de configuración, é posible que necesite saber o seguinte: <br>
                      <ul>
                      URL <li> <b> que se utilizará para acceder áinstancia de Sugar </ b> despois da sua instalación.
                      Esta URL debe incluir o servidor web ou o nome do equipo ou a dirección IP. <br> </ Li>
                                  <li> [Opcional] <b> Ruta ao directorio de sesión </ b> se desexa utilizar un costume
                                  sesión de directorio de información de Sugar co fin de evitar que os datos de sesión de
                                  ser vulnerable nos servidores compartidos. <br> </ li>
                                  <li> [Opcional] <b> Ruta a un directorio de rexistro personalizado </ b> se desexa reemplazar o directorio predeterminado do rexistro de Sugar. <br> </ li>
                                  <li> [Opcional] <b> ID de aplicación </ b> se desexa anular o auto-xerado
                                  ID que asegura que as sesiones dunha instancia de Sugar non son utilizados por outras instancias. <br> </ Li>
                                  <li> <b> Xogo de caracteres </ b> máis utilizado no entorno local. <br> </ li> </ ul>
                                  Para obter información máis detallada, por favor consulte a Guía de instalación.',
'LBL_WELCOME_PLEASE_READ_BELOW'                    => 'Por favor, lea a seguinte información importante antes de proceder ca instalación. A información axudarálle a determinar se Vostede está listo para instalar a aplicación neste momento.',
'LBL_WELCOME_CHOOSE_LANGUAGE'                      => '<b>escolla o seu idioma</b>',
'LBL_WELCOME_SETUP_WIZARD'                         => 'Asistente de configuración',
'LBL_WELCOME_TITLE_WELCOME'                        => 'Benvenido a SugarCRM',
'LBL_WELCOME_TITLE'                                => 'Asistente de configuración SugarCRM',
'LBL_WIZARD_TITLE'                                 => 'Asistente de configuración Sugar: ',
'LBL_YES'                                          => 'Sí',
'LBL_YES_MULTI'                                    => 'Sí - Multibyte',
'LBL_OOTB_WORKFLOW'                                => 'Tarefas de proceso de fluxo de traballo',
'LBL_OOTB_REPORTS'                                 => 'Executar a xeración de informes Tarefas programadas',
'LBL_OOTB_IE'                                      => 'Comprobe buzóns entrantes',
'LBL_OOTB_BOUNCE'                                  => 'Executar proceso nocturno de devolución de mensaxes de campaña',
'LBL_OOTB_CAMPAIGN'                                => 'Executar campañas de email masivos nocturnos',
'LBL_OOTB_PRUNE'                                   => 'Comprimir base de datos no 1° do mes',
'LBL_OOTB_TRACKER'                                 => 'Comprimir as tabóas rastreador',
'LBL_OOTB_SEND_EMAIL_REMINDERS'                    => 'Executar Notificacións de recordatorio por correo electrónico ',
'LBL_UPDATE_TRACKER_SESSIONS'                      => 'Actualizar tabóa tracker_sessions',
'LBL_OOTB_CLEANUP_QUEUE'                           => 'Limpar cola de traballos',
'LBL_PATCHES_TITLE'                                => 'Instale os parches máis recentes',
'LBL_MODULE_TITLE'                                 => 'Instalar os paquetes de idioma',
'LBL_PATCH_1'                                      => 'Se desexa omitir este paso, faga clic en seguinte.',
'LBL_PATCH_TITLE'                                  => 'Parche do sistema',
'LBL_PATCH_READY'                                  => 'O seguinte parche(es) están listos para ser instalados:',
'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM basase en sesiones de PHP para almacenar información importante mentes está conectado a este servidor web.  A sua instalación de PHP non conta ca información da sesión correctamente configurado.
											<br><br>Unha configuración errónea común é que <b>'session.save_path'</b> directiva no apunta a un directorio válido.  <br>
											<br> Por favor, corrixa a sua <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuración</a> no arquivo local php.ini file aqui abaixo.",
'LBL_SESSION_ERR_TITLE'                            => 'Erro na configuración de sessións de PHP',
'LBL_SYSTEM_NAME'                                  => 'Nome do sistema',
'LBL_COLLATION'                                    => 'Configuración de intercalación',
'LBL_REQUIRED_SYSTEM_NAME'                         => 'Proporcione un nome de sistema para a instancia de Sugar.',
'LBL_PATCH_UPLOAD'                                 => 'Seleccione un arquivo de revisión desde o equipo local',
'LBL_INCOMPATIBLE_PHP_VERSION'                     => 'É necesaria a versión 5 o superior de PHP.',
'LBL_MINIMUM_PHP_VERSION'                          => 'A versión mínima de PHP é 5.1.0. Recomendase usar a versión 5.2.x',
'LBL_YOUR_PHP_VERSION'                             => '(A sua versión actual de PHP é',
'LBL_RECOMMENDED_PHP_VERSION'                      => 'Versión recomendada de PHP é  5.2.x)',
'LBL_BACKWARD_COMPATIBILITY_ON'                    => 'O modo de compatibilidade con versións anteriores Php está encendido. Establecer zend.ze1_compatibility_mode en Off para seguir adiante',


'advanced_password_new_account_email' => array(
'subject'                                          => 'Nova información da cuenta',
'description'                                      => 'Este modelo usase cando o administrador do sistema envía un novo contrasinal dun usuario.',
'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
'txt_body'                                         => 'Aquí está o teu nome de usuario e contrasinal temporal:
Nome de usuario: $ contact_user_user_name
contrasinal: $ contact_user_user_hash

$ config_site_url

Despois de iniciar sesión co contrasinal anterior, pode requerirselle para restablecer o contrasinal da sua propia elección.',
'name'                                             => 'contrasinal do correo electrónico xerado polo sistema',
),


'advanced_password_forgot_password_email' => array(
'subject'                                          => 'Restablecer o contrasinal da conta',
'description'                                      => 'Este modelo utilizase para enviar un usuario faga clic na ligazón para restablecer o contrasinal da cuenta de usuario.',
'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
'txt_body'                                         => 'Vostede solicitó recientemente en $ contact_user_pwd_last_changed para poder restablecer su contrasinal de la cuenta.

faga clic na seguinte ligaón para restablecer o seu contrasinal:

$ contact_user_link_guid',
'name'                                             => '¿Escqueceu o seu contrasinal de correo electrónico?',
),
);?>
