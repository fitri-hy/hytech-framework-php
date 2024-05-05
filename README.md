# Hytech Framework PHP (Basic Started)
PHP framework with MVC (Model View Controller) model.
```
ROOT
├── app
│   ├── config
│   │   └── config.php              # konfigurasi database
│   │
│   ├── controllers
│   │   └── Controller.php          # logika permintaan
│   │
│   ├── helper
│   │   └── Helper.php              # fungsi-fungsi
│   │
│   ├── models
│   │   └── Model.php               # logika berinteraksi
│   │
│   ├── views
│   │   ├── pages
│   │   │   ├── 404.hytech          # halaman kesalahan 404
│   │   │   └── home.hytech         # halaman utama
│   │   │
│   │   ├── partial
│   │   │   ├── footer.hytech       # bagian footer
│   │   │   ├── head.hytechh        # bagian meta head
│   │   │   ├── navbar.hytech       # bagian navigasi
│   │   │   └── script.hytech       # bagian script javascript
│   │   │
│   │   ├── index.hytech            # merender layout
│   │   └── layout.hytech           # tata letak (layouting)
│   │
│   ├── HyTech.php                  # basis template
│   └── routes.php                  # rute
│
├── public
│   ├── css
│   │   └── style.css               # file CSS
│   │   
│   ├── images
│   │   └── logo.png                # logo
│   │   
│   ├── js
│   │   └── main.js                 # file javascript
│   │   
│   ├── .htaccess                   # konfigurasi server (apache)
│   └── index.php                   #  titik masuk utama web
│
└── .htaccess                       # pengalihan URL
```

## Installation
```
git clone https://github.com/fitri-hy/hytech-framework-php.git
```
- Pindahkan proyek hytech-framework-php ke htdocs (xampp)
- Start apache
- Jalan di browser `http://localhost/hytech-framework-php/`

Proyek ini masih versi web statis belum ada koneksi ke database :). Jadi kamu bisa membuat sendiri koneksinya dan menyesuaikan dengan kebutuhan.

Support me by giving stars.
