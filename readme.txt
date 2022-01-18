=====================================================================
CARA INSTALASI
=====================================================================
1. Silahkan bikin nama database di phpmyadmin dengan nama project.
2. Import file SQL yang ada  di dalam folder DB.
3. Copy seluruh folder yang sudah di download ke folder htdocs.
4. Ketik di browser anda dengan perintah localhost/namaproject anda
======================================================================
USER LOGIN

username = naurah
password = rahasia
role = admin

username = numu
password = numu
role = operator

username = pio
password = pio
role = user

======================================================================
PENJELASAN
======================================================================
Pada project ini diminta untuk membuat structure database dengan user, role, privilege, dan role-privilege. namun, pada database saya ubah menjadi user, user_role, user_menu , dan user_access_menu. 
- Melakukan Login terlebih dahulu
- Setelah melakukan login akan menampilkan dashboard yang dapat diakses oleh semua role
- Selanjutnya ada menu Data Pengguna yang hanya dapat diakses oleh administrator dan operator
- Administrator sendiri dapat melakukan penambahan user dan melakukan penyuntingan atau penghapusan pada data pengguna.
======================================================================
Sebelumnya saya mohon maaf terkait hasil yang saya berikan jika mungkin ada kurang dikarenakan saya sendiri masih mempelajari terkait hak akses atau multi user level pada php. Terima kasih