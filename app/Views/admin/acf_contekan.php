<?php

$text = get_field('testimoni') ?: 'isi testimoni disini...';
$author = get_field('author') ?: 'Nama Author';
$role = get_field('role') ?: 'Role Author';
$image = get_field('image') ?: 300;
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>

//looping field
<?php

$values = get_field('field_name');
if ($values) {
    echo '<ul>';

    foreach ($values as $value) {
        echo '<li>' . $value . '</li>';
    }

    echo '</ul>';
}

// always good to see exactly what you are working with
var_dump($values);

?>

<?php

$rows = get_field('repeater_field_name');
$row_count = count($rows);
$i = rand(0, $row_count - 1);

echo $rows[$i]['sub_field_name'];

?>