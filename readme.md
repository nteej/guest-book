

# Guest Book

###how to setup

git clone https://tharangaj@bitbucket.org/tharangaj/guest-book.git

composer install

cp .env.example .env

php artisan key:generate

update .env DB settings

php artisan migrate --seed

php artisan serve

