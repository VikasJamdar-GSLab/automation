This is solution for robot cleaning for hard and carpet floor.

These are following assuptions:
● The robot has a battery big enough to clean for 60 seconds in one charge.
● The robot can clean 1 m2 of hard floor in 1 second.
● The robot can clean 1 m2 of carpet in 2 seconds.
● The battery charge from 0 to 100% takes 30 seconds.
● Assuming Robot is initially fully charged.

How to run the robot task:
clone automation git repositor.
change directory to automation
run robot cleaning task for hard floor use following command:

php Main.php --action=clean --floor=carpet --area=100

where Robot.php is the main module to be executed with following command line arguments:
1)action : This argument define what task robot has to do. Right now robot only can do cleaning job
2)floor : This argument instruct what type of surface to be cleaned. The supported values are
          hard or carpet.
3)area : This argument provides area in m^2 to be cleaned. The range of area is from 10m^2 to 1000m^2

Sample Result:

C:\xampp\htdocs\php_training\automation>php Main.php --action=clean --floor=carpet --area=10
Initial State :
chargingLevel : 100   Total Area:10 Area cleaned : 0 m sq
chargingLevel : 96.67   Area cleaned : 1 m sq
chargingLevel : 93.33   Area cleaned : 2 m sq
chargingLevel : 90   Area cleaned : 3 m sq
chargingLevel : 86.67   Area cleaned : 4 m sq
chargingLevel : 83.33   Area cleaned : 5 m sq
chargingLevel : 80   Area cleaned : 6 m sq
chargingLevel : 76.67   Area cleaned : 7 m sq
chargingLevel : 73.33   Area cleaned : 8 m sq
chargingLevel : 70   Area cleaned : 9 m sq
chargingLevel : 66.67   Area cleaned : 10 m sq


How to run unit tests:
install php unit with composer by command:
composer require --dev phpunit/phpunit ^7

Run unit tests with :
 ./vendor/bin/phpunit --testdox tests

 Sample output:

  ✔ Clean hard floor
 ✔ Validate action required while start robot
 ✔ Validate floor required while start robot
 ✔ Validate area required while start robot
 ✔ Validate action while start robot
 ✔ Validate floor while start robot
 ✔ Validate area while start robot
 ✔ Validate string area while start robot

Time: 454 ms, Memory: 4.00 MB

OK (10 tests, 14 assertions)
