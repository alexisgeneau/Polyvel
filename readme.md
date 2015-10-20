## Polyvel ##

### Installation ###
 
Add Polyvel to your composer.json file to require Polyvel :
```
    require : {
        "alexisgeneau/polyvel": "dev-master"
    }
```
 
Update Composer :
```
    composer update
```
 
The next step is to add the service provider to config/app.php :
```
    Alexisgeneau\Polyvel\PolyvelServiceProvider::class,
```
 
### Publish ###
 
The next step is to publish files in your application with :
```
    php artisan vendor:publish --force
```

Warning ! This command will replace 'package.json' in your application, but is required to use the package.

### NPM ###

Next, you have to install npm packages:
```
    npm install
```

### Bower ###

The last step is to run bower:

```
     bower install
```

Now, you can use Polymer's elements in your application. You can verify by going at route '/polymer' in your browser.