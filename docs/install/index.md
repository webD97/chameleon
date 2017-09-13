# Installation
Chameleon supports multiple installation options, but we recommend using [Composer](http://getcomposer.org).

## Using Composer (recommended)
    composer require webd97/chameleon

Composer will install Chameleon to the `vendor` directory and generate an autoloader for the classes that you need to include whenever you want to use Chameleon (or another Composer-based package): `<project root>/vendor/autoload.php`

## From GitHub
Download a [release](https://github.com/webD97/chameleon/releases) from GitHub and unpack it into your project directory.
```bash
    $ cd <project root>
    $ wget https://github.com/webD97/chameleon/archive/master.tar.gz
    $ tar xzf master.tar.gz
    $ rm -f master.tar.gz
```

There is no pre-generated autoloader availble when using this installation method. You need to `require` the class files on your own. They are organized following the PSR4 standard inside the `src/` directory.