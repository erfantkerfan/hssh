<?php

function cwebp($in, $out)
{
    try {
        $command1 = 'jpegoptim --size=600k '.$in . '.jpg';
        $command2 = "cwebp -quiet -mt -m 6 -q 80 -sharp_yuv -alpha_filter best -pass 10 -segments 4 -af " . $in . ".jpg -o " . $out . ".webp";
        shell_exec($command1);
        shell_exec($command2);
        $error = 1;
    } catch (Exception $exception) {
        $error = 'Caught exception: ' . $exception->getMessage();
    }
    return $error;
}