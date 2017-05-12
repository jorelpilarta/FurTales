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
	
Admin(NodeJS)
SETUP AND CONFIGURATION INSTRUCTIONS
1. Check that you have NodeJS installed on your system. To do this, open command prompt and type node -v. If the version of NodeJS is shown, you have it installed. If it returns an error, you don't have it installed. To install Node.js, execute the program "node-v4.4.4-x86.msi" under Setup folder. Click "Next" and check the "Accept Terms and Condition" and wait for it to finish installation. After the installation, you should again check the version of node by opening command prompt and type "node -v" and make sure it displays the current node version.
2. Run the WampServer. The wamp icon should then appear on your notification area and make sure that the icon has a color of green.
3. Open a browser and type localhost/phpmyadmin on the address bar.
4. Import the sql file named binili.sql. To do this, go to the Import tab of phpMyAdmin. Click on Choose File and find bin99.sql (bin99.sql is found on the db folder of the submitted project requirement). Once you have chosen the sql file, click on Go.
5. Open the Admin Module folder and open the file called app.js on a text editor of your choice. Scroll down a bit and you should see these lines of code:
	var connection = mysql.createConnection({
    		host: 'localhost',
    		user: 'root',
    		password: '',
    		database: 'bin'
	});
   Verify that the values entered for user and password are correct. If you are not sure on what should be the value for user and password, see the steps below to check what is the username and password that you use for phpMyAdmin. However, these values that are already set are the default access credentials for phpMyAdmin. Once that's done, save and close the file.
6. Open a command prompt window on the folder where app.js is located. You can simply do this by pressing Ctrl+Shift+Right Click and choose Open command window here.
7. Type in node app.js on command prompt and this should start up the server.
8. You should then be able to access the Admin Module on your browser by simply entering localhost:3000 on your address bar.

HOW TO FIND USER CREDENTIALS FOR PHPMYADMIN
1. Go to this directory: wamp\apps\phpmyadmin[version]\
2. Find and open the file named config.inc.php on a text editor of your choice.
3. Hit Ctrl+F on your keyboard and enter $cfg['Servers'][$i]['user']
4. The value of $cfg['Servers'][$i]['user'] should be placed on the user field on app.js and the value of $cfg['Servers'][$i]['password'] should be placed on the password field on app.js if there is.
