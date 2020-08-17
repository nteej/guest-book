

# Guest Book

###how to setup

git clone https://github.com/nteej/guest-book.git

composer install

cp .env.example .env

php artisan key:generate

update .env DB settings

php artisan migrate --seed

php artisan serve

##Cron job setup

Log into linux server

```
$crontab -e

* * * * * // which allows to run in each & every minute

// this is for update the Laravel schedule to moderate the guest messages agains "baddd" word spec.

EX : * * * * * cd <project-path>/guest-book && php artisan schedule:run >> /dev/null 2>&1
