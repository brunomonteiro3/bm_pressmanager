<?php 
/**
 * Populates array with values from an array
 *
 * @param array $target Array to be populated
 * @param array $values Values to populate $target
 * @param bool $beginning Populate unshifting array
 */
function populate_array(&$target, $values, $beginning = false) {
    if ($beginning) {
        if (isset($target)) {
            foreach ($target as $tgt) {
                $values[] = $tgt;
            }
        }
        $target = $values;
    } else {
        foreach ($values as $value) {
            $target[] = $value;
        }
    }
}

// Habilita menu dinâmico no tema
add_theme_support('menus');