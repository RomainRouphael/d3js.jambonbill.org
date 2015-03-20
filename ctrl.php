<pre>
<?php
//ctrl.php
$r=scandir("./");
foreach($r as $k=>$f){
	if ($f === '.' or $f === '..') continue;

    if (is_dir('./' . $f)) {
        echo "$f\n";
    }
}