<?php
/**
 * Tatoeba Project, free collaborative creation of languages corpuses project
 * Copyright (C) 2009 Allan SIMON <allan.simon@supinfo.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 *
 * @category PHP
 * @package  Tatoeba
 * @author   Allan Simon <allan.simon@supinfo.com>
 * @license  Affero General Public License
 * @link     http://tatoeba.org
 */

$titles = array();

if ($numberOfStrokes == "10+") {
    $title = __('10 or more strokes');
} else {
    $title = format(__n('1 stroke', '{n}&nbsp;strokes', $numberOfStrokes),
                    array('n' => $numberOfStrokes));
}

echo '<h3>'.$title.'</h3>'."\n"  ;


foreach ($radicals as $radical) {
    echo '<a class="radical" >'.
        $radical ;
    echo '</a>' ."\n" ;
}

?>
