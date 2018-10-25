<?php
namespace Src;

require_once('SequenceAssignment.php');

$obj = new SequenceAssignment();

$sequence = $obj->manipulateSequenceArray("150", '3', '5');

foreach ($sequence as $sequenceNumber) {
    echo nl2br ("$sequenceNumber \n");
}

?>