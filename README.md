# Hotel Prices Challenge

Consume the hotel prices API and list the results

![image preview](https://i.imgur.com/0NYWRqE.png)

Requirements 📋

```
php     >= 8
apache2 >= 2.4
mariadb >= 11 
```

### Installation 🔧

clone the repository
cd /Groupbook-challenge
Install the requirements with:

```
composer install
```

Rename the **.env.example** as **.env**

Update the database credentials and the api keys variables with yours in the .env

Generate the key for the project with:

```
php artisan key:generate
```

Create the database with:

```
php artisan migrate
```

Now, install the frontend requirements:

```
npm install
```

Start the backend server:

```
php artisan serve
```

Start the front end "server"

```
npm run dev
```

_

## Built with 🛠️

* [PHP]
* [Laravel]
* [Inertia]
* [React]
* [Vite]
* [MariaDB]
* [APACHE]

## Licence 📄

GNU General Public License
