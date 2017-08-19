<?php
use FreshPencils\Users\Person;
use FreshPencils\Business;
use FreshPencils\Staff;


 $chris = new Person("Chris");

 $staff = new Staff([$chris]);


 $fresh = new Business($staff);


$fresh->hire(new Person("Jane Doe"));

 var_dump($fresh->getStaffMembers());
