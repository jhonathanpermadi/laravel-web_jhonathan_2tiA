<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Mahasiswa - <?php echo e($mahasiswa->nama_lengkap); ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px 15px;
            background: #e5e7eb;
            font-family: Arial, sans-serif;
            color: #222;
        }

        .cv {
            max-width: 850px;
            margin: auto;
            background: white;
            display: grid;
            grid-template-columns: 35% 65%;
            box-shadow: 0 5px 25px #0002;
        }

        .kiri {
            background: #f3f4f6;
            padding: 35px 25px;
            overflow-wrap: anywhere;
        }

        .kanan {
            padding: 40px 30px;
            overflow-wrap: anywhere;
        }

        .inisial {
            width: 115px;
            height: 115px;
            border-radius: 50%;
            background: #263548;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        h1 {
            font-size: 29px;
            margin: 0 0 10px;
            overflow-wrap: anywhere;
        }

        h2 {
            font-size: 15px;
            letter-spacing: 2px;
            border-bottom: 2px solid #263548;
            padding-bottom: 8px;
            margin-top: 28px;
            text-transform: uppercase;
        }

        .jabatan {
            color: #526174;
            font-weight: bold;
            line-height: 1.6;
        }

        .item {
            margin: 14px 0;
            line-height: 1.7;
            font-size: 14px;
        }

        .label {
            color: #657080;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .footer {
            grid-column: 1 / -1;
            background: #263548;
            color: white;
            padding: 18px;
            text-align: center;
            font-size: 12px;
        }

        .tombol {
            display: block;
            width: fit-content;
            margin: 0 auto 20px;
            background: #263548;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 6px;
        }

        @media (max-width: 600px) {
            .cv {
                grid-template-columns: 1fr;
            }

            .footer {
                grid-column: 1;
            }

            .kiri,
            .kanan {
                padding: 25px;
            }
        }

        @media print {
            body {
                padding: 0;
                background: white;
            }

            .cv {
                box-shadow: none;
            }

            .tombol {
                display: none;
            }
        }

        .foto-profil {
    width: 115px;
    height: 115px;
    margin-bottom: 25px;
}

.foto-profil img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #263548;
}
    </style>
</head>

<body>

    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="tombol">
        ← Kembali ke Data Mahasiswa
    </a>

    <div class="cv">

        <aside class="kiri">
            <div class="foto-profil">
                <img src="<?php echo e(asset('images/ahok.jpg')); ?>" alt="Foto Mahasiswa">
            </div>

            <h1><?php echo e($mahasiswa->nama_lengkap); ?></h1>

            <p class="jabatan">
                Mahasiswa <?php echo e($mahasiswa->program_studi); ?>

            </p>

            <h2>Data Mahasiswa</h2>

            <div class="item">
                <div class="label">NIM</div>
                <?php echo e($mahasiswa->nim); ?>

            </div>

            <div class="item">
                <div class="label">Program Studi</div>
                <?php echo e($mahasiswa->program_studi); ?>

            </div>

            <div class="item">
                <div class="label">Kelas</div>
                <?php echo e($mahasiswa->kelas); ?>

            </div>

            <div class="item">
                <div class="label">Jenis Kelamin</div>
                <?php echo e($mahasiswa->jenis_kelamin); ?>

            </div>
        </aside>

        <main class="kanan">
            <h2>Profil</h2>

            <p class="item">
                Saya adalah mahasiswa Program Studi
                <?php echo e($mahasiswa->program_studi); ?>

                di Politeknik Caltex Riau.
                Saya terus mengembangkan kemampuan dan
                pengetahuan di bidang teknologi informasi.
            </p>

            <h2>Informasi Kontak</h2>

            <div class="item">
                <div class="label">Email</div>
                <?php echo e($mahasiswa->email); ?>

            </div>

            <div class="item">
                <div class="label">Nomor Telepon</div>
                <?php echo e($mahasiswa->nomor_telepon); ?>

            </div>

            <div class="item">
                <div class="label">Alamat</div>
                <?php echo e($mahasiswa->alamat ?: 'Belum diisi'); ?>

            </div>

            <h2>Informasi Akademik</h2>

            <div class="item">
                <strong><?php echo e($mahasiswa->program_studi); ?></strong>
                <br>
                Politeknik Caltex Riau
                <br>
                Kelas <?php echo e($mahasiswa->kelas); ?>

            </div>

            <button class="tombol" onclick="window.print()">
                Cetak / Simpan PDF
            </button>
        </main>

        <footer class="footer">
            Curriculum Vitae Mahasiswa
            &bull; Politeknik Caltex Riau
        </footer>

    </div>

</body>

</html>
<?php /**PATH C:\laragon-6.0-minimal\www\able-pro-free-admin-dashboard-template-v\resources\views/admin/mahasiswa/cv.blade.php ENDPATH**/ ?>