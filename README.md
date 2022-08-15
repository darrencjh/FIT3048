# Team43 - CakePHP App

Cakephp applications version with [CakePHP](https://cakephp.org) 4.x.

Windows:  Always open **xampp** when you start your computer

- Apache
- Mysql

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.

2. Windows: In the xampp/htdocs folder,open terminal and Run `git clone https://git-prd.infotech.monash.edu/UGIE/ugie-2022/team43/team43-app_fit3048.git`

   (You may need give username/email and password. It is your gitlab username and password)

## Fist time Configuration

1. run `composer update` and `composer install` to download any necessary dependancies

2. open `database_schema_data/schema.sql` and copy everything in this sql file into your local phpAdmin sql,click `go` button at the bottom right
3.  Edit the environment specific `config/app_local.php` and setup the 
   `Database` and any other configuration relevant for your application.
   Other environment agnostic settings can be changed in `config/app.php`.
4. In your browser,type url `localhost/team43-app_fit3048` to test



## Update your local project

Each time you want to get latest codes,run `git pull`

Then run `composer update` and `composer install` to download any necessary dependancies



## *Upload your codes into gitlab

1. Always keep in mind that running `git pull`before uploading your codes
2. run `git add .`
3. run `git commit -m "Your description of your finished codes"`
4. run `git push`,done



