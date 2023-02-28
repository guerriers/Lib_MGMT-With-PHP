<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../../../librarys/afterlogin/Liblistbook.php">ระบบยืมคืนหนังสือ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Member.php">ข้อมูลสมาชิก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Book.php">ข้อมูลหนังสือ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Librarian.php">ข้อมูลเจ้าหน้าที่</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Rentbook.php">ข้อมูลการยืมหนังสือ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Returnbook.php">ข้อมูลการคืนหนังสือ</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Libsearch.php">ค้นหาข้อมูลหนังสือ</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <a class="nav-link" href="../../../librarys/layout/Login.php">ออกจากระบบ</a>
            </ul>
        </div>
    </div>
</nav>

<?php
include("../../librarys/inc/Config.inc.php");
?>