<?php
require "src/Person.php";
require "src/Business.php";
require "src/Staff.php";

 $chris = new Person("Chris");

 $staff = new Staff([$chris]);


 $fresh = new Business($staff);


$fresh->hire(new Person("Jane Doe"));

 var_dump($fresh->getStaffMembers());
