This is solution for robot cleaning for hard and carpet floor.

These are following assuptions:<br/>
● The robot has a battery big enough to clean for 60 seconds in one charge.<br/>
● The robot can clean 1 m2 of hard floor in 1 second.<br/>
● The robot can clean 1 m2 of carpet in 2 seconds.<br/>
● The battery charge from 0 to 100% takes 30 seconds.<br/>
● Assuming Robot is initially fully charged.<br/>

How to run the robot task:<br/>
Clone this automation git repository.<br/>
Change directory to automation<br/>
Run robot cleaning task for hard floor use following command:<br/>

php src/Main.php --action=clean --floor=carpet --area=100<br/>

Where Robot.php is the main module to be executed with following command line arguments:<br/>
1)action : This argument define what task robot has to do. Right now robot only can do cleaning job<br/>
2)floor : This argument instruct what type of surface to be cleaned. The supported values are<br/>
          hard or carpet.<br/>
3)area : This argument provides area in m^2 to be cleaned. The range of area is from 10m^2 to 1000m^2<br/>

Sample Result:<br/>

C:\xampp\htdocs\php_training\automation>php src/Main.php --action=clean --floor=carpet --area=40<br/>
Initial State : chargingLevel : 100   Total Area:40 Area cleaned : 0 m sq<br/>
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
chargingLevel : 63.33   Area cleaned : 11 m sq<br/>
chargingLevel : 60   Area cleaned : 12 m sq<br/>
chargingLevel : 56.67   Area cleaned : 13 m sq<br/>
chargingLevel : 53.33   Area cleaned : 14 m sq<br/>
chargingLevel : 50   Area cleaned : 15 m sq<br/>
chargingLevel : 46.67   Area cleaned : 16 m sq<br/>
chargingLevel : 43.33   Area cleaned : 17 m sq<br/>
chargingLevel : 40   Area cleaned : 18 m sq<br/>
chargingLevel : 36.67   Area cleaned : 19 m sq<br/>
chargingLevel : 33.33   Area cleaned : 20 m sq<br/>
chargingLevel : 30   Area cleaned : 21 m sq<br/>
chargingLevel : 26.67   Area cleaned : 22 m sq<br/>
chargingLevel : 23.33   Area cleaned : 23 m sq<br/>
chargingLevel : 20   Area cleaned : 24 m sq<br/>
chargingLevel : 16.67   Area cleaned : 25 m sq<br/>
chargingLevel : 13.33   Area cleaned : 26 m sq<br/>
chargingLevel : 10   Area cleaned : 27 m sq<br/>
chargingLevel : 6.67   Area cleaned : 28 m sq<br/>
chargingLevel : 3.33   Area cleaned : 29 m sq<br/>
chargingLevel : 0   Area cleaned : 30 m sq<br/>
Robot need power. Switching to charging mode...<br/>
Charging robot : 1.67<br/>
Charging robot : 3.33<br/>
Charging robot : 5<br/>
Charging robot : 6.67<br/>
Charging robot : 8.33<br/>
Charging robot : 10<br/>
Charging robot : 11.67<br/>
Charging robot : 13.33<br/>
Charging robot : 15<br/>
Charging robot : 16.67<br/>
Charging robot : 18.33<br/>
Charging robot : 20<br/>
Charging robot : 21.67<br/>
Charging robot : 23.33<br/>
Charging robot : 25<br/>
Charging robot : 26.67<br/>
Charging robot : 28.33<br/>
Charging robot : 30<br/>
Charging robot : 31.67<br/>
Charging robot : 33.33<br/>
Charging robot : 35<br/>
Charging robot : 36.67<br/>
Charging robot : 38.33<br/>
Charging robot : 40<br/>
Charging robot : 41.67<br/>
Charging robot : 43.33<br/>
Charging robot : 45<br/>
Charging robot : 46.67<br/>
Charging robot : 48.33<br/>
Charging robot : 50<br/>
Charging robot : 51.67<br/>
Charging robot : 53.33<br/>
Charging robot : 55<br/>
Charging robot : 56.67<br/>
Charging robot : 58.33<br/>
Charging robot : 60<br/>
Charging robot : 61.67<br/>
Charging robot : 63.33<br/>
Charging robot : 65<br/>
Charging robot : 66.67<br/>
Charging robot : 68.33<br/>
Charging robot : 70<br/>
Charging robot : 71.67<br/>
Charging robot : 73.33<br/>
Charging robot : 75<br/>
Charging robot : 76.67<br/>
Charging robot : 78.33<br/>
Charging robot : 80<br/>
Charging robot : 81.67<br/>
Charging robot : 83.33<br/>
Charging robot : 85<br/>
Charging robot : 86.67<br/>
Charging robot : 88.33<br/>
Charging robot : 90<br/>
Charging robot : 91.67<br/>
Charging robot : 93.33<br/>
Charging robot : 95<br/>
Charging robot : 96.67<br/>
Charging robot : 98.33<br/>
Charging robot : 100<br/>
Resuming to cleaning...<br/>
chargingLevel : 96.67   Area cleaned : 31 m sq<br/>
chargingLevel : 93.33   Area cleaned : 32 m sq<br/>
chargingLevel : 90   Area cleaned : 33 m sq<br/>
chargingLevel : 86.67   Area cleaned : 34 m sq<br/>
chargingLevel : 83.33   Area cleaned : 35 m sq<br/>
chargingLevel : 80   Area cleaned : 36 m sq<br/>
chargingLevel : 76.67   Area cleaned : 37 m sq<br/>
chargingLevel : 73.33   Area cleaned : 38 m sq<br/>
chargingLevel : 70   Area cleaned : 39 m sq<br/>
chargingLevel : 66.67   Area cleaned : 40 m sq<br/>



How to run unit tests:<br/>
Install php unit with composer by command:<br/>
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
