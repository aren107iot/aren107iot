<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>


<?php
function regular_triangle(...$line)
{
    for ($i = 0; $i < $line[0]; $i++) {
        for ($j = 0; $j < ($line[0] - 1 + $line[1] - $i); $j++) {
            echo "&nbsp;";
        }

        for ($k = 0; $k < ($i * 2 + 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }
}

regular_triangle(9, 2);
regular_triangle(10, 1);
regular_triangle(11, 0);


function design_stars($shape, $line)
{
    switch ($shape) {
        case '正三角形':
            break;
        default:
            echo "目前不支援";
    }
};




?>