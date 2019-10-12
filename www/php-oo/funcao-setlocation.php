<pre>
<?php

    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

    echo strftime("%A %B");

    echo "<br>";
    // Class DateTime
    $dt = new DateTime();

    $periodo = new DateInterval("P15D");
    
    echo $dt->format("d/m/Y H:i:s");

    echo "<br> + 15 dias <br>";

    $dt->add($periodo);

    echo $dt->format("d/m/Y H:i:s");
