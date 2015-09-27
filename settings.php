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
 * Settings that allow configuration of the list of tex examples in the matrix editor.
 *
 * @package    atto_matrix
 * @copyright  2015 Geoffrey Rowland <rowland dot geoff at gmail dot com>
 * Based on    @package atto_equation
 * @copyright  2013 Damyon Wiese <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_matrix', new lang_string('pluginname', 'atto_matrix')));

$settings = new admin_settingpage('atto_matrix_settings', new lang_string('settings', 'atto_matrix'));
if ($ADMIN->fulltree) {
    // Group 1.
    $name = new lang_string('librarygroup1', 'atto_matrix');
    $desc = new lang_string('librarygroup1_desc', 'atto_matrix');
    $default = '
\left(  \right)
\left[  \right]
\left\{  \right\}
\left|  \right|
\left\|  \right\|
\left \langle  \right \rangle
\left \lceil  \right \rceil
\left \lfloor  \right \rfloor
\left(  \middle|  \right)
\left[  \middle|  \right]
\left\{  \middle|  \right\}
\left|  \middle|  \right|
\left\|  \middle|  \right\|
\left \langle  \middle|  \right \rangle
\left \lceil  \middle|  \right \rceil
\left \lfloor  \middle|  \right \rfloor
+
-
\times
\cdot
\ast
=
\neq
\Rightarrow
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup1',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 2.
    $name = new lang_string('librarygroup2', 'atto_matrix');
    $desc = new lang_string('librarygroup2_desc', 'atto_matrix');
    $default = '
\big(  \big)
\big[  \big]
\big\{  \big\}
\big|  \big|
\big\|  \big\|
\big \langle  \big \rangle
\big \lceil  \big \rceil
\big \lfloor  \big \rfloor
\Big(  \Big)
\Big[  \Big]
\Big\{  \Big\}
\Big|  \Big|
\Big\|  \Big\|
\Big \langle  \Big \rangle
\Big \lceil  \Big \rceil
\Big \lfloor  \Big \rfloor
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup2',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 3.
    $name = new lang_string('librarygroup3', 'atto_matrix');
    $desc = new lang_string('librarygroup3_desc', 'atto_matrix');
    $default = '
\bigg(  \bigg)
\bigg[  \bigg]
\bigg\{  \bigg\}
\bigg|  \bigg|
\bigg\|  \bigg\|
\bigg \langle  \bigg \rangle
\bigg \lceil  \bigg \rceil
\bigg \lfloor  \bigg \rfloor
\Bigg(  \Bigg)
\Bigg[  \Bigg]
\Bigg\{  \Bigg\}
\Bigg|  \Bigg|
\Bigg\|  \Bigg\|
\Bigg \langle  \Bigg \rangle
\Bigg \lceil  \Bigg \rceil
\Bigg \lfloor  \Bigg \rfloor
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup3',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 4.
    $name = new lang_string('librarygroup4', 'atto_matrix');
    $desc = new lang_string('librarygroup4_desc', 'atto_matrix');
    $default = '
\begin{matrix} a_{1,1} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & a_{1,3} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & \cdots & a_{1,n} \end{matrix}
\begin{matrix} a_{1,1} \\\\ a_{2,1} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} \\\\ a_{2,1} & a_{2,2} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & a_{1,3} \\\\ a_{2,1} & a_{2,2} & a_{2,3}  \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & \cdots & a_{1,n} \\\\ a_{2,1} & a_{2,2} & \cdots & a_{2,n} \end{matrix}
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup4',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 5.
    $name = new lang_string('librarygroup5', 'atto_matrix');
    $desc = new lang_string('librarygroup5_desc', 'atto_matrix');
    $default = '
\begin{matrix} a_{1,1} \\\\ a_{2,1} \\\\ a_{3,1} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} \\\\ a_{2,1} & a_{2,2} \\\\ a_{3,1} & a_{3,2} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & a_{1,3} \\\\ a_{2,1} & a_{2,2} & a_{2,3} \\\\ a_{3,1} & a_{3,2} & a_{3,3} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & \cdots & a_{1,n} \\\\ a_{2,1} & a_{2,2} & \cdots & a_{2,n} \\\\ a_{3,1} & a_{3,2} & \cdots & a_{3,n} \end{matrix}
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup5',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 6.
    $name = new lang_string('librarygroup6', 'atto_matrix');
    $desc = new lang_string('librarygroup6_desc', 'atto_matrix');
    $default = '
\begin{matrix} a_{1,1} \\\\ a_{2,1} \\\\ \vdots \\\\ a_{m,1} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} \\\\ a_{2,1} & a_{2,2} \\\\ \vdots & \vdots \\\\ a_{m,1} & a_{m,2} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & a_{1,3} \\\\ a_{2,1} & a_{2,2} & a_{2,3} \\\\ \vdots & \vdots & \vdots \\\\ a_{m,1} & a_{m,2} & a_{m,3} \end{matrix}
\begin{matrix} a_{1,1} & a_{1,2} & \cdots & a_{1,n} \\\\ a_{2,1} & a_{2,2} & \cdots & a_{2,n} \\\\ \vdots & \vdots & \ddots & \vdots \\\\ a_{m,1} & a_{m,2} & \cdots & a_{m,n} \end{matrix}
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup6',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 7.
    $name = new lang_string('librarygroup7', 'atto_matrix');
    $desc = new lang_string('librarygroup7_desc', 'atto_matrix');
    $default = '
\begin{smallmatrix} a_{1,1} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} & a_{1,4} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} & \cdots & a_{1,n} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} \\\\ a_{2,1} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} \\\\ a_{2,1} & a_{2,2} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} \\\\ a_{2,1} & a_{2,2} & a_{2,3} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} & a_{1,4} \\\\ a_{2,1} & a_{2,2} & a_{2,3} & a_{2,4} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} & \cdots & a_{1,n} \\\\ a_{2,1} & a_{2,2} & a_{2,3} & \cdots & a_{2,n} \end{smallmatrix}
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup7',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 8.
    $name = new lang_string('librarygroup8', 'atto_matrix');
    $desc = new lang_string('librarygroup8_desc', 'atto_matrix');
    $default = '
\begin{smallmatrix} a_{1,1} \\\\ a_{2,1} \\\\ a_{3,1} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} \\\\ a_{2,1} & a_{2,2} \\\\ a_{3,1} & a_{3,2} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} \\\\ a_{2,1} & a_{2,2} & a_{2,3} \\\\ a_{3,1} & a_{3,2} & a_{3,3} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} & a_{1,4} \\\\ a_{2,1} & a_{2,2} & a_{2,3} & a_{2,4} \\\\ a_{3,1} & a_{3,2} & a_{3,3} & a_{3,4} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} & \cdots & a_{1,n} \\\\ a_{2,1} & a_{2,2} & a_{2,3} & \cdots & a_{2,n} \\\\ a_{3,1} & a_{3,2} & a_{3,3} & \cdots & a_{3,n} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} \\\\ a_{2,1} \\\\ \vdots \\\\ a_{m,1} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} \\\\ a_{2,1} & a_{2,2} \\\\ \vdots & \vdots \\\\ a_{m,1} & a_{m,2} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} \\\\ a_{2,1} & a_{2,2} & a_{2,3} \\\\ \vdots & \vdots & \vdots \\\\ a_{m,1} & a_{m,2} & a_{m,3} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & a_{1,3} & a_{1,4} \\\\ a_{2,1} & a_{2,2} & a_{2,3} & a_{2,n4} \\\\ \vdots & \vdots & \vdots & \vdots \\\\ a_{m,1} & a_{m,2} & a_{m,3} & a_{m,4} \end{smallmatrix}
\begin{smallmatrix} a_{1,1} & a_{1,2} & \cdots & a_{1,n} \\\\ a_{2,1} & a_{2,2} & \cdots & a_{2,n} \\\\ \vdots & \vdots & \ddots & \vdots \\\\ a_{m,1} & a_{m,2} & \cdots & a_{m,n} \end{smallmatrix}
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup8',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 9.
    $name = new lang_string('librarygroup9', 'atto_matrix');
    $desc = new lang_string('librarygroup9_desc', 'atto_matrix');
    $default = '
\begin{array}{rrr} -1 & 2 & -3 \\\\ 4 & -5 & 6 \\\\ -7 & 8 & -9 \end{array}
\begin{array}{r|r|r} -1 & 2 & -3 \\\\ \hline 4 & -5 & 6 \\\\ \hline -7 & 8 & -9 \end{array}
\begin{array}{c|lcr} n & \text{Left} & \text{Center} & \text{Right} \\\\ \hline 1 & 0.24 & 1 & 125 \\\\ 2 & -20 & 2000 & 1+10i \end{array}
';
    $setting = new admin_setting_configtextarea('atto_matrix/librarygroup9',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);
}
