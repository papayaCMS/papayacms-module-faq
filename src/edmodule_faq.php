<?php
/**
* Module FAQ
*
* FAQ-management
*
* @copyright 2002-2007 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya-Modules
* @subpackage Free-FAQ
* @version $Id: edmodule_faq.php 39504 2014-03-04 11:15:22Z weinert $
*/

/**
* Module FAQ
*
* FAQ-management
*
* @package Papaya-Modules
* @subpackage Free-FAQ
*/
class edmodule_faq extends base_module {

  /**
  * Permissions
  * @var array $permissions
  */
  var $permissions = array(
    1 => 'Manage',
    2 => 'Edit Entries/Comments',
    3 => 'Edit FAQs/Groups'
  );


  /**
  * Function for execute module
  *
  * @access public
  */
  function execModule() {
    if ($this->hasPerm(1, TRUE)) {
      $faq = new admin_faq;
      $faq->module = $this;
      $faq->layout = $this->layout;

      // parameter etc einlesen
      $faq->initialize();
      // aus init verarbeiten
      $faq->execute();
      // daten ausgeben keine datenbankaktionen
      $faq->getXML();
    }
  }
}

