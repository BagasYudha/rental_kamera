<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ ('css/Admin.css') }}">
    <!-- <link rel="stylesheet" href="./index.css" /> -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
    <h1>AAAAAAAAAAAAa</h1>
    <div class="admin">
      <div class="nama">Nama</div>
      <div class="no">No</div>
      <div class="harga-sewahari">Harga sewa/hari</div>
      <div class="kategori">Kategori</div>
      <div class="stock">Stock</div>
      <div class="aksi">Aksi</div>
      <div class="canon-eos250d">Canon EOS250D</div>
      <div class="div">1</div>
      <div class="rp-50000">Rp. 50.000</div>
      <div class="kamera">Kamera</div>
      <div class="div1">6</div>
      <div class="rectangle-parent" id="groupContainer">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="rectangle-group">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <div class="canon-mark-iii">Canon MARK-III</div>
      <div class="sony-tele">Sony Tele</div>
      <div class="canon-r6">Canon R6</div>
      <div class="nikko-tele-400m">Nikko Tele 400m</div>
      <div class="canon-fix-32mm">Canon fix 32mm</div>
      <div class="sony-g-mount-28">Sony G-Mount 28</div>
      <div class="canon-90d">Canon 90D</div>
      <div class="div2">2</div>
      <div class="div3">3</div>
      <div class="div4">4</div>
      <div class="div5">5</div>
      <div class="div6">6</div>
      <div class="div7">7</div>
      <div class="div8">8</div>
      <div class="rp-60000">Rp. 60.000</div>
      <div class="rp-80000">Rp. 80.000</div>
      <div class="rp-55000">Rp. 55.000</div>
      <div class="rp-130000">Rp. 130.000</div>
      <div class="rp-30000">Rp. 30.000</div>
      <div class="rp-40000">Rp. 40.000</div>
      <div class="rp-600001">Rp. 60.000</div>
      <div class="kamera1">Kamera</div>
      <div class="lensa">Lensa</div>
      <div class="kamera2">Kamera</div>
      <div class="lensa1">Lensa</div>
      <div class="lensa2">Lensa</div>
      <div class="lensa3">Lensa</div>
      <div class="kamera3">Kamera</div>
      <div class="div9">4</div>
      <div class="div10">5</div>
      <div class="div11">6</div>
      <div class="div12">2</div>
      <div class="div13">5</div>
      <div class="div14">5</div>
      <div class="div15">8</div>
      <div class="rectangle-container" id="groupContainer2">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="group-div" id="groupContainer3">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="rectangle-parent1" id="groupContainer4">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="rectangle-parent2" id="groupContainer5">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="rectangle-parent3" id="groupContainer6">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="rectangle-parent4" id="groupContainer7">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="rectangle-parent5" id="groupContainer8">
        <div class="group-child"></div>
        <div class="edit">Edit</div>
      </div>
      <div class="rectangle-parent6">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <div class="rectangle-parent7">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <div class="rectangle-parent8">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <div class="rectangle-parent9">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <div class="rectangle-parent10">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <div class="rectangle-parent11">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <div class="rectangle-parent12">
        <div class="group-item"></div>
        <div class="hapus">Hapus</div>
      </div>
      <img class="admin-child" alt="" src="./public/vector-3.svg" />

      <div class="daftar-barang">Daftar Barang</div>
      <div class="tambah-barang" id="tambahBarangContainer">
        <div class="tambah-barang-child"></div>
        <b class="tambah-item">Tambah Item</b>
      </div>
      <div class="navbar">
        <b class="dashboard" id="dashboardText">Dashboard</b>
        <div class="transaksi" id="transaksiText">
          <b>Transaksi</b>
          <span class="span"> </span>
        </div>
        <img class="navbar-child" alt="" src="./public/rectangle-22.svg" />

        <img class="logo-icon" alt="" src="{{ ('css/gambar/Artboard 3.png') }}" />
      </div>
    </div>

    <script>
      var groupContainer = document.getElementById("groupContainer");
      if (groupContainer) {
        groupContainer.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var groupContainer2 = document.getElementById("groupContainer2");
      if (groupContainer2) {
        groupContainer2.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var groupContainer3 = document.getElementById("groupContainer3");
      if (groupContainer3) {
        groupContainer3.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var groupContainer4 = document.getElementById("groupContainer4");
      if (groupContainer4) {
        groupContainer4.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var groupContainer5 = document.getElementById("groupContainer5");
      if (groupContainer5) {
        groupContainer5.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var groupContainer6 = document.getElementById("groupContainer6");
      if (groupContainer6) {
        groupContainer6.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var groupContainer7 = document.getElementById("groupContainer7");
      if (groupContainer7) {
        groupContainer7.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var groupContainer8 = document.getElementById("groupContainer8");
      if (groupContainer8) {
        groupContainer8.addEventListener("click", function (e) {
          // Please sync "Edit Barang" to the project
        });
      }
      
      var tambahBarangContainer = document.getElementById("tambahBarangContainer");
      if (tambahBarangContainer) {
        tambahBarangContainer.addEventListener("click", function (e) {
          // Please sync "Tambah Barang" to the project
        });
      }
      
      var dashboardText = document.getElementById("dashboardText");
      if (dashboardText) {
        dashboardText.addEventListener("click", function (e) {
          window.location.href = "admin.html";
        });
      }
      
      var transaksiText = document.getElementById("transaksiText");
      if (transaksiText) {
        transaksiText.addEventListener("click", function (e) {
          // Please sync "Transaksi" to the project
        });
      }
      </script>
  </body>
</html>
