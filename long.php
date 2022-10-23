<?php
set_time_limit(0);
@ini_set('implicit_flush',1);
@ob_end_clean();
for($i=1;$i<=10;$i++){
    echo $i;
    sleep(1);
    flush();
}
?>