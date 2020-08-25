# AAFC open source website
This is a open source data demonstration website. this website use MVC structure and write with PHP.

 

## 1 Preparation
#### 1.1 Environmental preparation
Here we need the most basic PHP environment:

```        
        Linux
        Apache
        Sqlite3
        PHP 5.4+
```       
Due to this website using Sqlite, we should install php-sqlite component
```        
        sudo apt-get install php-sqlite 
```  

#### 1.2 Code Specification

 
After the directory is set up, next specify the code specification:

SQLite table names must be Capitalize the first letter, such as: Item, Info.
Module names (Models) is the same as the table names.

Controllers need to use the big hump naming method, the first letter is capitalized, and Controller is added after the name, such as ItemController, InfoController.

The method name (action) needs to use the little camel case, that is, the first letter is lowercase, such as index, selected.

The forward (view) deployment structure is the controller name/behaviour name, such as item/add.php, info/index.php.
The above rules are for programs to call each other better.


#### 1.3 Directory Preparation
the directory structure is like this:

```        
        Website                WEB deployment root directory
        ├─ app                 catalog
        ├─│ the Controllers    Controller Directories
        │ ├─ models            module directory
        ├─│ views              view directory
        ├─ config              configuration file directory
        ├─ core                framework core directory
        │ ├─ base              MVC base class directory
        │ ├─ db                database operation directory
        │ ├─ core.php          kernel file  
        ├─ static              static file directory
        ├─ index.php           entry file
```

put this website folder in to Apache default folder which is /var/wwww 

#### 1.4 Redirection

**Important :**
   To using this function, first is config apache server. the default configuration of apache does not open rewrite function.

```    
    sudo a2enmod rewrite

```
The purpose of the redirect is twofold: to set the root directory to project where it is, 
and to send all requests to the index.php file.
For Apache server , create a new .htaccess  file in the project directory with the content:

```        
        <IfModule mod_rewrite.c> 
            # Turn on the Rerite function 
            RewriteEngine  On
        
            # If the requested file or directory exists, directly access 
            RewriteCond  % {REQUEST_FILENAME} ! -F
            RewriteCond  % {REQUEST_FILENAME} ! -D
        
            # If the accessed file or directory does not really exist, distribute the request to index.php 
            RewriteRule . Index.php
         </ IfModule>
```
         
**The main reasons for this are: **

(1) Static files can be accessed directly.
If the file or directory actually exists, directly access the existing file / directory.
For example, if a static file static/css/main.cssexists, you can access it directly.

(2) The program has a single entrance .
In this case, the request address is not a real file or directory, so the request will be passed to  index.php  .
For example, the access address: localhost/item/detail/1 no such file or directory exists in the file system.
Then, the Apache server will send the request to index.php and assign the string after the domain name to the REQUEST_URI variable.
you can get /item/detail/1 with $_SERVER['REQUEST_URI'] in PHP;

(3) Can be used to generate landscaping URLs, which is beneficial to SEO .

#### 1.5 Database setting and configuration
Due to we are using Sqlite which is a file-base database, the linux should have the permissions to access the DB file.
When create the DB file in somewhere, have to use the following code to change the file permission.
    
**important :**  
**write a data to a file, the folder which file stored need execution permission.**

```   
    chmod 755 *dbfilename* 
    chmod 777 *dbfilefolder* 
```
 
#### 1.6 End of deployment server 

Now everything should be configured. Test all feature by access http://localhost/

#### 2.0 how to add a new feature.

Due to this application is use MVC architecture. 

there are a few steps that can simplify to add new features.
1. if need to connect with the database check the module to add or modify the module.
2. check the controller. modify or add a new controller to implement new features. 
3. add the view page.

all steps have to follow the framework principles. 




