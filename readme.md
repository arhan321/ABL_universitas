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

# dosen

`arief ichwani`

# happy codingg!!!!