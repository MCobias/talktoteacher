<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package    Block talk to
 * @copyright  2019 Marcelo Cobias
 * @author     Marcelo Cobias <marcelocobias18@fmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_talk_to;

defined('MOODLE_INTERNAL') || die();

/**
 * Exception thrown when a message fails to send.
 */
class message_failed_exception extends \moodle_exception {

    /**
     * Set exception message.
     */
    public function __construct() {
        parent::__construct('messagefailed', 'block_talk_to');
    }
}
