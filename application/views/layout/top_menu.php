<!-- link websitenya http://getbootstrap.com/components/#navbar -->
<!-- Navbar default, Navbar adalah komponen meta responsif yang-
     -berfungsi sebagai "header navigasi/kepala halaman yang berfungsi kelanjutan"-
     -untuk aplikasi atau situs Anda. Mereka mulai runtuh (dan dapat diganti-
     -dalam tampilan seluler dan menjadi horizontal karena lebar viewport yang-
     -tersedia meningkat -->
<nav class="navbar navbar-default"> 
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display/
         Merek dan toggle dikelompokkan untuk tampilan mobile yang lebih baik -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class=navbar-brand>User</div>
      <!-- menampilkan "Toko Online" yang terletak di sisi paling kanan --> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling/
         Kumpulkan link nav, form, dan konten lainnya untuk Toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul class="nav navbar-nav navbar-right"> <!-- style membuat perintah yang dimunculkan diletakkan dikepojok kanan -->
        
        <?php if($this->session->userdata('username2')) { ?> <!-- kondisi dimana sedang login -->
            <li>
                <div style="line-height:50px;">You Are : <?=$this->session->userdata('username2')?></div>
                <!-- "(style="line-height:50px;")" spasi vertikal/tegak lurus satuan pixel "50px" -->
                <!-- menampilkan "You Are : " -->
                <!-- "<=$this->session->userdata('username2')?>" berfungsi menampilkan "username2" pada database -->
            </li>
            <li>
                <?php echo anchor('logout', 'Logout');?> <!-- menampilkan "Logout" dengan dapat diklik/fungsi-
                                                              -kelanjutan menujut ke controller "logout" -->
            </li>
        <?php } else { ?> <!-- kondisi dimana sedang logout -->
            <li>
                <?php echo anchor('register', 'Register');?> <!-- menampilkan "Register" dengan dapat diklik/fungsi-
                                                            -kelanjutan menujut ke controller "register" -->
            </li>
            <li>
                <?php echo anchor('login', 'Login');?> <!-- menampilkan "Login" dengan dapat diklik/fungsi-
                                                            -kelanjutan menujut ke controller "login" -->
            </li>            
        <?php } ?>
      </ul>
        
    </div><!-- /.navbar-collapse/Navbar-runtuh -->
  </div><!-- /.container-fluid/Wadah-cairan -->
</nav>