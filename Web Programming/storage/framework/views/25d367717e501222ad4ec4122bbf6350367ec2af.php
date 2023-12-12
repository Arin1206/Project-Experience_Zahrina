<html>

<head>
  <meta name="viewport" content="width:device-width, intial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    #mySidenav a {
      position: fixed;
      left: -80px;
      transition: 0.3s;
      padding: 15px;
      padding-right: 20px;
      padding-left: 10px;
      width: 150px;
      text-decoration: none;
      font-size: 20px;
      color: white;
      border-radius: 0 5px 5px 0;
      z-index:3;
    }

    #mySidenav a:hover {
      left: 0;
    }

    #about {
      top: 80px;
      background-color: #04AA6D;
    }

    #blog {
      margin-top: 30px;
      top: 120px;
      background-color: #2196F3;
    }

    #transcript {
      margin-top: 40px;
      top: 180px;
      background-color: rgb(242, 5, 230)
    }


    #projects {
      margin-top: 50px;
      top: 240px;
      background-color: #555
    }

    #contact {
      margin-top: 60px;
      top: 300px;
      background-color: #f44336;
    }

    .row-pp {
      position: fixed;
      top: 0;
      margin-left: 10px;
      width: 120%;
    }

    #myDIV {
      width: 300px;
      height: 200px;
      background: red url('.gif') no-repeat top left/5px 5px;
      animation: mymove 5s infinite;
    }

    @keyframes mymove {
      50% {
        background: yellow bottom right/30px 50px;
      }

      20% {
        background: blue bottom right/30px 50px;
      }

      20% {
        background: magenta bottom right/30px 50px;
      }

      10% {
        background: blueviolet bottom right/30px 50px;
      }
    }

    .topnav {
      overflow: hidden;
      background-image: url(https://img.freepik.com/premium-vector/realistic-style-colorful-clouds-background_23-2148964527.jpg?w=1500);
      background-size: 1100px 400px;
      border-bottom: 2px solid white;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      border-radius: 15px;
      text-decoration: none;
      font-size: 17px;
    }

    .img-style {
      float: left;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .topnav a:hover {
      background-color: magenta;
      color: black;
    }

    .topnav a.active {
      background-color: rgb(10, 10, 10, 0.1);
      color: rgb(254, 254, 254);
      border: 2px solid magenta;
    }

    .topnav a.active:hover {
      background-color: magenta;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }
    div.sticky {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  z-index: 2;
}

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align:center;
      }
    }

    .nav-link:hover {
      background-color: magenta;
      color: white;
    }

    .nav-link:active {
      background-color: #2196F3;
    }

    a:active {
      color: white;
    }

    a:hover {
      color: white;
    }


    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }

    * {
      box-sizing: border-box;
    }

    .column {
      float: left;
      width: 25%;
      padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
      margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
    }

    /* Style the counter cards */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      border-left: 5px solid dodgerblue;
      border-bottom: 5px solid magenta;
      margin-bottom: 5px;
      text-align: center;
      background-image: url(https://w0.peakpx.com/wallpaper/981/75/HD-wallpaper-ocean-at-dawn-vb-abstract-aquamarine-azure-background-beige-blue-ocean-blue-sky-canvas-digital-art-fantasy-fjord-gradient-graphics-indigo-lime-ombre-colors-painting-sea-summer-turquoise.jpg);
    }

    .card2 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      border-left: 5px solid dodgerblue;
      border-bottom: 5px solid magenta;
      margin-bottom: 5px;
      text-align: center;
      background-image: url(https://i.pinimg.com/originals/4d/b7/72/4db7721932b839f545f474363bf5288c.jpg);
    }

    .card3 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      border-left: 5px solid dodgerblue;
      border-bottom: 5px solid magenta;
      margin-bottom: 5px;
      text-align: center;

    }

    title {
      background-color: blueviolet;
      color: white;
      border-radius: 10px;
      border: 2px solid white;
    }

    .ex {
      background-color: magenta;
      border-radius: 14px;
      margin-bottom: 10px;
    }

    .ex:hover {
      background-color: yellow;
      border: 3px solid white;
      border-radius: 14px;
    }


    .carousel-control-prev {
      margin-left: -1cm;

    }
    .table-warna {
      background-color:aquamarine;
    }
    .table-warna2 {
      background-color:magenta;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>

    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

  </script>
</head>

<body style="background-color:black;">
  <div class="col-md-1" style="padding:5px;background-color:rgb(5, 6, 6);height:1000px;width:5px;position: fixed;">
  </div>
  <div class="topnav" id="myTopnav" style="margin-left:10px;z-index:3;" >
    <a href="#home" class="active"
      style="margin-left:2%;margin-top:10px;margin-bottom:10px;padding-left:30px;padding-top:5px;padding-bottom:5px;padding-right:30px;">Hobbies</a>
    <a href="#news" class="active"
      style="margin-left:2%;margin-top:10px;margin-bottom:10px;padding-left:30px;padding-top:5px;padding-bottom:5px;padding-right:30px;">Dream</a>
    <a href="#contact" class="active"
      style="margin-left:2%;margin-top:10px;margin-bottom:10px;padding-left:30px;padding-top:5px;padding-bottom:5px;padding-right:30px;">Daily
      Post</a>
    <a href="#about" class="active"
      style="margin-left:2%;margin-top:10px;margin-bottom:10px;padding-left:30px;padding-top:5px;padding-bottom:5px;padding-right:30px;">Family
      & Friend
      <a href="#profile" style="margin-left:30%;margin-right:2%"><img src="Zahrina Candrakanti_Foto Formal new.jpg"
          class="rounded-circle img-style" width="40px" height="40px">
        <div style="margin-right:1%"></div>
        <h6
          style="font-size:small;text-align:left;margin-top:10px;margin-bottom:10px;float: initial;padding-left:10px;">
          Zahrina Candrakanti,17th<br></h6>
      </a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars" style="padding-left:20px;padding-top:15px;padding-right:20px;padding-bottom:15px;position:relative;"></i>
      </a>
  </div>
  <br>
  <div id="mySidenav" class="sidenav" >
    <a href="#home"id="about">Its me</a>
    <a href="#Activity" id="blog">Activity</a>
    <a href="#kredit" id="Transcript">Credits</a>
    <a href="#projek" id="projects">Projects</a>
    <a href="#kontak" id="contact">Contact</a>
  </div>

  <div style="margin-left:75px;">

    <div id="home" class="container">
      <ul class="nav nav-tabs" role="tablist" style="border-bottom:2px solid white">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#pp"
            style="border-left:2px solid white;border-right:2px solid white;border-top:2px solid white;color:dodgerblue;margin-right:15px;margin-top:10px;"><b>Summary
              of Me !!</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Education"
            style="border-left:2px solid white;border-right:2px solid white;border-top:2px solid white;color:dodgerblue;margin-right:15px;margin-top:10px;"><b>Education</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Experience"
            style="border-left:2px solid white;border-right:2px solid white;border-top:2px solid white;color:dodgerblue;margin-right:15px;margin-top:10px;"><b>Experience</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Skills"
            style="border-left:2px solid white;border-right:2px solid white;border-top:2px solid white;color:dodgerblue;margin-right:15px;margin-top:10px;"><b>Skills</b></a>
        </li>
      </ul>
      <div class="tab-content">
        <br>
        <div id="pp" class="container tab-pane active"
          style="background-image:url(https://www.itl.cat/pngfile/big/14-142373_clouds-wallpaper-hd-blue-sky-with-few-clouds.jpg);border-radius: 15px;border:3px solid white">
          <div style="margin-top:5px;"></div>
          <br>
          <div class="row">
            <div class="col-md-3 ">
              <h4 style="text-align:center;font-family: Verdana;"><span
                  style="background-color:rgb(254, 254, 254,0.3);padding-left:15px;border-radius:10px;padding-right:15px;"><b>Hi,
                    It's me Arin</b></span> </h4>
              <h5 style="text-align:center;"><span style="background-color:rgb(254, 254, 254,0.3);">"Tetaplah berharap
                  dan bertahan untuk rintangan di masa yang akan datang"<br><br>Do More, Better Goals</span> </h5>
              <h1 style="text-align:center">''''''''</h1>
            </div>
            <div class="col-md-3" style="text-align:center">
              <img
                src="https://pps.whatsapp.net/v/t61.24694-24/305467886_4635718433198104_9049432280891040260_n.jpg?ccb=11-4&oh=01_AdQACTuUUrpV6COqQ6Ws-8cqQv5zqcxzNd2RXa28-4uDAQ&oe=63647F99"
                width="250px;" style="border-radius:15px;float:center;border:3px solid coral">
            </div>
            <div class="col-md-6">
              <h4 style="text-align:center;background-color:coral;margin-top:10px;color:white">== About Me ==</h4>

              <h5
                style="font-family:monospace;text-align:justify;background-color:rgb(255, 255, 255,0.5);padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border-radius:30px;">
                <b>Hai All, Nama Saya <span style="color:brown">Zahrina Candrakanti</span> biasa dipanggil Arin lahir
                  tanggal <span style="color:coral">6 Desember 2004</span>, Tepatnya di
                  Kota <span style="color:coral">Sidoarjo</span>. Saya memiliki minat pada bisnis dan administratif.
                  Saya juga mempunyai hobi memasak dan
                  makan. Saat ini saya sedang menambah pengalaman sebagai Pebisnis yang baik dan programmer yang
                  handal.</b>
              </h5>
            </div>
          </div>
          <br>
        </div>
        <div id="Education" class="container tab-pane fade"><br>
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <h3 style="background-color:magenta;border-radius:15px">SD</h3>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-home" aria-hidden="true" style="font-size:20px;color:darkorchid"></i>
                  SDN Wage II
                </p>
                <p style="background-color:rgba(5, 5, 5, 0.5);color:magenta;border-radius:10px;"><i
                    class="fa fa-map-marker" aria-hidden="true" style="font-size:30px;color:#f44336"></i>
                  Jl. Taruna Inpres No.2, Margomulyo, Wage, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257</p>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-calendar" aria-hidden="true" style="font-size:20px;color:darkorchid"></i>
                  [2011-2017]
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Whatsapp"><i
                        class="fa fa-whatsapp"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:5px;"></i>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Gmail"><i
                        class="fa fa-envelope" aria-hidden="true"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <h3 style="background-color:magenta;border-radius:15px">SMP</h3>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-home" aria-hidden="true" style="font-size:20px;color:darkorchid"></i> SMPN 1 SEDATI
                </p>
                <p style="background-color:rgba(5, 5, 5, 0.5);color:magenta;border-radius:10px;"><i
                    class="fa fa-map-marker" aria-hidden="true" style="font-size:30px;color:#f44336"></i> Jl. Brantas
                  No. 1, Jalan Juanda, Jl. Raya Bandara Juanda, Kepuh, Betro, Kec. Sedati, Kabupaten Sidoarjo, Jawa
                  Timur 61253</p>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-calendar" aria-hidden="true" style="font-size:20px;color:darkorchid"></i> [2017-2019]
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Whatsapp"><i
                        class="fa fa-whatsapp"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:5px;"></i>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Gmail"><i
                        class="fa fa-envelope" aria-hidden="true"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <h3 style="background-color:magenta;border-radius:15px">SMA</h3>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-home" aria-hidden="true" style="font-size:20px;color:darkorchid"></i> SMAN 1 TAMAN
                </p>
                <p style="background-color:rgba(5, 5, 5, 0.5);color:magenta;border-radius:10px;"><i
                    class="fa fa-map-marker" aria-hidden="true" style="font-size:30px;color:#f44336"></i> Jl. Raya
                  Sawunggaling No.2, Jemundo, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257</p>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-calendar" aria-hidden="true" style="font-size:20px;color:darkorchid"></i> [2019-2021]
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Whatsapp"><i
                        class="fa fa-whatsapp"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:5px;"></i>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Gmail"><i
                        class="fa fa-envelope" aria-hidden="true"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <h3 style="background-color:magenta;border-radius:15px">KULIAH</h3>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-home" aria-hidden="true" style="font-size:20px;color:darkorchid"></i> Institut
                  Teknologi Sepuluh Nopember Surabaya
                </p>
                <p style="background-color:rgba(5, 5, 5, 0.5);color:magenta;border-radius:10px;"><i
                    class="fa fa-map-marker" aria-hidden="true" style="font-size:30px;color:#f44336"></i> Jl. Teknik
                  Kimia, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</p>
                <p
                  style="background-color:rgb(255, 255, 255,0.7);border-left:4px solid darkorchid;border-right:4px solid darkorchid;">
                  <i class="fa fa-calendar" aria-hidden="true" style="font-size:20px;color:darkorchid"></i>
                  [2021-Present]
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Whatsapp"><i
                        class="fa fa-whatsapp"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:5px;"></i>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="https://www.instagram.com/" target="_blank" title="SDN WAGE II : Gmail"><i
                        class="fa fa-envelope" aria-hidden="true"
                        style="font-size:36px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="Experience" class="container tab-pane fade"
          style="background-image:url(https://img.freepik.com/premium-photo/beautiful-purple-sky-wallpaper-minimalist-dreamer-mood_161568-11375.jpg?w=2000);border-radius:14px;border:4px solid white">
          <br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">Sie Konsumsi Koperasi Sekolah <br>(2017-2018)</h5>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">Sie acara OSIS <br>(2017-2018)</h5>
            </div>
            <div class="col-md-1"></div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">Bendahara Kelas <br>(2017-2021)</h5>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">Anggota PMR <br>(2017-2018)</h5>
            </div>
            <div class="col-md-1"></div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">Panitia Pameran UMKM Sidoarjo <br>(2020)</h5>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">Volunteer Seminar Coding <br>(2020-2021)</h5>
            </div>
            <div class="col-md-1"></div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">Volunteer Seminar Anak Digital <br> (2021)</h5>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4 ex">
              <h5 style="text-align:center;">MC dan Narasumber KOPMA <br>(2021)</h5>
            </div>
            <div class="col-md-1"></div>
          </div>
          <br>
        </div>
        <div id="Skills" class="container tab-pane fade"><br>
          <div class="row">
            <div style="margin-left:50px;"></div>
            <div class="card2 col-md-5">
              <i class='far fa-comments' style='font-size:24px'></i>
              <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <div style="margin-right:50px;"></div>
            <div style="margin-left:50px;"></div>
            <div class="card2 col-md-5">
              <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="Activity" style="margin-left:30px;margin-right:30px;">
      <div style="margin-top:70px;"></div>
      <h3 style="color:white;text-align: center;"><span
          style="background-color:dodgerblue;padding-left:20px;padding-right:20px;border-radius:15px">Activity</span></h3>
      <br>
      <div class="row">
        <div class="col-md-4">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner"style="z-index: 2;">
              <div class="carousel-item active" style="position:relative;">
                <img src="tdc.jpg" alt="Los Angeles" width="315px" height="270px" style="border-radius:10px;border:4px solid white;">
                <div class="carousel-caption text-sm-center" >
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">Kepanitiaan TDC</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="LINE_ALBUM_EXPOW_221027.jpg" alt="Los Angeles" width="315px" height="270px " style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">UKM KOPMA EXPO ITS</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="LINE_ALBUM_Visit Kopma FEB Unair_221027.jpg" alt="Los Angeles" width="315px" height="270px" style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">Visit Unair</h4>
                </div>
              </div>
            </div>
            <ul class="carousel-indicators" style="z-index:2;">
              <li data-target="#demo" data-slide-to="0" class="active" >Kegiatan</li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <a class="carousel-control-prev" href="#demo" data-slide="prev" >
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <br>
            <br>
          </div>
        </div>
        <br>

        <div class="col-md-4">
          <div id="xx" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" >
                <img src="travel.jpg" alt="Los Angeles" width="315px" height="270px"style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4  style="background-color:rgb(0, 0, 0,0.3);">Travel </h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="batik.jpg" alt="Los Angeles" width="315px" height="270px" style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">Batik Day</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="birthday.jpg" alt="Los Angeles" width="315px" height="270px" style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">Friend's Birthday</h4>
                </div>
              </div>
            </div>
            <ul class="carousel-indicators">
              <li data-target="#xx" data-slide-to="0" class="active"></li>
              <li data-target="#xx" data-slide-to="1"></li>
              <li data-target="#xx" data-slide-to="2"></li>
            </ul>
            <a class="carousel-control-prev" href="#xx" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#xx" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <br>
            <br>
          </div>
        </div>
        <br>
        <div class="col-md-4">
          <div id="tiga" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" style="position:relative">
                <img src="fteic.jpg" alt="Los Angeles" width="315px" height="270px" style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">LKMM Pra-TD FTEIC</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="2022-10-27 (9).png" alt="Los Angeles" width="315px" height="270px" style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">BMS Vidyarana</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="pengangkatan.jpg" alt="Los Angeles" width="315px" height="270px"style="border-radius:10px;border:4px solid white">
                <div class="carousel-caption text-sm-center" style="margin-right:15px;">
                  <h4 style="background-color:rgb(0, 0, 0,0.3);">Pengangkatan 2021</h4>
                </div>
              </div>
            </div>
            <ul class="carousel-indicators">
              <li data-target="#tiga" data-slide-to="0" class="active"></li>
              <li data-target="#tiga" data-slide-to="1"></li>
              <li data-target="#tiga" data-slide-to="2"></li>
            </ul>
            <a class="carousel-control-prev" href="#tiga" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#tiga" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <br>
            <br>
          </div>
        </div>
        <br>
      </div>
    </div>
    <div style="margin-top:50px"></div>
    <div id="kredit">
      <h3 style="color:rgb(255, 255, 255);text-align:center;"><span style="background-color:dodgerblue;padding-left:20px;padding-right:20px;border-radius:15px">Transcript</span></h3>
      <p style="color:white;text-align:center;">"Nilai Kuliah Memang Bukan Segalanya, Namun Nilai itulah Gambaran Masa
        Depan"</p>

      <div class="row">
        <div style="margin-left:5%;"></div>
        <div class="col-md-5">
          <table class="table table-success table-bordered">
            <tr>
              <th colspan="5" style="text-align:center;">Semester 1 <span style="color:rgb(255, 0, 255)">[2021]</span>
              </th>
            </tr>
            <tr style="text-align:center">
              <th>Kode MK</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>N. Huruf</th>
              <th>S*N</th>
            </tr>
            <tr style="text-align:center">
              <td>IS4101</td>
              <td>Logika & Struktur Diskrit </td>
              <td>2</td>
              <td>B</td>
              <td>6</td>
            </tr>
            <tr style="text-align:center">
              <td>IS4102</td>
              <td>Konsep SI </td>
              <td>2</td>
              <td>A</td>
              <td>8</td>
            </tr>
            <tr style="text-align:center">
              <td>KM4101</td>
              <td>Matematika 1 </td>
              <td>3</td>
              <td>B</td>
              <td>9</td>
            </tr>
            <tr style="text-align:center">
              <td>SF4101</td>
              <td>Fisika 1 </td>
              <td>4</td>
              <td>AB</td>
              <td>14</td>
            </tr>
            <tr style="text-align:center">
              <td>SK4101</td>
              <td>Kimia 1 </td>
              <td>3</td>
              <td>AB</td>
              <td>10.5</td>
            </tr>
            <tr style="text-align:center">
              <td>UG4911</td>
              <td>Pancasila </td>
              <td>2</td>
              <td>AB</td>
              <td>7</td>
            </tr>
            <tr style="text-align:center">
              <td>UG4912</td>
              <td>Bahasa Indonesia </td>
              <td>2</td>
              <td>A</td>
              <td>8</td>
            </tr>
          </table>
        </div>
        <div style="margin-left:5%;"></div>
        <div class="col-md-5">
          <table class="table table-success table-bordered table-responsive-md">
            <tr>
              <th colspan="5" style="text-align:center;" class="table-warna">Semester 2 <span style="color:rgb(255, 0, 255)">[2021]</span>
              </th>
            </tr>
            <tr style="text-align:center">
              <th>Kode MK</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
              <th>N. Huruf</th>
              <th>S*N</th>
            </tr>
            <tr style="text-align:center">
              <td>IS4203</td>
              <td>Algoritma & Pemrograman </td>
              <td>3</td>
              <td>B</td>
              <td>9</td>
            </tr>
            <tr style="text-align:center">
              <td>IS4204</td>
              <td>Organisasi dan Fungsional Bisnis </td>
              <td>3</td>
              <td>AB</td>
              <td>10.5</td>
            </tr>
            <tr style="text-align:center">
              <td>IS4305</td>
              <td>Statistika </td>
              <td>3</td>
              <td>AB</td>
              <td>10.5</td>
            </tr>
            <tr style="text-align:center">
              <td>KM4201</td>
              <td>Matematika 2 </td>
              <td>3</td>
              <td>BC</td>
              <td>7.5</td>
            </tr>
            <tr style="text-align:center">
              <td>SF4202</td>
              <td>Fisika 2</td>
              <td>3</td>
              <td>BC</td>
              <td>7.5</td>
            </tr>
            <tr style="text-align:center">
              <td>UG4901</td>
              <td>Agama Islam </td>
              <td>2</td>
              <td>A</td>
              <td>8</td>
            </tr>
            <tr style="text-align:center">
              <td>UG4913</td>
              <td>Kewarganegaraan </td>
              <td>2</td>
              <td>A</td>
              <td>8</td>
            </tr>
            <tr style="text-align:center">
              <td>UG4914</td>
              <td>Bahasa Inggris </td>
              <td>2</td>
              <td>B</td>
              <td>6</td>
            </tr>
          </table>
        </div>
        <div style="margin-right:5%"></div>
      </div>
    </div>
    <hr style="background-color:magenta;margin-left:15px;margin-right:15px;">
    <div style="margin-top:60px"></div>
    <div id="projek" style="margin-left:15px;">
      <h3 style="color:rgb(255, 255, 255);text-align:center;"><span style="background-color:dodgerblue;padding-left:20px;padding-right:20px;border-radius:15px">Projects</span></h3>
      <p style="color:white;text-align:center;">"Ketuk setiap Gambar dan Span biru untuk melihat rekap pertemuan satu hingga tujuh"</p>
      <br>
      <div class="row">
        <div class="col-md-4" style="text-align:center;border-radius:14px;">
          <br>
          <a href="PEMROGRAMAN WEB.pptx" target="_blank"><img src="2022-10-27 (3).png" width="300px;" height="200px;"
              style="border-radius:10px;border:3px solid white"></a>
          <h4 style="color:white">MEET 1</h4>
          <p style="color:white">Pertemuan Pertama Kelas PWEB B dilakukan sesi kontrak kuliah dan penugasan Mengambil 10
            Syntax dri salah satu website</p>
          <br>
        </div>
        <br>
        <div class="col-md-4" style="text-align:center;border-radius:14px;">
          <br>
          <a href="5026211100_Zahrina Candrakanti-4.pdf" target="_blank"><img src="2022-10-27 (1).png" width="300px;"
              height="200px;" style="border-radius:10px;border:3px solid white"></a>
          <h4 style="color:white">MEET 2</h4>
          <p style="color:white">Pertemuan Kedua Kelas PWEB B dilakukan sesi Pengumpulan tugas Syntax dan penginstallan
            VSC dan Extention <span style="background-color:aqua;"><a href="templateutama.html"
                target="_blank">(template utama)</a></span>sertamembuat <span style="background-color:aqua;"><a
                href="sapuangin.html" target="_blank"> berita ITS</a></span></p>
          <br>
        </div>

        <div class="col-md-4" style="text-align:center;border-radius:14px;">
          <br>
          <a href="landing-page.html" target="_blank"><img src="2022-10-27 (4).png" width="300px;" height="200px;"
              style="border-radius:10px;border:3px solid white"></a>
          <h4 style="color:white">MEET 3</h4>
          <p style="color:white">Pertemuan Ketiga Kelas PWEB B dilakukan sesi review Video pengenalan Bootstrap, dengan
            membuat Contoh Landing-Page</p>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" style="text-align:center;border-radius:14px;">
          <br>
          <a href="Soal.html" target="_blank"><img src="2022-10-27 (5).png" width="300px;" height="200px;"
              style="border-radius:10px;border:3px solid white"></a>
          <h4 style="color:white">MEET 4</h4>
          <p style="color:white">Pertemuan Keempat Kelas PWEB B dilakukan sesi Pengumpulan tugas Syntax dengan Layout
            Bootstrap
            yang telah ditentukan baik nrp genap-ganjil dan gender</p>
          <br>
        </div>
        <div class="col-md-4" style="text-align:center">
          <br>
          <a href="konversisourcecode2.html" target="_blank"><img src="2022-10-27 (6).png" width="300px;"
              height="200px;" style="border-radius:10px;border:3px solid rgb(205, 195, 195)"></a>
          <h4 style="color:white">MEET 5</h4>
          <p style="color:white">Pertemuan Kelima Kelas PWEB B dilakukan sesi Pengumpulan Tugas Konversi Javascript ke
            bentuk Bootstrap untuk dijalankan sesuai fungsinya </p>
          <br>
        </div>
        <div class="col-md-4" style="text-align:center">
          <br>
          <a href="Pendaftaran.html" target="_blank"><img src="2022-10-27 (7).png" width="300px;" height="200px;"
              style="border-radius:10px;border:3px solid white"></a>
          <h4 style="color:white">MEET 6</h4>
          <p style="color:white">Pertemuan Keenam Kelas PWEB B dilakukan Pengumpulan Tugas Website Pendaftaran setelah
            sesi Penjelasan Fungsi Show hide dengan berbagai input dan form action
          </p>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="text-align:center">
          <br>
          <a href="Tugas4.html" target="_blank"><img src="2022-10-27 (8).png" width="300px;" height="200px;"
              style="border-radius:10px;border:3px solid white"></a>
          <h4 style="color:white">MEET 7</h4>
          <p style="color:white">Pertemuan Ketujuh Kelas PWEB B dilakukan sesi Pengumpulan tugas Membuat Fungsi Show
            hide dari NRP/NID dan Menjelaskannya melalui video seperti berikut <span style="background-color:aqua;"><a
                href="https://drive.google.com/file/d/1EcvR1xjrefseEXzPC9T-LEGzDop3-3BY/view?usp=sharing"
                target="_blank"> [Video Tutorial]</a></span></p>
          <br>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
    <div style="margin-top:60px"></div>
    <div id="kontak" style="margin-left:15px;">
      <h3 style="text-align:center;color:#f2f2f2;"><span
          style="background-color:blueviolet;padding:10px 20px 10px 20px;border-radius:15px;border:2px solid white">Contact</span>
      </h3>
      <div style="margin-bottom:25px;"></div>
      <p style="text-align:center;color:white;">
        <span
          style="background-color:rgba(201, 5, 255, 0.7);padding-left:15px;border-radius:10px;padding-right:15px;padding-top:5px;padding-bottom:5px;">Hubungi
          Saya Untuk Informasi Lebih lanjut melalui Kontak di Bawah ini</span>
      </p>
      <br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"
          style="text-align:center;background-color:#f2f2f2;margin-right:10px;border:5px solid blueviolet;border-radius:10px;">
          <br>
          <a href="https://wa.me/628813567033" target="_blank" title="Whatsapp"><i class="fa fa-whatsapp"
              style="font-size:150px;color:chartreuse;background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:50px;margin-right:15px;"></i></a>
          <a href="https://www.instagram.com/k_l_e_p_o_n105" target="_blank" title="Instagram"><i
              class="fa fa-instagram"
              style="font-size:150px;color:rgb(161, 5, 252);background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:50px;margin-right:15px;"></i></a>
          <a href="www.linkedin.com/in/zahrina-candrakanti" target="_blank" title="Linkedin"><i class="fa fa-linkedin"
              style="font-size:150px;color:rgb(89, 130, 234);background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:50px;margin-right:15px;"></i></a>
          <a href="mailto:zahrinacandrakanti@gmail.com" target="_blank" title="Gmail"><i class="fa fa-envelope-o"
              style="font-size:150px;color:rgb(255, 98, 0);background-color:#555;padding:5px 10px 5px 10px;border-radius: 10px;margin-bottom:50px;"></i></a>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
    <br>
    <br>
  </div>
  <footer>
    <h3
      style="color:white;text-align:center;background-image:url(https://img.freepik.com/premium-vector/realistic-style-colorful-clouds-background_23-2148964527.jpg?w=1500);padding-top:15px;padding-bottom:15px;border-top:5px solid white">
      Goodbye, See you in Next Project</h3>
  </footer>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\coba2\resources\views/ets.blade.php ENDPATH**/ ?>