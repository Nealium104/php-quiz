# Hi
This is a personal PHP project. I'm trying to make a little quiz application that will be a quiz application based off the ideas of Anki.

# Making it work
You'll need MySQL locally, and then in app, you'll need a credentials.php file organized like so:
```php
    // keys exactly as written, but with example values
    <?php
        $dbHost = "localhost";
        $dbUser = "user";
        $dbPassword = "secret";
        $dbName = "dbname";
    ?>
```