EQUAL CONTRIBUTIONS BY
<br>
- Jafet Reyes
- Gerardo Guerrero / Durzo95
- Bryan Cancel
<br>
NOTE: The Videos and Images are from footage taken during development, the populated version of the database we used to show functionality is lost. I will try to recreate it soon and rerecord. But these videos and images should do for now
<br>
All The Apartment Filters Closed
<br>
<img src="https://drive.google.com/uc?export=download&id=1rYlG6lVJOM06o9Vqst67oIt0XiXtvUru"/>
<br>
Some Apartment Filters Open
<br>
<img src="https://drive.google.com/uc?export=download&id=1z3xWnd6729B3D8Jo5Ku8m5IDs5-gfT3i"/>
<br>
How An Apartment Show Up On the List
<br>
<img src="https://drive.google.com/uc?export=download&id=1h6EIJSBIeVundJSUeOnXmA5wrgjpd7Fg"/>
<br>
How Apartment Details Show Up
<br>
<img src="https://drive.google.com/uc?export=download&id=1G479KE2JdvkjsrDRZC4DjLxncFipOPut"/>
<br>

<br>
Steps To Get The Project Working
<br>
ORDER IS IMPORTANT

1. install xampp and run apache and sql
2. import the database file in the database folder into http://localhost/phpmyadmin/
3. .gitignore should contain
    FOLDERS
    a. generated-conf 
    b. generated-sql 
    c. models 
    d. schema 
    e. vendor 
    FILES
    a. composer.json
    b. composer.lock
    c. propel.yml
    d. propel.yml.dist
4. clone the repository
5. run "composer require slim/slim" in root directory
6. edit the generated "composer.json"
{
    "minimum-stability": "dev",

    "require": {
        "slim/slim": "^3.11"
    }
}
7. run "composer require propel/propel" in root directory
8. run "composer require slim/twig-view" in root directory
9. run "vendor\bin\propel.bat init" in root directory
    a. mysql ENTER
    b. ENTER
    c. ENTER
    d. [database name ?] "databaseName" ENTER
    e. ENTER
    f. ENTER
    g. ENTER
    h. [have existing database ?] yes ENTER
    i. schema ENTER
    j. models ENTER
    k. ENTER
    l. ENTER
    m. [correct ?] yes ENTER
10. edit the generated "composer.json"
"autoload": {
  "classmap" : ["models"]
}
11. run "composer dump-autoload" in root directory
