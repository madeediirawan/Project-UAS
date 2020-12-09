<div class="row">
    <div class="pull-left">
        <h4>Data Produk</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=produk&page=add">
            <button class="btn btn-primary">Tambah Produk</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>Nama</th><th>Merek</th><th>Harga</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($produk != NULL){ 
                $no=1;
                foreach($produk as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama'];?></td><td><?=$row['merek']?></td>
                        <td><?=$row['harga']?></td>                        
                        
                        <td>
                            <a href="index.php?mod=produk&page=edit&id=<?=$row['id_produk']?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=produk&page=delete&id=<?=$row['id_produk']?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>