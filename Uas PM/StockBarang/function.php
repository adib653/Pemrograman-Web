<?php
//membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","stockbarang");


//Menambah Barang Baru
if(isset($_POST['addnewbarang'])) {
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn,"Insert Into Stock (namabarang, deskripsi, stock) 
    values('$namabarang','$deskripsi','$stock')");
    if($addtotable) {
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
};


//Menambah barang Masuk
if(isset($_POST['barangmasuk'])) {
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstocksekarang = mysqli_query($conn, "select * from stock where idbarang='$barangnya'");

    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $cekstocksekarang = $ambildatanya ['stock'];
    $tambahkanstocksekarangdenganquantity = $stocksekarang+$qty;


    $addtomasuk = mysqli_query($conn,"Insert Into Masuk (idbarang, keterangan, qty) values('$barangnya','$penerima', '$qty')");
    $updatestockmasuk = mysqli_query($conn,"update stock set stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
    if($addtomasuk&&$updatestockmasuk) {
        header('location:masuk.php');
    } else{
        echo 'Gagal';
        header('location:masuk.php');
    }
};

//Menambah barang Keluar
if(isset($_POST['addbarangkeluar'])) {
    $barangnya = $_POST['barangnya'];
    $penerima = $_POST['penerima'];
    $qty = $_POST['qty'];

    $cekstocksekarang = mysqli_query($conn, "select * from stock where idbarang='$barangnya'");

    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $cekstocksekarang = $ambildatanya ['stock'];
    $tambahkanstocksekarangdenganquantity = $stocksekarang-$qty;


    $addtokeluar = mysqli_query($conn,"Insert Into Keluar (idbarang, penerima, qty) values('$barangnya','$penerima', '$qty')");
    $updatestockmasuk = mysqli_query($conn,"update stock set stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
    if($addtokeluar&&$updatestockmasuk) {
        header('location:keluar.php');
    } else{
        echo 'Gagal';
        header('location:keluar.php');
    }
};


//Update info barang
if(isset($_POST['updatebarang'])) {
    $idb = $_POST['idb'];
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];

    $update = mysqli_query($conn,"update stock set namabarang='$namabarang', deskripsi='$deskripsi' where idbarang ='$idb'");
    if($update) {
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
}

//Menghapus barang dari stock
if(isset($_POST['hapusbarang'])) {
    $idb = $_POST['$idb'];

    $hapus = mysqli_query($conn,"delete from stock where idbarang='$idb'");
    if($hapus) {
        header('location:index.php');
    } else{
        echo 'Gagal';
        header('location:index.php');
    }
}

//Menambahkan admin baru
if(isset($_POST['addadmin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryinsert = mysqli_query($conn,"insert into login (email, password) values ('$email','$password')");

    if($queryinsert) {
        //if berhasil
        header('location:admin.php');
    } else{
        //kalau gagal insert ke db
        header('location:admin.php');
    }
}

//Edit data admin
if(isset($_POST['updateadmin'])) {
    $emailbaru = $_POST['emailadmin'];
    $passwordbaru = $_POST['passwordbaru'];
    $idnya = $_POST['id'];

    $queryupdate = mysqli_query($conn,"update login set email='$emailbaru' , password='$passwordbaru'where iduser='$idnya'");

    if($queryupdate) {
        header('location:admin.php');
    } else{
        header('location:admin.php');
    }
}

//hapus admin
if(isset($_POST['updateadmin'])) {
    $idnya = $_POST['id'];

    $querydelete = mysqli_query($conn,"delete  from login where iduser='$idnya'");

    if($querydelete) {
        header('location:admin.php');
    } else{
        header('location:admin.php');
    }
}

?>