<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">ระบบยืมคืนหนังสือ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Truelistbook.php">ข้อมูลหนังสือ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        การยืม - คืนหนังสือ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">ข้อมูลการยืมหนังสือ</a></li>
                        <li><a class="dropdown-item" href="#">ข้อมูลการคืนหนังสือ</a></li>

                    </ul>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="../../../librarys/afterlogin/Searchbook.php">ค้นหาข้อมูลหนังสือ</a>
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