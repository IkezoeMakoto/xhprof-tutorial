<?php
tideways_xhprof_enable(TIDEWAYS_XHPROF_FLAGS_MEMORY | TIDEWAYS_XHPROF_FLAGS_CPU);

phpinfo();

file_put_contents(
    sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'xhprof' . DIRECTORY_SEPARATOR . uniqid() . '.myapplication.xhprof',
    serialize(tideways_xhprof_disable())
);
