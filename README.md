# Hytech Framework PHP (Basic Started)
PHP framework with MVC (Model View Controller) model.

<img src="./hytech.jpg">

```
ROOT
├── app
│   ├── config
│   │   ├── config.php
│   │   └── database.php
│   ├── controllers
│   │   ├── AdminController.php
│   │   ├── Controller.php
│   │   └── NotFound.php
│   ├── helper
│   │   └── Helper.php
│   ├── models
│   │   ├── Database.php
│   │   └── Model.php
│   ├── views
│   │   ├── backend
│   │   │   ├── pages
│   │   │   │	└── dashboard.hytech
│   │   │   ├── partial
│   │   │   │	├── footer.hytech
│   │   │   │	├── head.hytech
│   │   │   │	└── script.hytech
│   │   │   └── layout.hytech
│   │   └── frontend
│   │       ├── pages
│   │       │	├── 404.hytech
│   │       │	└── home.hytech
│   │       ├── partial
│   │       │	├── footer.hytech
│   │       │	├── head.hytech
│   │       │	└── script.hytech
│   │       └── layout.hytech
│   ├── .env
│   ├── HyTech.php
│   └── routes.php
├── public
│   ├── css
│   │   ├── admin_style.css
│   │   └── style.css
│   ├── images
│   │   ├── avatar.png
│   │   └── logo.png
│   ├── js
│   │   ├── admin_main.js
│   │   └── main.js
│   ├── .htaccess
│   └── index.php
├── vendor
│   ├── bin
│   ├── composer
│   └── autoload.php
├── .htaccess
├── composer.json
└── composer.lock
```

## Installation
```
git clone https://github.com/fitri-hy/hytech-framework-php.git
```
- Move hytech-framework-php project to htdocs (xampp)
- Start apache
- Run in the browser `http://localhost/hytech-framework-php/`

## Alternative
- Go to folder `public/`
- Open terminal in folder, command: `php -S localhost:8000`

How to use Static Site (without use connection database):
`'use_database' => true`
Change `true` to `false`

Support me by giving stars.
