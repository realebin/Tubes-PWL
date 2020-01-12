
<h4>Ini halaman book</h4>

<?php
//$id = FILTER_INPUT(INPUT_GET, 'id');
//if(isset($id)){
//    $buku = new Book();
//    $buku->setIsbn($id);
//    $bukuDao = new BookDaoImpl();
//    $data = $bukuDao->getOneBook($buku);
//    $result = $data -> fetch();
//}
//$btnUpdate = FILTER_INPUT(INPUT_POST, 'btnUpdateBook');
//if($btnUpdate){
//    $isbn = FILTER_INPUT(INPUT_POST, 'isbn');
//    $title = FILTER_INPUT(INPUT_POST, 'title');
//    $author = FILTER_INPUT(INPUT_POST, 'author');
//    $publisher = FILTER_INPUT(INPUT_POST, 'publisher');
//    $publish_date = FILTER_INPUT(INPUT_POST, 'publish_date');
//    $price = FILTER_INPUT(INPUT_POST, 'price');
//    $cat = FILTER_INPUT(INPUT_POST, 'cat');
//    $coverlama = FILTER_INPUT(INPUT_POST, 'coverlama');
//
//    $namafile = $_FILES['cover']['name'];
//    $tmp = $_FILES['cover']['tmp_name'];
//    $ukuran = $_FILES['cover']['size'];
//    $ext = pathinfo($namafile, PATHINFO_EXTENSION);
//
//    $app_ext = array('png','jpg','jpeg','gif','svg','bmp');
//    $newfile = $isbn.'.'.$ext;
//
//    if(TRIM($namafile) != '' && in_array($ext, $app_ext) == TRUE){//ini kalau ada file baru yang dipilih
//        $coverbaru = $newfile;
//        move_uploaded_file($tmp,'images/'.$coverbaru);
//    }
//    else{//ini kalau mau gunakn yang lama
//        $coverbaru=$coverlama;
//    }
//    $buku = new Book();
//    $buku->setIsbn($id);
//    $buku->setTitle($title);
//    $buku->setAuthor($author);
//    $buku->setPublisher($publisher);
//    $buku->setPublishDate($publish_date);
//    $buku->setPrice($price);
//    $buku->setCover($coverbaru);
//    $buku->setCat($cat);
//
//
//    $bukuDao = new BookDaoImpl();
//    $msg = $bukuDao->updateBook($buku);
//
//    header("location:index.php?menu=buku&msg=".$msg);
//}
?>

<fieldset>
    <legend>Update User</legend>
    <form method="POST" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td><input type="text" name="role" required value="<?php echo $result->getRole(); ?>"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required value="<?php echo $result->getNama(); ?>"/></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="uname" required value="<?php echo $result->getUsername(); ?>"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="pwd" required value="<?php echo $result->getPassword(); ?>"/></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Update" name="btnUpdateUser"/></td>
            </tr>
        </table>
    </form>

</fieldset>


<script type="text/javascript">
    $(document).ready(function() {
        $('#book').DataTable();
    });
</script>