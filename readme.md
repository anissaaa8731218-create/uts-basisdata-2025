# 🏥 Hospital Management System – Database Documentation  
_Premium Edition_

---

## 📑 Daftar Isi
- [Deskripsi Sistem](#deskripsi-sistem)
- [Struktur Database](#struktur-database)
- [Detail Schema](#detail-schema)
- [Relasi ERD](#relasi-erd)
- [📦 Migration (FULL)](#-migration-full)
- [🌱 Seeder (FULL)](#-seeder-full)

---

# 📌 Deskripsi Sistem
Dokumentasi ini menjelaskan struktur database Sistem Informasi Rumah Sakit yang terdiri dari beberapa modul inti:

- Rumah Sakit  
- Poliklinik  
- Dokter  
- Jadwal Praktek  
- Pasien  
- Kunjungan  
- Obat  
- Resep  
- Resep Item  

---

# 🏛️ Struktur Database

| Tabel | Fungsi |
|-------|--------|
| rumah_sakits | Data utama rumah sakit |
| polikliniks | Data poliklinik |
| dokters | Data dokter |
| jadwal_prakteks | Jadwal dokter |
| pasiens | Data pasien |
| kunjungans | Riwayat kunjungan |
| obats | Data obat |
| reseps | Header resep |
| resep_items | Detail resep |

---

# 🧱 Detail Schema
(Struktur tabel dijelaskan di sini… **sudah sesuai contoh kamu sebelumnya**.)

---

# 🔗 Relasi ERD
- Rumah Sakit → Poliklinik → Dokter  
- Dokter → Jadwal Praktek  
- Pasien → Kunjungan → Resep → Resep Item  
- Resep Item → Obat  

---

# 📦 MIGRATION (FULL — DIGABUNG JADI SATU BLOK)

```php
<?php

// ======================
// MIGRATION RUMAH SAKIT
// ======================
Schema::create('rumah_sakits', function (Blueprint $table) {
    $table->id();
    $table->string('kode_rs')->unique();
    $table->string('nama',150);
    $table->string('tipe_rs',5)->nullable();
    $table->text('alamat');
    $table->string('kota',100);
    $table->string('provinsi',100);
    $table->string('telepon',20);
    $table->string('email',150);
    $table->string('website',150)->nullable();
    $table->timestamps();
});

// ======================
// MIGRATION POLIKLINIK
// ======================
Schema::create('polikliniks', function (Blueprint $table) {
    $table->id();
    $table->foreignId('rumah_sakit_id')->constrained('rumah_sakits')->onDelete('cascade');
    $table->string('kode_poli',20);
    $table->string('nama',150);
    $table->string('lantai',10)->nullable();
    $table->string('jam_operasional',50)->nullable();
    $table->timestamps();
});

// ======================
// MIGRATION DOKTER
// ======================
Schema::create('dokters', function (Blueprint $table) {
    $table->id();
    $table->foreignId('poliklinik_id')->constrained('polikliniks')->onDelete('cascade');
    $table->string('nama',150);
    $table->enum('jenis_kelamin',['L','P']);
    $table->string('spesialisasi',100);
    $table->string('telepon',20)->nullable();
    $table->string('email',150)->nullable();
    $table->string('sip',100)->nullable();
    $table->timestamps();
});

// ======================
// MIGRATION JADWAL PRAKTEK
// ======================
Schema::create('jadwal_prakteks', function (Blueprint $table) {
    $table->id();
    $table->foreignId('dokter_id')->constrained('dokters')->onDelete('cascade');
    $table->string('hari');
    $table->time('jam_mulai');
    $table->time('jam_selesai');
    $table->boolean('is_libur')->default(false);
    $table->timestamps();
});

// ======================
// MIGRATION PASIEN
// ======================
Schema::create('pasiens', function (Blueprint $table) {
    $table->id();
    $table->string('no_rm')->unique();
    $table->string('nik',16)->unique();
    $table->string('nama');
    $table->enum('jenis_kelamin',['L','P']);
    $table->date('tanggal_lahir');
    $table->text('alamat');
    $table->string('kota',100);
    $table->string('provinsi',100);
    $table->string('no_hp',20);
    $table->string('golongan_darah',3)->nullable();
    $table->string('status_pernikahan',20)->nullable();
    $table->string('pekerjaan',50)->nullable();
    $table->timestamps();
});

// ======================
// MIGRATION KUNJUNGAN
// ======================
Schema::create('kunjungans', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade');
    $table->foreignId('dokter_id')->constrained('dokters')->onDelete('cascade');
    $table->dateTime('tanggal_kunjungan');
    $table->text('keluhan')->nullable();
    $table->text('diagnosa')->nullable();
    $table->text('tindakan')->nullable();
    $table->integer('biaya_kunjungan')->nullable();
    $table->string('status',20)->default('menunggu');
    $table->timestamps();
});

// ======================
// MIGRATION OBAT
// ======================
Schema::create('obats', function (Blueprint $table) {
    $table->id();
    $table->string('kode_obat')->unique();
    $table->string('nama');
    $table->string('kategori');
    $table->string('jenis');
    $table->integer('stok');
    $table->integer('harga');
    $table->string('satuan');
    $table->timestamps();
});

// ======================
// MIGRATION RESEP
// ======================
Schema::create('reseps', function (Blueprint $table) {
    $table->id();
    $table->foreignId('kunjungan_id')->constrained('kunjungans')->onDelete('cascade');
    $table->foreignId('obat_id')->constrained('obats')->onDelete('cascade');
    $table->integer('jumlah');
    $table->string('aturan_pakai');
    $table->text('catatan')->nullable();
    $table->timestamps();
});
```

---

# 🌱 SEEDER (FULL — DIGABUNG JADI SATU BLOK)

```php
<?php

// ========== Rumah Sakit Seeder ==========
DB::table('rumah_sakits')->insert([
    [
        'kode_rs' => 'RS001',
        'nama' => 'RS Budi Mulia',
        'tipe_rs' => 'B',
        'alamat' => 'Jl. Merdeka No. 12',
        'kota' => 'Jakarta',
        'provinsi' => 'DKI Jakarta',
        'telepon' => '0211234567',
        'email' => 'info@rssehat.com',
        'website' => 'https://rssehat.com',
        'created_at' => now(),
    ],
]);

// ========== Poliklinik Seeder ==========
DB::table('polikliniks')->insert([
    [
        'rumah_sakit_id' => 1,
        'kode_poli' => 'POLI001',
        'nama' => 'Poli Umum',
        'lantai' => '1',
        'jam_operasional' => '08:00 - 17:00',
    ],
    [
        'rumah_sakit_id' => 1,
        'kode_poli' => 'POLI002',
        'nama' => 'Poli Gigi',
        'lantai' => '2',
        'jam_operasional' => '08:00 - 15:00',
    ],
]);

// ========== Dokter Seeder ==========
DB::table('dokters')->insert([
    [
        'poliklinik_id' => 1,
        'nama' => 'Dr. Andi',
        'jenis_kelamin' => 'L',
        'spesialisasi' => 'Umum',
        'telepon' => '08123456789',
        'email' => 'andi@rs.com',
        'sip' => 'SIP123',
    ],
    [
        'poliklinik_id' => 2,
        'nama' => 'Dr. Della',
        'jenis_kelamin' => 'P',
        'spesialisasi' => 'Gigi',
        'telepon' => '08129876543',
        'email' => 'della@rs.com',
        'sip' => 'SIP456',
    ],
]);

// ========== Jadwal Praktek ==========
DB::table('jadwal_prakteks')->insert([
    [
        'dokter_id' => 1,
        'hari' => 'Rabu',
        'jam_mulai' => '07:00',
        'jam_selesai' => '12:00',
        'is_libur' => false,
    ],
    [
        'dokter_id' => 2,
        'hari' => 'Jumat',
        'jam_mulai' => '09:00',
        'jam_selesai' => '13:00',
        'is_libur' => false,
    ],
]);

// ========== Pasien Seeder ==========
DB::table('pasiens')->insert([
    [
        'no_rm' => 'RM0001',
        'nik' => '3174051234560001',
        'nama' => 'Adi Pratama',
        'jenis_kelamin' => 'L',
        'tanggal_lahir' => '1995-05-12',
        'alamat' => 'Jl. Mawar No.10',
        'kota' => 'Jakarta',
        'provinsi' => 'DKI Jakarta',
        'no_hp' => '08123456789',
        'golongan_darah' => 'O',
        'status_pernikahan' => 'Belum Kawin',
        'pekerjaan' => 'Karyawan',
    ],
]);

// ========== Kunjungan ==========
DB::table('kunjungans')->insert([
    [
        'pasien_id' => 1,
        'dokter_id' => 1,
        'tanggal_kunjungan' => '2025-02-01 10:00:00',
        'keluhan' => 'Demam dan Lambung',
        'diagnosa' => 'Demam biasa',
        'tindakan' => 'Pemberian obat',
        'biaya_kunjungan' => 75000,
        'status' => 'selesai',
    ],
]);

// ========== Obat ==========
DB::table('obats')->insert([
    [
        'kode_obat' => 'OB001',
        'nama' => 'Paracetamol',
        'kategori' => 'Tablet',
        'jenis' => 'Generik',
        'stok' => 200,
        'harga' => 5000,
        'satuan' => 'strip',
    ],
]);

// ========== Resep ==========
DB::table('reseps')->insert([
    [
        'kunjungan_id' => 1,
        'obat_id' => 1,
        'jumlah' => 2,
        'aturan_pakai' => '2x1 setelah makan',
        'catatan' => 'Minum air putih yang banyak',
    ],
]);```