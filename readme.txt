Installation  :
Start container (without docker sync) : docker-compose -f docker-compose-linux.yml up
Connect to container for php to initialize database and fixtures : 
-> docker exec -i -t symfonydemodocker_php_1  /bin/bash
-> php bin/console doctrine:schema:update --force
-> php bin/console doctrine:fixtures:load
Add to your host demo.dev on ip : 127.0.0.1 
Now go to demo.dev on your favorite browser 
So your projet up now  
