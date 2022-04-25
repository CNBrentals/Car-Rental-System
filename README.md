# C&B Rental System

You can have demo at: http://candbrentals.infinityfreeapp.com/.

## Getting Started

1. Load the database with given sql query in sql folder.
2. Setup the db connection on file database.php in function folder.
```php
  public function __construct($table_name)
  {
      $host = '127.0.0.1';//set your host address
      $username = 'root';//set your host db username
      $password = '';//set your host db password
      $db = 'rent_vechile';//set your db name
      $this->conn = new PDO('mysql:dbname=' . $db . ';host=' . $host, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
      $this->table=$table_name;
  }
 ```
3. Finally load main.php inside home_page and use login detils from folder login_password.
4. For mail service PHP mailer has been used with PHP version 7.X
5. Setup strip account to use Strip API Payment.

