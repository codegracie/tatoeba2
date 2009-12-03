<?php
/*
    Tatoeba Project, free collaborative creation of multilingual corpuses project
    Copyright (C) 2009  Allan SIMON (allan.simon@supinfo.com)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
    $titles = array();

    $titles["1"] = __('1 Stroke',true );
    $titles["2"] = __('2 Strokes',true );
    $titles["3"] = __('3 Strokes',true );
    $titles["4"] = __('4 Strokes',true );
    $titles["5"] = __('5 Strokes',true );
    $titles["6"] = __('6 Strokes',true );
    $titles["7"] = __('7 Strokes',true );
    $titles["8"] = __('8 Strokes',true );
    $titles["9"] = __('9 Strokes',true );
    $titles["10+"]= __('10 Strokes and more',true );


echo '<h3>'.$titles[$numberOfStrokes] . '</h3>'."\n"  ;


foreach ($radicals as $radical ){
 echo '<a class="radical" >' . $radical . '</a>' ."\n" ;    
}

?>
