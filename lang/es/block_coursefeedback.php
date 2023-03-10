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
 * Strings for component 'block_coursefeedback', language 'es', version '4.1'.
 *
 * @package     block_coursefeedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpage_html_activefeedbacka'] = 'Encuesta actual:';
$string['adminpage_html_activefeedbackb'] = 'Elija un cuestionario. Este se proporcionará para la evaluación en el bloque "Retroalimentación del curso". <br /> Puedes cambiar las preguntas disponibles en "editar/crear cuestionario".';
$string['adminpage_html_allowhidinga'] = 'Permitir Ocultar';
$string['adminpage_html_allowhidingb'] = 'Si está habilitado, los profesores pueden editar la visibilidad del bloque.';
$string['adminpage_html_defaultlanguagea'] = 'Idioma predeterminado';
$string['adminpage_html_defaultlanguageb'] = 'Se mostrarán las preguntas en el idioma predeterminado si otros idiomas fallan al cargar (es decir, si las preguntas en un idioma preferido por el usuario no están definidas). ¡Eso significa que al menos debe definir todas las preguntas en el idioma predeterminado!';
$string['adminpage_html_notinstalled'] = '\'{$a}\' (no instalado)';
$string['adminpage_html_ratingtresholda'] = 'Umbral de calificación';
$string['adminpage_html_ratingtresholdb'] = 'El número de respuestas necesarias hasta que se muestre una calificación global en el bloque.';
$string['adminpage_html_setstickya'] = 'Pegarlo';
$string['adminpage_html_setstickyb'] = 'Si está habilitada, una instancia de este bloque, que no puede ser borrada por los profesores, aparece en la página principal de cada curso.';
$string['adminpage_link_feedbackedit'] = 'editar/crear encuesta';
$string['caution'] = 'Advertencia';
$string['copyof'] = 'Copia de "{$a}"';
$string['coursefeedback:addinstance'] = 'Añadir este bloque al sitio del curso';
$string['coursefeedback:download'] = 'Guardar el resultado de la retroalimentación del curso actual en un archivo';
$string['coursefeedback:evaluate'] = 'Evaluar la retroalimentación del curso actual';
$string['coursefeedback:managefeedbacks'] = 'Editar la configuración global del bloque de retroalimentación del curso';
$string['coursefeedback:myaddinstance'] = 'Agregue este bloque a la página "Mi página de inicio" (ya que es inútil allí, debería estar prohibido para todos)';
$string['coursefeedback:viewanswers'] = 'Vea el análisis de la retroalimentación actual del curso';
$string['download_html_filename'] = 'Resultados';
$string['download_thead_questions'] = 'Pregunta';
$string['eventevaluated'] = 'Curso evaluado';
$string['eventviewed'] = 'Resiltados vistos';
$string['form_area_questiontext'] = 'Editar texto';
$string['form_header_addlang'] = 'Añadir un texto para otro idioma';
$string['form_header_confirm'] = 'Confirmación necesaria';
$string['form_header_deleteanswers'] = 'Eliminar respuestas de usuario';
$string['form_header_deletelang'] = 'Eliminar idioma(s)';
$string['form_header_editfeedback'] = 'Editar encuesta';
$string['form_header_editquestion'] = 'Editar pregunta';
$string['form_header_newfeedback'] = 'Nueva encuesta';
$string['form_header_newquestion'] = 'Nueva pregunta';
$string['form_header_question'] = 'Pregunta {$a}';
$string['form_html_currentlang'] = 'Estás editando {$a}';
$string['form_html_deleteanswerstext'] = 'El cuestionario no se puede editar ahora mismo, ya que hay respuestas de los usuarios. Puede eliminar ahora todas las respuestas o copiar las retroalimentaciones.';
$string['form_html_deleteanswerswarning'] = 'Estos datos se perderán irremediablemente al eliminar las respuestas del usuario. <br/> Asegúrese de que estos datos ya no son necesarios';
$string['form_html_nolangimplemented'] = 'Esta retroalimentación no tiene idiomas implementados.';
$string['form_html_notextendable'] = 'No puede extender esta pregunta porque no hay idiomas adicionales disponibles.';
$string['form_select_changepos'] = 'Determinar la nueva posición';
$string['form_select_confirmyesno'] = '¿Realmente desea eliminar?';
$string['form_select_deleteanswers'] = '¿Eliminar respuestas de usuario?';
$string['form_select_newlang'] = 'Idioma';
$string['form_select_unwantedlang'] = 'Seleccine idioma <br/><span style="font-size: x-small;">(respuesta múltiple disponible)<span>';
$string['form_submit_feedbacksubmit'] = 'Guardar evaluación';
$string['page_headline_admin'] = 'Administración de la retroalimentación del curso';
$string['page_headline_listoffeedbacks'] = 'Lista de encuestas';
$string['page_headline_listofquestions'] = 'Cuestionario de \'{$a}\\';
$string['page_html_activated'] = 'La retroalimentación del curso ({$ a}) se ha registrado como la encuesta actual.';
$string['page_html_answersdeleted'] = 'Las respuestas del usuario han sido eliminadas.';
$string['page_html_courserating'] = 'Calificación del curso';
$string['page_html_editallquestions'] = 'Aplicar a todos los idiomas';
