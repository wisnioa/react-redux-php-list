#React-Redux-PHP To Do List Technical

Tasked with creating a To Do List CRUD application with a React/Redux frontend and PHP backend, I ran into a couple problems. As a novice in PHP (and Redux!), I knew that having a PHP backend would be tough, so I prioritzed that over styling components. I currently have the official Redux docs code in there for that very reason. 

###Problems I ran into 

-setting up PHP backend, server
-connecting it to Redux, possibly via fetch?
-running out of time

I installed the XAMPP server, which comes with mySQL. I already have mySQL installed (I use mySQL Workbench; I'm on a Windows machine) so I was running into errors because 2 instances of mySQL were on the same port, etc. I tried changing the port number to 3307 in XAMPP as per a Stack Overflow post and even Workbench,but still was never able to test and view hardcoded database data in the browser. Being unable to test mySQL and PHP files together proved very difficult in putting together this app. 

I also debated with myself on how to actually grab that data from the PHP backend. In my searches, I found similar instances where others seemed to call fetch the endpoint via the actions. This made sense to me because the actions then go the reducers, the change is added and a new state is returned. I also saw some where people added a class component with ComponentDidMount and fetched the data from there. I did not write any of this code as I do not have PHP environment setup correctly on my machine.

As for my PHP and database code, I chose the PDO style because you can use it with others besides mySQL. 

Unfortunately, this app is not fully functional, nor deployed. The learning curve for me was steep, and this week, time-wise, turned out to be tough with both of my jobs and getting ready to move into a new place. Being a Node JS diehard, this was interesting test for me and helped break open my mind about other backend development. Also, the little knowledge I had of PHP has greatly increased as well. 



