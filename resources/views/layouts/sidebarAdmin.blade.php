<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ URL::asset('assets/img/WaroenkQu.png') }}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          WaroenkQu
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class=" nav-item">
            <a class="nav-link" href="\dashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="{{ route('Adminprofil') }}">
              <i class="nc-icon nc-single-02"></i>
              <p>Admin Profile</p>
            </a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href='\kategori'>
              <i class="nc-icon nc-tile-56"></i>
              <p>List Kategori</p>
            </a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href='\barang'>
              <i class="nc-icon nc-tile-56"></i>
              <p>List Barang</p>
            </a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="\pembeli">
              <i class="nc-icon nc-tile-56"></i>
              <p>List User</p>
            </a>
          </li>
          <li class=" nav-item">
            <a class="nav-link" href="\transaksi">
              <i class="nc-icon nc-tile-56"></i>
              <p>List Transaksi</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">