<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
            <img src="{{ asset('admin/assets/img/ptdak.png') }}" alt="">
            <span class="d-none d-lg-block">SDM & AU</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="dropdown">
        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown"><i
                class="bi bi-megaphone-fill fa-lg"></i></button>
        <div class="dropdown-menu" style="width: 200px;">
            <table>
                <tr>
                    <h4>Notifikasi</h4>
                    <p style="border-style: solid; border-width: 1px;""></p>

                    <?php 
                $no = 1;
                $hari_ini = date('Y-m-d');
                $get_data = mysqli_query($book, "SELECT DATEDIFF(tmt_golongan, '$hari_ini') 
                AS brp, name FROM book WHERE(tmt_golongan- INTERVAL 3 MONTH)='$hari_ini'
                OR (tmt_golongan- INTERVAL 2 MONTH)='$hari_ini' OR (tmt_golongan- INTERVAL 1 MONTH)='$hari_ini'");
                while ($book = mysqli_fetch_arry($get_data)) {
                ?>
                    <?php } ?>
                    {{-- {{ $no = 1 }}
                {{ $tmt_golongan = date('y-m-d') }}
                {{ $tmt_golongan = mysqli_query(
                    $book,
                    "SELECT DATEDIF(tmt_golongan,'2023-01-09') AS
                     brp, name FORM $book WHERE(tmt_golongan- INTERVAL 3 MONTH)='$hari_ini' OR (tmt_golongan -INTERVAL 2
                      MONTH)='$hari_ini' OR (tmt_golongan- INTERVAL 1 MONTH)='$hari_ini'",
                );
                while ($name = mysqli_fetch_array($tmt_golongan)) {
                } }}  --}}
                </tr>
            </table>
        </div>
    </div>


    <div>
        <div class="ms-auto">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-5 bg-white border-0"><i class="bi bi-box-arrow-right"></i>
                    Logout<span data-feather="log-out "></span>
                </button>
            </form>
        </div>
    </div>
</header><!-- End Header -->
