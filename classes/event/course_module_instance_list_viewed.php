<?php

/**
 * Mod_slideshow
 *
 * Provides the course_module_viewed class.
 *
 * @package   mod_slideshow
 * @category    event
 * @copyright 2021, Dawson College (Marc Charbonneau) <mcharbonneau@dawsoncollege.qc.ca>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_slideshow\event;

defined('MOODLE_INTERNAL') || die();

/**
 * Class of the mod_slideshow instance list viewed event class.
 *
 * @copyright 2021, Dawson College (Marc Charbonneau) <mcharbonneau@dawsoncollege.qc.ca>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_module_instance_list_viewed extends \core\event\course_module_instance_list_viewed {
    // No code required here as the parent class handles it all.
}
