<?php

/**
 * Custom Nav Walker for creating dropdown submenus
 */
// class Enigma_Nav_Walker extends Walker_Nav_Menu {
//     function start_lvl(&$output, $depth = 0, $args = null) {
//         $output .= "\n<ul class='dropdown-menu'>\n";
//     }

//     function end_lvl(&$output, $depth = 0, $args = null) {
//         $output .= "</ul>\n";
//     }

//     function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
//         $indent = ($depth) ? str_repeat("\t", $depth) : '';
//         $output .= $indent . '<li class="dropdown" data-bs-toggle="dropdown">';

//         $output .= '<a href="' . esc_url($item->url) . '"';
//         if ($item->current) {
//             $output .= ' class="active"';
//         }
//         $output .= '>';
//         $output .= esc_html($item->title);
//         $output .= '</a>';

//         if ($depth == 0 && isset($item->submenu) && is_array($item->submenu)) {
//             $output .= '<ul>';
//         }
//     }

//     function end_el(&$output, $item, $depth = 0, $args = null) {
//         if ($depth == 0 && isset($item->submenu) && is_array($item->submenu)) {
//             $output .= '</ul>';
//         }

//         $output .= '</li>';
//     }
// }

?>
