# FurTales
WebTek Finals Project

Client(PHP)
1. Run the Wamp Server as an administrator.
  1.1 Right click on the Wamp Server Icon.
  1.2 Click run as administrator.
  1.3 Click yes.
  
2. Copy the files located in the taker folder to the www directory of the wamp folder.
  2.1 Copy all the contents of the folder name Client.
  2.2 Click on the Wamp Server icon located in the task bar, or the lower right corner of the desktop.
  2.3 Click on www directory.
  2.4 Delete the contents of the folder.
  2.5 Paste the copied files.
  
3. Import the furtales.sql from the www directory to the phpMyAdmin
  3.1 Click on the Wamp Server icon located at the lower right corner of the desktop.
  3.2 Click on phpMyAdmin.
  3.3 Click on the import tab in the upper menu.
  3.4 Click Choose file and select furtales.sql and click open.
  3.5 Click "Go" button.
  
 4. Access the localhost in the browser
  4.1 Open a web browser (i.e. Google Chrome, Mozilla Firefox, etc.)
  4.2 On the address bar, type local host.
 
 5. Log in using a registered taker

        ┌─────────────────┬───────────────────┐
				│User Name	      │	User Password     │
				├─────────────────┼───────────────────┤
				│   		          │	                  │
				│	                │	                  │
				│	                │	                  │
				│	                │	                  │
				└─────────────────┴───────────────────┘
        
Service Provider(Java)
1. Open Netbeans IDE
2. Go to File, click open project and choose Service Provider(Java)/Bin
    **Note:** if there is a password existing for MySql, it should be added to web.xml
    1. Under the Projects Bin in the Projects, double click on web pages folder then choose WEB-INF and open web.xml
    2. <param-name>password</param-name>
       <param-value>**Put your password here**</param-value>
	  3. ctrl+s to save
	
3. Go to Projects, and select Bin.
4. Right click and choose Deploy
If there is no error, open a browser: ipaddress:port/Bin (example: 192.168.0.114:8080/Bin)

	*Note: to check the ipaddress
	1. open cmd / command prompt.
	2. type ipconfig and press enter
	3. Find IPv4 address and you can see the ipaddress

	*Note: to check the port
	1. Go to services, under the windows tab in the menu bar, and choose servers
	2. Right click on Apache Tomcat or TomEE
	3. Choose and open edit server.xml
	4. You can find the current port number in the 
	<Connector port="**port number**" protocol="HTTP/1.1"
  
_________________________
|Credentials:		        |
|-----------|-----------|
|Username   |	Password  |
|-----------|-----------|
|           |	          |
|           |		        |
|	          |	          |
|	          |		        |
|           |		        |
|___________|___________|
