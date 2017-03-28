<?php

// include class
include 'streamSampler.php';

// calling the method to start process
$word = StreamSampler::makeSample();

echo $word . "\n";