 <h1 class="h3 mb-4 text-gray-800">Selamat Datang 
    <?php 

                                        if (isset($_SESSION['admin'])) {
                                            echo $_SESSION['admin']['nama'];
                                        }else{
                                            echo $_SESSION['user']['nama'];
                                        }

                                     ?>
 </h1>
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h5>APLIKASI ABSENSI ONLINE</h5>
                        </div>
                        <div class="card-body">
                            <h4>Aplikasi Absensi Berbasis Website LP3I Makassar</h4>
                            <h5 style="color:darkred;">Jangan Lupa Absen Hari Ini !!</h5>
                        </div>
                    </div>