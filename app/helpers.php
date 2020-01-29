<?php

use Symfony\Component\Process\Process;

function cwebp($in , $out){
    try {
        $command = "cwebp -quiet -mt -m 6 -q 80 -sharp_yuv -alpha_filter best -pass 10 -segments 4 -af ".$in." -o ".$out.".webp";
        $process = new Process([$command]);
        $process->run();
        $x = 1;
    } catch (Exception $e) {
        $x = 'Caught exception: ' . $e->getMessage();
    }
    return $x;
}