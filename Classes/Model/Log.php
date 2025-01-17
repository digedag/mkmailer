<?php

namespace DMK\MkMailer\Model;

use Sys25\RnBase\Domain\Model\BaseModel;

/***************************************************************
*  Copyright notice
*
*  (c) 2017 Dorit Wittig (dorit.wittig@dmk-ebusiness.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Achtung: Für diese Tabelle existiert kein TCA-Eintrag!
 *
 * @license         http://www.gnu.org/licenses/lgpl.html
 *                  GNU Lesser General Public License, version 3 or later
 */
class Log extends BaseModel
{
    /**
     * (non-PHPdoc).
     *
     * @see BaseModel::getTableName()
     */
    public function getTableName()
    {
        return 'tx_mkmailer_log';
    }
}
