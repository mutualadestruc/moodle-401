<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_tenant', language 'es', version '4.1'.
 *
 * @package     tool_tenant
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetenants'] = 'Micrositios activos';
$string['addtenant'] = 'Nuevo micrositio';
$string['adduser'] = 'Nuevo usuario';
$string['admin'] = 'Administrador';
$string['administrators'] = 'Administradores';
$string['advanced'] = 'Avanzado';
$string['advancedbrandingwarning'] = 'Cualquier cambio que realices aquí puede impactar en la accesibilidad del sitio y en la experiencia de usuario.';
$string['allocateusers'] = 'Asignar usuarios';
$string['alltenants'] = 'Todos los micrositios';
$string['alltenantsselected'] = 'Usuarios en todos los micrositios (incluyendo los futuros)';
$string['allusers'] = 'Todos los usuarios';
$string['andxmoretenants'] = 'y {$a} más...';
$string['archive'] = 'Archivar';
$string['archivedtenants'] = 'Micrositios archivados';
$string['archivetenant'] = 'Archivar micrositio';
$string['assigntenantadmins'] = 'Agregar a administradores de micrositio';
$string['authdisabledavailable'] = 'Deshabilitado, habilitado';
$string['autheditstatus'] = 'Editar estado';
$string['authenabledoptional'] = 'Habilitado, opcional';
$string['authmethod'] = 'Método de autenticación';
$string['authnewstatusfor'] = 'Nuevo estado para {$a}';
$string['authpluginsettings'] = '{$a}. Ajustes';
$string['authtypeofloginwarning'] = 'Algunos micrositios utilizan métodos de autenticación específicos. Para ofrecer una experiencia uniforme a los usuarios de aplicaciones móviles, la recomendación es cambiar la configuración \'typeoflogin\' de \'A través de la aplicación\' a otra opción en la <a href="{$a}">página de autenticación móvil</a>.';
$string['basicinformation'] = 'Información básica';
$string['brand'] = 'Color primario';
$string['brand_help'] = '';
$string['branding'] = 'Branding';
$string['buttoncolour'] = 'Color de botón principal';
$string['buttoncolour_help'] = 'Color de fondo de los botones principales';
$string['cachedef_mytenant'] = 'Información sobre el micrositio actual';
$string['cachedef_tenants'] = 'Listado de micrositios';
$string['cannotallocateusertotenant'] = '';
$string['cannotarchivetenant'] = 'No se puede archivar el micrositio por defecto.';
$string['category'] = 'Categoría de cursos';
$string['category_help'] = 'A los administradores de micrositios se les asignará automáticamente el rol de "Administrador de micrositio en la categoría de cursos" en esta categoría de cursos. Podrán crear cursos, asignar roles, etc.
A todos los usuarios de los respectivos micrositios se les asignará automáticamente el rol de \'Usuario de micrositio\' en esta categoría.<br><br>Solo las categorías en el nivel superior se pueden seleccionar como categorías de micrositios.<br>
Si se selecciona \'Nueva categoría\', se creará una categoría con el mismo nombre que el nombre del micrositio.';
$string['categorynameexist'] = 'La categoría con el nombre \'{$a}\' ya existe en el nivel superior. Por favor, seleccionar esta categoría o elegir otro nombre';
$string['categorynameexistws'] = 'La categoría con el nombre \'{$a}\' ya existe en el nivel superior. Por favor, modificar el nombre del micrositio o crearlo sin categoría';
$string['categorynotfound'] = 'Categoría no encontrada o no está en el nivel superior';
$string['categorytaken'] = 'Esta categoría es asignada a otro micrositio.';
$string['changesite'] = 'Cambiar sitio';
$string['chooseexistingcategory'] = 'Elegir una categoría existente';
$string['colours'] = 'Colores';
$string['conditionuserallocateddescription'] = 'Usuarios asignados al micrositio \'{$a}\'';
$string['conditionusernotallocateddescription'] = 'Usuarios no asignados al micrositio \'{$a}\'';
$string['configoverride'] = 'Anular';
$string['configureoauth2link'] = 'Configurar servicios OAuth 2';
$string['configusedefault'] = 'Uso por defecto';
$string['confirmallocateusers'] = '¿Estás seguro de asignar los usuarios seleccionados al micrositio seleccionado?';
$string['confirmarchivetenant'] = '¿Estás seguro de archivar el micrositio \'{$a}\'? Todos los usuarios asignados a este micrositio se moverán al micrositio por defecto.';
$string['confirmassigntenantadmins'] = '¿Estás seguro de querer agregar los usuarios seleccionados a la lista de administradores del micrositio?';
$string['confirmdeletetenant'] = '¿Estás seguro de querer borrar el micrositio \'{$a}\'? Esta acción no se puede deshacer.';
$string['confirmdeleteuser'] = '¿Estás seguro de querer borrar este usuario? Esta acción no se puede deshacer.';
$string['confirmdeleteusers'] = '¿Estás seguro de querer borrar los usuarios seleccionados? Esta acción no se puede deshacer.';
$string['confirmresendemailuser'] = '¿Estás seguro de volver a enviar un correo electrónico de confirmación a este usuario?';
$string['confirmresendemailusers'] = '¿Estás seguro de volver a enviar un correo electrónico de confirmación a estos usuarios? Esta acción no se puede deshacer.';
$string['confirmrestoretenant'] = '¿Estás seguro de restaurar el micrositio \'{$a}\'?';
$string['confirmsuspenduser'] = '¿Estás seguro de suspender este usuario?';
$string['confirmsuspendusers'] = '¿Estás seguro de suspender los usuarios seleccionados?';
$string['confirmunassigntenantadmins'] = '¿Estás seguro de quitar a los usuarios seleccionados de la lista de administradores del micrositio?';
$string['confirmunsuspenduser'] = '¿Estás seguro de querer reactivar este usuario?';
$string['confirmunsuspendusers'] = '¿Estás seguro de querer reactivar este listado de usuarios?';
$string['confirmuser'] = 'Confirmar usuario';
$string['confirmusers'] = 'Confirmar usuarios';
$string['createnewcategory'] = 'Crear una nueva categoría';
$string['customcss'] = 'SCSS personalizado';
$string['defaultdashboardconfiguration'] = 'Configuración del Área personal por defecto';
$string['defaultname'] = 'Micrositio por defecto';
$string['defaultsitedashboardpage'] = 'Página del área personal por defecto';
$string['defaulttenantmobileconfig'] = 'Este es el micrositio por defecto, por lo tanto, la aplicación móvil siempre usará su configuración.';
$string['deletetenant'] = 'Eliminar micrositio';
$string['deleteuser'] = 'Eliminar usuario';
$string['deleteusers'] = 'Eliminar usuarios';
$string['editdashboard'] = 'Editar el área personal';
$string['editdashboarddescription'] = 'Editar sólo el área personal de este micrositio.';
$string['editdetails'] = 'Editar detalles';
$string['editdetailsinsharedspace'] = 'Editar en el Espacio compartido';
$string['editingdashboard'] = 'Estás editando el área personal para \'{$a}\'';
$string['editingsitedashboard'] = 'Estás editando la página del área personal por defecto';
$string['edittenant'] = 'Editar micrositio \'{$a}\'';
$string['edittenantname'] = 'Editar nombre';
$string['edituser'] = 'Editar cuenta de usuario';
$string['edituserwithname'] = 'Editar usuario \'{$a}\'';
$string['emailsconfirmationresend'] = 'Reenviar correo electrónico de confirmación';
$string['enablesharedspace'] = 'Habilitar Espacio compartido';
$string['enrolinseparategroups'] = 'Este curso puede ser compartido con otros micrositios, pero los usuarios de distintos micrositios se asignarán a grupos separados';
$string['enrolwithoutgroups'] = 'Usuarios de este micrositio serán matriculados en este curso y podrán verse entre sí debido a que este curso no está configurado para grupos separados';
$string['errorcannotallocate'] = 'No se puede asignar el usuario al micrositio';
$string['errorinvalidtenant'] = 'Micrositio inválido \'{$a}\'';
$string['errornewcategorytenant'] = 'Los parámetros \'autocreatecategory\' y \'categoryid\' no pueden usarse en simultáneo';
$string['errornopermissionaddcondition'] = 'Disculpas, pero no tenés permisos para ver el listado de micrositios';
$string['errortenantarchived'] = 'Este micrositio ha sido archivado';
$string['errortenantnotfound'] = 'Este micrositio no existe';
$string['errorurlnotavailable'] = 'Al menos una URL de inicio de sesión debe estar disponible.';
$string['eventtenantcreated'] = 'Micrositio creado';
$string['eventtenantdeleted'] = 'Micrositio eliminado';
$string['eventtenantupdated'] = 'Micrositio actualizado';
$string['eventtenantusercreated'] = 'Usuario asignado a un micrositio';
$string['eventtenantuserupdated'] = 'Se modificó la asignación del usuario a un micrositio';
$string['favicon'] = 'Favicon';
$string['footertext'] = 'Texto de pie de página';
$string['forceforalltenants'] = 'Forzar para todos los micrositios';
$string['gotosharedspace'] = 'Ir al Espacio compartido';
$string['headerlogo'] = 'Logo de la cabecera';
$string['headerlogo_help'] = 'Una versión compacta del logotipo, como un emblema o ícono que se usa en la barra de navegación superior.';
$string['idnumber'] = 'Número de ID';
$string['idnumber_help'] = 'El número de ID de un micrositio sólo se usa cuando se compara con sistemas externos o en la herramienta Subir usuarios. No se muestra en ninguna parte del sitio. Si el micrositio tiene un código oficial, se puede ingresar, de lo contrario, el campo se puede dejar en blanco.';
$string['images'] = 'Imágenes';
$string['invalidcolour'] = 'Este código de color no tiene el formato correcto. Utilice el formato #000 o #000000.';
$string['ismultitenant'] = 'Multi-micrositio';
$string['issuernologin'] = 'Este emisor no se puede utilizar para iniciar sesión';
$string['linkalltenants'] = 'Vincular todos los micrositios...';
$string['linkalltenantscheckbox'] = 'También restablecer el área personal para todos los usuarios en los micrositios afectados';
$string['linkalltenantsdescription'] = 'Esta acción reiniciará todos los micrositios que no estén vinculados con la página del Área personal por defecto y los mantendrá vinculados con esta página a partir de ahora.';
$string['linkalltenantsmessage'] = 'Todos los micrositios fueron vinculados con éxito.';
$string['linkdashboard'] = 'Eliminar área personal customizada, usar el área personal por defecto...';
$string['linkdashboarddescription'] = 'Actualmente, esta área personal no está sincronizada con el contenido definido en "Página del Área personal por defecto". Hacer clic en este botón para volver a sincronizarlo. Al hacerlo, cualquier cambio realizado en la "Página del Área personal por defecto" afectará a esta área personal.<br>Esta acción se puede deshacer en el futuro.';
$string['linkdashboarddescriptionforadmin'] = 'Actualmente, esta área personal no está sincronizada con el contenido definido en "Página del Área personal por defecto". Hacer clic en este botón para volver a sincronizarlo. Al hacerlo, cualquier cambio realizado en la "Página del Área personal por defecto" afectará a esta área personal.<br>Esta acción se puede deshacer en el futuro.';
$string['linkdashboardmessage'] = 'El área personal se vinculó con éxito';
$string['linkeddashboard'] = 'Vinculada con la "Página del área personal por defecto".';
$string['loginbackground'] = 'Imagen de fono para el inicio de sesión';
$string['loginlogo'] = 'Logo para el inicio de sesión';
$string['loginurl'] = 'URL para iniciar sesión';
$string['lookingfordifferentsite'] = '¿Estás buscando otro micrositio?';
$string['management'] = 'Administrar';
$string['managetenants'] = 'Administrar micrositios';
$string['migrationcoursecategories'] = 'Categorías de cursos, con cohortes y estructuras de curso';
$string['migrationcreate'] = 'Crear un nuevo micrositio';
$string['migrationdestinationsummary'] = 'Destino: {$a}';
$string['migrationexporterdescription'] = 'Micrositios junto con todas las entidades contenidas por ellos';
$string['migrationlogerror'] = 'No se pudo importar el micrositio \'{$a}\'';
$string['migrationlogsuccess'] = 'Micrositio importado \'<a href="{$a->url}">{$a->name}</a>\'';
$string['migrationmappingerror'] = 'Algunos micrositios no existen';
$string['migrationmappingerrorlog'] = 'El micrositio {$a} no fue encontrado';
$string['migrationselectalltenants'] = 'Seleccionar todos los micrositios';
$string['migrationselectexcludingarchived'] = 'Seleccionar todos los micrositios (excluyendo los archivados)';
$string['migrationselectincludingarchived'] = 'Seleccionar todos los micrositios (incluyendo los archivados)';
$string['migrationselectmanually'] = 'Seleccionar los micrositios manualmente...';
$string['missingtenant'] = 'No se encuentra el micrositio';
$string['movebetweentenants'] = 'Mover entre micrositios';
$string['movetenant'] = 'Mover micrositio \'{$a}\'';
$string['name'] = 'Nombre del micrositio';
$string['namewithempty'] = 'Nombre del micrositio (incluyendo sin micrositio)';
$string['navbarcolour'] = 'Color de la barra de navegación';
$string['navbarcolour_help'] = 'Color de fondo de la barra superior de navegación';
$string['newname'] = 'Nuevo micrositio \'{$a}\'';
$string['newnamefor'] = 'Nuevo nombre para \'{$a}\'';
$string['nocategory'] = 'Sin categoría';
$string['nomanualassignment'] = 'Este rol no puede ser asignado manualmente en ningún contexto';
$string['notavailablefortenants'] = 'No disponible en ningún micrositio';
$string['notnow'] = 'No ahora';
$string['notspecified'] = 'Sin especificar';
$string['oauth2_alltenants'] = 'El servicio está disponible para todos los micrositios (incluyendo los futuros)';
$string['oauth2_exceptfollowingtenants'] = 'El servicio está disponible para todos los micrositios excepto los siguiente';
$string['oauth2_onlyfollowingtenants'] = 'Este servicio está disponible sólo para los siguientes micrositios';
$string['oauth2_tenantavailability_success'] = '';
$string['organisationadmintab'] = 'Estructura de la organización';
$string['outcomeallocation'] = 'Asignar usuarios al micrositio';
$string['outcomeallocationdescription'] = 'Asignar usuarios al micrositio \'{$a}\'';
$string['pluginname'] = 'Multi-micrositios';
$string['primary'] = 'Links';
$string['primary_help'] = 'El color utilizado para links y elementos interactivos.';
$string['privacy:metadata:user'] = 'Asignación de usuarios a micrositios';
$string['privacy:metadata:user:id'] = 'ID';
$string['privacy:metadata:user:reason'] = 'Motivo de la matriculación';
$string['privacy:metadata:user:tenantid'] = 'MIcrositio';
$string['privacy:metadata:user:userid'] = 'Usuario';
$string['privacy:metadata:user:usermodified'] = 'Usuarios que modificaron el registro';
$string['profilecategory_alltenants'] = 'Esta categoría está disponible para todos los micrositios (incluyendo los futuros)';
$string['profilecategory_exceptfollowingtenants'] = 'Esta categoría está disponible para todos los micrositios excepto el siguiente';
$string['profilecategory_onlyfollowingtenants'] = 'Esta categoría está disponible sólo para los siguientes micrositios';
$string['reg_wptenants'] = 'Cantidad de micrositios ({$a})';
$string['resendemailsentfail'] = '{$a} usuario(s) no encontrados o no se pudo enviar el correo electrónico de confirmación';
$string['resendemailsentsuccess'] = 'Correo electrónico de confirmación enviado a {$a} usuario(s)';
$string['resendemailuser'] = 'Reenviar correo electrónico al usuario';
$string['resetappearance'] = 'Reiniciar apariencia';
$string['resetdashboard'] = 'Reiniciar el área personal para todos los usuarios...';
$string['resetdashboarddescription'] = 'Reiniciar el área personal para todos los usuarios de este micrositio únicamente.';
$string['resetdashboarddialog'] = 'Al continuar, el área personal se reiniciará para todos los usuarios. <br><br>Esta acción no se puede deshacer.';
$string['resetdashboarddialogforadmin'] = 'Al continuar, el área personal se reiniciará para todos los usuarios de este micrositio. <br><br>Esta acción no se puede deshacer.';
$string['resetdashboardmessage'] = 'El área personal fue reiniciada para todos los usuarios con éxito.';
$string['resetlinkeddashboard'] = 'Reiniciar el área personal para todos los usuarios de los micrositios vinculados...';
$string['resetlinkeddashboarddialog'] = 'Al proceder, el área personal se reiniciará para todos los usuarios de los micrositios vinculados. <br><br> Esta acción no se puede deshacer';
$string['resetlinkeddashboardmessage'] = 'El área personal de todos los usuarios fue reiniciado con éxito.';
$string['resettenantappearance'] = 'Reiniciar la apariencia del micrositio';
$string['resettenantappearancecolours'] = 'Reiniciar todos los colores personalizados';
$string['resettenantappearancecss'] = 'Eliminar SCSS personalizado';
$string['resettenantappearancedesc'] = 'Haciendo clic en este botón, podrás seleccionar qué elementos (imágenes, colores, etc.) se restaurarán a los estándar de accesibilidad.';
$string['resettenantappearancefooter'] = 'Eliminar el texto del pie de página';
$string['resettenantappearanceformend'] = 'Esta acción no se puede deshacer';
$string['resettenantappearanceformintro'] = 'Reiniciar la configuración de este micrositio a su configuración de accesibilidad por defecto.<br> Esta acción implicará:';
$string['resettenantappearanceimages'] = 'Eliminar todas las imágenes subidas (logo, imagen de fondo)';
$string['restoretenant'] = 'Restaurar micrositio';
$string['seealltenants'] = 'Ver todos';
$string['selecttenant'] = 'Seleccionar micrositio';
$string['selecttenantoutcome'] = 'Seleccionar micrositio';
$string['selecttenants'] = 'Seleccionar micrositio';
$string['selectuser'] = 'Seleccionar usuario \'{$a}\'';
$string['sharedspace'] = 'Espacio compartido';
$string['sharedspaceconfirmationtext'] = 'El Espacio compartido es un lugar para compartir entidades y contenidos entre todos los micrositios. Todo lo que crees en este espacio estará disponible instantáneamente para los usuarios de cualquier micrositio que tengan los permisos correctos. <br/> Una vez que el Espacio compartido se activa, no puede desactivarse.<br/> ¿Quisieras habilitar el Espacio compartido?';
$string['sharedspaceenabledmessage'] = 'El espacio compartido se habilitó con éxito. Usar el selector de micrositio que se encuentra en la barra de navegación para acceder a él.';
$string['showintenantselector'] = 'Mostrar este micrositio en el selector de inicio de sesión';
$string['showintenantselector_help'] = 'Al habilitar esta opción, este micrositio será listado en la página de inicio de sesión de cada micrositio como una página de inicio alternativa.';
$string['showtenantselector'] = 'Mostrar selector de micrositio en la página de inicio de sesión';
$string['showtenantselector_help'] = 'Al habilitar esta opción, los usuarios podrán cambiar entre diferentes micrositios en la página de inicio de sesión. Cada micrositio puede configurar individualmente su visibilidad en esta lista.';
$string['sitename'] = 'Nombre del sitio';
$string['sitename_help'] = 'Permite sobreescribir el nombre por defecto de este sitio para los usuarios de este micrositio';
$string['siteshortname'] = 'Nombre corto del sitio';
$string['siteshortname_help'] = 'Permite anular el nombre abreviado predeterminado del sitio para los usuarios de este arrendatario. <br> El nombre abreviado del sitio se mostrará en el encabezado si el campo "Logotipo del encabezado" (en la configuración de la marca del arrendatario) se deja vacío.';
$string['siteuserlimit'] = 'Límite de usuarios del sitio';
$string['siteuserlimit_desc'] = 'Cantidad máxima de cuentas permitida en este sitio';
$string['siteuserlimitenabled'] = 'Habilitar el límite de usuarios del sitio';
$string['status'] = 'Estado';
$string['suspenduser'] = 'Usuario suspendido';
$string['suspendusers'] = 'Usuarios suspendidos';
$string['switchedto'] = 'Has cambiado a \'{$a}\'';
$string['switchtenant'] = 'Cambiar de micrositio';
$string['tenant'] = 'Micrositio';
$string['tenant:allocate'] = 'Asignar usuarios a todos los micrositios';
$string['tenant:authconfig'] = 'Editar la configuración de autenticación del micrositio';
$string['tenant:browseusers'] = 'Explorar usuarios en el micrositio actual';
$string['tenant:manage'] = 'Administrar la adición y edición de micrositios';
$string['tenant:managedashboard'] = 'Administrar los ajustes para el Área personal del micrositio actual';
$string['tenant:managetheme'] = 'Administrar la configuración del tema para el micrositio actual';
$string['tenant:manageusers'] = 'Agregar y editar usuarios del micrositio actual';
$string['tenant:mobileconfig'] = 'Editar la configuración móvil del micrositio';
$string['tenantadmin'] = 'Administrador de micrositio';
$string['tenantadminalreadyassigned'] = '{$a} usuario(s) omitido(s) porque ya son administradores de micrositio';
$string['tenantadminalreadyunassigned'] = '{$a} usuario(s) omitido(s) porque no son administradores de micrositio';
$string['tenantadmincapabilitieslimit'] = 'Los permisos que no son compatibles con Multiusuario no se enumeran aquí. <a href="{$a}">Más información</a>';
$string['tenantadministration'] = 'Administración del micrositio';
$string['tenantadministrator'] = 'Este usuario es administrador de micrositio';
$string['tenantadmins'] = 'Administradores de micrositio';
$string['tenantavailability'] = 'Editar disponibilidad del micrositio';
$string['tenantavailabilityfor'] = 'Disponibilidad del micrositio para \'{$a}\'';
$string['tenantcategorycapabilitieslimit'] = 'Aquí sólo se enumeran los permisos que se pueden establecer en el contexto de la categoría de cursos.';
$string['tenantdetails'] = 'Detalles';
$string['tenantlimit'] = 'Límite de micrositios';
$string['tenantlimit_desc'] = 'Número máximo de micrositios permitidos en el sistema, se contabilizan los activos y los archivados.';
$string['tenantlimitenabled'] = 'Habilitar el límite de micrositios';
$string['tenantlimitenabled_desc'] = 'Si se habilita es posible limitar el número de micrositios en este sitio.';
$string['tenantlimitreached'] = 'Se alcanzó el límite de micrositios.';
$string['tenantlimitreached1'] = 'La característica de multisitio no está habilitada en este sitio';
$string['tenantlimitreachedmult'] = 'Solo pueden crear {$a} micrositios en este sitio. Tener en cuenta que los micrositios archivados también se contabilizan.';
$string['tenantmanager'] = 'Administrador de micrositio en la categoría de cursos';
$string['tenantnotfound'] = 'Micrositio no encontrado';
$string['tenants'] = 'Micrositios';
$string['tenantselectorlogo'] = 'Logotipo para el selector de microstio';
$string['tenantselectorlogo_help'] = 'Este logotipo ayudará a identificar a este micrositio en el selector de micrositios del inicio de sesión (si la función de selector de micrositios está habilitada). Si no se especifica, se utilizará el logotipo de inicio de sesión.';
$string['tenantsexceptselected'] = 'Usuarios de todos los micrositios excepto los siguientes';
$string['tenantsexceptselecteddesc'] = 'Usuarios de todos los micrositios excepto los siguientes:  {$a}';
$string['tenantsselected'] = 'Usuarios en los siguientes micrositios';
$string['tenantsselecteddesc'] = 'Usuarios en los siguientes micrositios: {$a}';
$string['tenantuser'] = 'Usuario de micrositio';
$string['tenantuserdescription'] = 'El rol de usuario del micrositio. Asignado automáticamente a todos los usuarios de micrositio en el contexto de su categoría de curso.';
$string['tenantuserlimit'] = 'Límite del usuario de micrositio';
$string['tenantuserlimit_desc'] = 'Máximo de cuentas de usuarios permitido por micrositio.';
$string['tenantuserlimitenabled'] = 'Habilitar el límite de usuarios del micrositio';
$string['tenantusers'] = 'Usuarios del micrositio';
$string['themesettingssaved'] = 'Los ajustes del tema fueron guardados. Puede tomar varios minutos hasta que los cambios sean visibles en el sitio.';
$string['toomanytenantstoshow'] = 'Demasiados micrositios para mostrar';
$string['unassigntenantadmins'] = 'Eliminar de los administradores de micrositio';
$string['unlinkdashboard'] = 'Crear un área personalizada...';
$string['unlinkdashboarddescription'] = 'Actualmente, el área personal de este micrositio está vinculado al contenido definido en el "Área personal del micrositio por defecto". Clic en este botón para crear una página de Área personal para este micrositio que puede ser configurada individualmente.<br> Esta acción puede deshacerse en el futuro.';
$string['unlinkdashboarddescriptionforadmin'] = 'Actualmente, el área personal de este micrositio está vinculado al contenido definido en el "Área personal del micrositio por defecto". Clic en este botón para crear una página de Área personal para este micrositio que puede ser configurada individualmente.<br> Esta acción puede deshacerse en el futuro.';
$string['unlinkdashboarddialog'] = 'Al continuar, este área personal ya no estará vinculado al contenido definido en el "Área personal del sitio por defecto". En su lugar, se convertirá en un área personal independiente que se puede configurar individualmente.<br><br>Los paneles individuales de los usuarios existentes no se cambiarán.<br><br>Esta acción se puede deshacer en el futuro';
$string['unlinkdashboarddialogforadmin'] = 'Al continuar, este área personal del micrositio ya no estará vinculado al contenido definido en el "Área personal del sitio por defecto". En su lugar, se convertirá en un área personal independiente que se puede configurar individualmente.<br><br> El área personal no se reiniciará inmediatamente para los usuarios del micrositio. De todos modos, puede hacerse manualmente después.<br><br> Esta acción se puede deshacer en el futuro';
$string['unlinkdashboardmessage'] = 'El área personal fue correctamente desvinculada';
$string['unlinkeddashboard'] = 'Desvinculado';
$string['unsuspenduser'] = 'Reactivar usuario';
$string['unsuspendusers'] = 'Usuarios reactivados';
$string['useralreadyconfirmedinfo'] = '{$a} usuario(s) omitido(s) como ya confirmado(s)';
$string['userconfirmedfail'] = '{$a} usuario(s) no encontrado(s) o no pudo/ieron ser confirmado(s)';
$string['userconfirmedsuccess'] = '{$a} usuaario(s) confirmado(s)';
$string['userdeletedfail'] = '{$a} usuario(s) no encontrado(s) o no pudo/ieron ser eliminados';
$string['userdeletedsuccess'] = '{$a} usuario(s) eliminados';
$string['usermanagement'] = 'Administración de usuarios';
$string['usermovetotenant'] = '{$a->count} usuario(s) movidos al micrositio: {$a->tenant}';
$string['usernotmovetotenant'] = '{$a->count} usuario(s) no pudo/ieron ser movidos al micrositio: {$a->tenant}';
$string['usersallocatedtotenant'] = 'Usuarios asignados al micrositio';
$string['usersassignedtenantadminfail'] = 'No se pudo agregar {$a} usuario(s) a la lista de administadores de micrositio';
$string['usersassignedtenantadminsuccess'] = 'Se agregó/aron {$a} usuario(s) a la lista de administadores de micrositio';
$string['userscount'] = 'Usuarios';
$string['userslimitreached'] = 'Se alcanzó el límite de cuentas de usuarios';
$string['usersnotallocatedtotenant'] = 'Usuarios no asignados al micrositio';
$string['userssuspendedfail'] = '{$a} usuario(s) no fue(ron) encontrado(s) o no pudo/ieron ser suspendido(s)';
$string['userssuspendedsuccess'] = '{$a} usuario(s) suspendido(s)';
$string['usersunassignedtenantadminfail'] = 'No se pudo remover {$a} usuario(s) de la lista de administadores del micrositio';
$string['usersunassignedtenantadminsuccess'] = 'Se pudo remover {$a} usuario(s) de la lista de administadores del micrositio';
$string['usersunsuspendedfail'] = '{$a} usuario(s) no fue(ron) encontrado(s) o no pudo/ieron reactivarse';
$string['usersunsuspendedsuccess'] = '{$a} usuario(s) reactivado(s)';
$string['usersuspendedsuccess'] = 'Usuario suspendido satisfactoriamente';
$string['usertenant'] = 'Usuario de micrositio';
$string['userunsuspendedsuccess'] = 'Usuario reactivado satisfactoriamente';
$string['viewusers'] = 'Administrar micrositio \'{$a}\'';
