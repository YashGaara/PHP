<?php
$name="Function";
$age=18;
$value=true;
echo gettype($name);
echo "<br>";
echo gettype($age);
echo "<br>";
echo gettype($value);
echo "<br>";

var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($value);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strtolower($name);
echo "<br>";
echo str_repeat("yash <br>" ,"8");
echo "<br>";
$story="An Electrocardiogram (ECG or EKG) is a medical test that records the electrical activity of the heart over a period of time. It is a common and non-invasive procedure used to detect various heart conditions. Here’s an overview:

### Components of an ECG
1. *P Wave*: Represents atrial depolarization (contraction of the atria).
2. *QRS Complex*: Represents ventricular depolarization (contraction of the ventricles). The Q wave is the initial downward deflection, the R wave is the peak, and the S wave is the subsequent downward deflection.
3. *T Wave*: Represents ventricular repolarization (relaxation of the ventricles).
4. *U Wave* (if present): Thought to represent repolarization of the Purkinje fibers."
echo substr_count($story,"contraction");






?>