<?php
/**
 * @package    Block talk to
 * @copyright  2019 Marcelo Cobias
 * @author     Marcelo Cobias <marcelocobias18@fmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'block/talk_to:myaddinstance' => array(
    'captype' => 'write',
    'contextlevel' => CONTEXT_SYSTEM,
    'archetypes' => array(
        'user' => CAP_ALLOW
    ),

    'clonepermissionsfrom' => 'moodle/my:manageblocks'
    ),

    'block/talk_to:addinstance' => array(
    'riskbitmask' => RISK_SPAM | RISK_XSS,

    'captype' => 'write',
    'contextlevel' => CONTEXT_BLOCK,
    'archetypes' => array(
        'editingteacher' => CAP_ALLOW,
        'manager' => CAP_ALLOW
    ),

    'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),
);
