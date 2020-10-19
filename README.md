## Memulai

### Install PHP

Untuk memulai install terlebih dahulu PHP >= 7.3 dengan Extension, dibawah ini:
* BCMath
* Ctype
* Fileinfo
* JSON
* Mbstring
* OpenSSL
* PDO
* Tokenizer
* XML

### Clone Proyek

Untuk clone proyek **Blog**, cukup *git clone*, seperti contoh dibawah ini:
```
git clone git@github.com:BabyCode10/blog.git
```
Jangan lupa install terlebih dahulu **git**, untuk dapat meng-*clone*.

## Menjalankan 

Untuk menjalankan terlebih dahulu kita *setup* dalam *.env* dengan masing-masing database, seperti dibawah ini:
```
DB_CONNECTION=mysql // nama koneksi
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog // nama database
DB_USERNAME=root // nama user database
DB_PASSWORD=password // password user database
```
Jangan lupa *setup mailtrap* untuk dapat menggunakan fitur *observer*
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=username // username
MAIL_PASSWORD=password // password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```
Setelah selesai jalankan perintah pada terminal, seperti dibwah ini:
```
php artisan migrate --seed
```

### Tes

Untuk memulai jalankan perintah:
```
php artisan serve
```
Untuk masuk ke *website* cukup masukan *url* di *browser* masing-masing dengan *url*:
```
http://localhost:8000 // atau 
http://127.0.0.1:8000
```


## Authors

* **Irfan Hadian** - *web developer*
