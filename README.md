This is solution for robot cleaning for hard and carpet floor.

These are following assuptions:<br/>
● The robot has a battery big enough to clean for 60 seconds in one charge.<br/>
● The robot can clean 1 m2 of hard floor in 1 second.<br/>
● The robot can clean 1 m2 of carpet in 2 seconds.<br/>
● The battery charge from 0 to 100% takes 30 seconds.<br/>
● Assuming Robot is initially fully charged.<br/>

How to run the robot task:<br/>
clone automation git repositor.<br/>
change directory to automation<br/>
run robot cleaning task for hard floor use following command:<br/>

php Main.php --action=clean --floor=carpet --area=100<br/>

where Robot.php is the main module to be executed with following command line arguments:<br/>
1)action : This argument define what task robot has to do. Right now robot only can do cleaning job<br/>
2)floor : This argument instruct what type of surface to be cleaned. The supported values are<br/>
          hard or carpet.<br/>
3)area : This argument provides area in m^2 to be cleaned. The range of area is from 10m^2 to 1000m^2<br/>

Sample Result:<br/>

C:\xampp\htdocs\php_training\automation>php Main.php --action=clean --floor=carpet --area=10<br/>
Initial State :<br/>
chargingLevel : 100   Total Area:10 Area cleaned : 0 m sq<br/>
chargingLevel : 96.67   Area cleaned : 1 m sq<br/>
chargingLevel : 93.33   Area cleaned : 2 m sq<br/>
chargingLevel : 90   Area cleaned : 3 m sq<br/>
chargingLevel : 86.67   Area cleaned : 4 m sq<br/>
chargingLevel : 83.33   Area cleaned : 5 m sq<br/>
chargingLevel : 80   Area cleaned : 6 m sq<br/>
chargingLevel : 76.67   Area cleaned : 7 m sq<br/>
chargingLevel : 73.33   Area cleaned : 8 m sq<br/>
chargingLevel : 70   Area cleaned : 9 m sq<br/>
chargingLevel : 66.67   Area cleaned : 10 m sq<br/>


How to run unit tests:<br/>
install php unit with composer by command:<br/>
composer require --dev phpunit/phpunit ^7<br/>

Run unit tests with :<br/>
 ./vendor/bin/phpunit --testdox tests<br/>

 Sample output:<br/>

  ✔ Clean hard floor<br/>
 ✔ Validate action required while start robot<br/>
 ✔ Validate floor required while start robot<br/>
 ✔ Validate area required while start robot<br/>
 ✔ Validate action while start robot<br/>
 ✔ Validate floor while start robot<br/>
 ✔ Validate area while start robot<br/>
 ✔ Validate string area while start robot<br/>

Time: 454 ms, Memory: 4.00 MB<br/>

OK (10 tests, 14 assertions)
