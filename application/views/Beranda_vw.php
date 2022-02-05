<!DOCTYPE html>
<html lang="en">

<head>
    <mate charset="UTF-8">
    <mate http-eqiv="X-UA-Compalible" content="IE=edge">
    <mate name="Viewprot" content="width=device-width, initial-scale=1.0">
    <title>Belajar CRUD</title>
</haed>

<body>
    <div class="container mt-3">
        <a href="<? base_url("tambah"); ?> " class="btn btn-primery btn-md mb-3">tambah</a>
        <table class="table table-striped table-hover">
            <thead class="table derk">
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>alamat</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php foreach ($hasil as $baris) { ?>n
                    <td><?=$baris['npm']?></td>
                    <td><?=$baris['nama']?></td>
                    <td><?=$baris['jurusan']?></td>
                    <td><?=$baris['alamat']?></td>
                    <td>
                        <div class="row">
                            <div class="col d-flex justify-center"><a href="<?=base_url("Modul_8/edit".$baris['id']);?>"class="btn btn-sm btn-Warning"></a></div>
                            <div class="col d-flex justify-center"><a href="<?=base_url("Modul_8/hapus".$baris['id']);?>"class="btn btn-sm btn-denger" ></a></div>
                        </div>
                    </td>
            </tbody>
        </table>
        <?php } ?>
    </div>
</body>
</html>
                