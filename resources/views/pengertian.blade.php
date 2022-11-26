<h2>pengenalan laravel</h2>
laravel adalah framework php yang biasanya digunakan untuk membuat web atau API <br>
dibuat oleh taylor otwell pada <br>
2011 <br>
termasuk framework yang open source dan gratis <br>
bahkan kita juga bisa berkontribusi ke projectnya <br>
https://laravel.com/ <br>
<h2>kenapa laravel???</h2>
framework yang paling banyak digunakan <br>
memiliki ekosistem dan komunitas yang besar contohnya dari ekosistem teknologi pendukung <br>

laravel menggunakan konsep MVC(model view controller) <br>
laravel sebenarnya tidak membuat semua bagian pada frameworknya sendiri <br>
contohnya untuk project management laravel menggunakan composer <br>
untuk logging menggunakan monolog <br>
dll <br>
biasanya jika menggunakan XAMPP sudah ada semua requirements yg dibutuhkan <br>
<a>cara pembuatan project menggunakan composer</a> <br>
composer create-project laravel/laravel nama-projectnya <br>

<h2>struktutr project</h2>
config == tempat kita menyimpan file php configuration <br>
database == laravel mendukung database migration yang memungkinkan pengguna bisa membuat data table dari laravel <br>
lang == support beberapa bahasa <br>
public == bagian yang akan ditampilkan di pubic <br>
resource == untuk menyimpan file yang tidak diakses oleh public <br>
route == berisi tentang routing endpoint <br>
storage == tempat menyimpan file <br>
test == untuk unit test <br>
vendor == bawaan dari composer berisikan library yang ada diproject laravel <br>
.env == konfigurasi environment dan cuman ada dilocal <br>

laravel sudah menyediakan secara otomatis file bernama artisan yang berisikan kode php <br>
untuk memnjalankan menggunakan perintah *php artisan serve <br>