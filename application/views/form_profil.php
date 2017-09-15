<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page | Add New Product</title>
        <!-- Load JQuery dari CDN -->
        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script> <!-- menampilkan; datatables-->
        
        <!-- Load DataTables dan Bootstrap dari CDN -->
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script> <!-- menampilkan; datatables-->
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script> <!-- melengkapi; datatables-->
	
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> <!-- merubah; jenis huruf, desain table class, melengkapi datables-->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css"> <!-- melengkapi; datatables-->        
    </head>
    <body>
        <?php $this->load->view('layout/top_menu') ?> <!-- meng akses view "top_menu" yang tersimpan pada folder layout -->
        <!-- dalam div row harus ada col yang maksimum nilainya 12 -->
            
            <div class="row"> <!-- HTML <div> element dapat dijadikan "wadah" untuk menempatkan beberapa 
                              elemen menjadi satu bagian, yang penggunaannya ditujukan untuk 
                              mempermudah aplikasi style dengan CSS -->
                <div class="col-md-1"></div> <!-- membuat blok sisi kiri ("class="col-md-1">kiri</div>")-->
                <div class="col-md-10">
                    <center><h1>Your Profil</h1></center>               

                    <?php 
                        if(!empty($products)) :
                        foreach($products as $product) : ?>
                                                
                            <?=form_open('logout', ['class'=>'form-horizontal'])?> <!-- meng akses controller "login" untuk melakukan validation form -->                                       

                                <div class="form-group"> <!-- style pelengkap -->                      
                                  <div class="col-sm-offset-2 col-sm-10"> <!-- style pelengkap button, yang membuat sejajar vertikal-
                                                                               -dengan input, kotak lain --> 
                                     <!-- "(style="line-height:50px;")" spasi vertikal/tegak lurus satuan pixel "50px" -->
                                     <!-- menampilkan "You Are : " -->
                                     <!-- "<=$this->session->userdata('username2')?>" berfungsi menampilkan "username2" pada database -->
                                    <h4 style="line-height:20px;">Username : <?=$product->username2?></h4>
                                    <h4 style="line-height:20px;">Email : <?=$product->email2?></h4>                                    
                                    <button type="submit" class="btn btn-default">Logout</button> 
                                    <!-- membuat button/input tulisan "Sign in" dengan kotak/button -->
                                  </div>
                                </div>
                            </form>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div> <!-- membuat blok sisi tengah ("class="col-md-10">tengah</div>")-->
                <div class="col-md-1"></div> <!-- membuat blok sisi kanan ("class="col-md-1">kanan</div>")-->
            </div>

            <script>
                $(document).ready(function(){  <!-- menampilkan; datatables-->
                    $('#myTable').DataTable(); <!-- menampilkan; datatables-->
                });                            <!-- menampilkan; datatables-->
            </script> <!-- "Script" adalah bahasa yang digunakan untuk menerjemahkan 
                           setiap perintah dalam situs yang pada saat di akses -->
            
    </body>        
</html>