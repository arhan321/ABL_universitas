# ARSITEKTUR BERBASIS LAYANAN CIE408

membuat REST API dengan studi kasus `UNIVERSITAS`

# anggota kelompok 
```
- hermawan rustandi 
- rafi rahman aripin
- arhan malik alrasyid
- fathan ghani 
```

# teknologi

- docker untuk merapihkan `ENV`
- freamwork `LARAVEL`
- `PHP` Version 8.3

# struktur folder dan penjelasan
```plaintext
|-- database (folder server database)
|    |-- data (folder engine database)
|    |-- conf.d (folder untuk kebutuhan tune up SERVER DB (optional) )
|    
|-- nginx (folder untuk memanggil depedency / kebutuhan NGINX)
|    |--dockerfile (memanggil depedency nginx)
|    |--default.conf (mengkonfig webserver nginx)
|    
|-- php (folder untuk memanggil depedency / kebutuhan PHP)
|    |-- docker-entrypoint.sh (memanggil kebutuhan php for laravel)
|    |-- dockerfile (memanggil depedency php, composer)
|    |-- local.ini (untuk mengkonfigurasi memory_limit & upload_max_filesize dan yang lain lain)
|    |-- www.conf (untuk mengkonfig php supaya bisa terhubung dengan webserver nginx)
|
|-- src_new (project REST API FREAMWORK LARAVEL)
|-- .env (mengatur sebuah nama container)
|-- docker-compose.yml (memanggil service yang kita butuhkan berbasis container)
```

# langkah langkah membuat RESTFUL API menggunakan framework PHP laravel 10

langkah pertama :
```
composer create-project --prefer-dist laravel/laravel:^10.0 .
```

langkah kedua : 
```
atur di env unutk connect ke db nya seperti ini : 
DB_CONNECTION=mysql
DB_HOST=mysql_abl
DB_PORT=3306
DB_DATABASE=abl_data_universitas
DB_USERNAME=root
DB_PASSWORD=123
```

setelah itu silahkan atur untuk `authentikasinya`, ke `authenticate middleware` : 
```
class Authenticate extends Middleware
{
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next, ...$guards)
    {
        if ($this->auth->guard()->guest()) {
            $token = $request->header('password'); 

            if ($token) {
                $check_token = DB::connection('mysql')
                    ->table('users')
                    ->where('password', $token)
                    ->first();

                if ($check_token === null) {
                    $res['success'] = false;
                    $res['message'] = 'Permission Not Allowed';
                    return response()->json($res, 403);
                }
            } else {
                $res['success'] = false;
                $res['message'] = 'Not Authorized';
                return response()->json($res, 401);
            }
        }

        return $next($request);
    }
}

jadi disini kita untuk API key nya kita set static yaitu : (password), untuk value nya berdasarkan dengan password account yang ada pada table users..
```

setelah itu silahkan bikin `MVC` nya, dengan perintah : 
```
php artisan make:model -mc DataDosen
php artisan make:model -mc DataMahasiswa
php artisan make:model -mc DataStaff
php artisan make:model -mc DataMatakuliah
php artisan make:model -mc DataNilai
```

setelah itu silahkan set `migration` dan `model` beserta `controller` dari yang sudah kita bikin, semua datanya sudah ada pada laravel saya, bisa cek pada `migration`, `model`, serta `controller` nya.



# dosen

`arief ichwani`

# happy codingg!!!!