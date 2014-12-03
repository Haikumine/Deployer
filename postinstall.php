<?php
print "Patching PocketMine...";
$phar = new Phar("PocketMine-MP.phar");
$stub = <<<STUB
    <?php
        require("phar://". __FILE__ ."/src/pocketmine/PocketMine.php");
        __HALT_COMPILER();
    ?>
STUB;

//$phar->setStub($stub);
//$phar->setSignatureAlgorithm(Phar::SHA1);
print "Done!\n";