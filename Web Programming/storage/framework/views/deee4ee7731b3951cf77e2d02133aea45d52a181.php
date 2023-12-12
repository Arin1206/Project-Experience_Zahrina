<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <title>Advertisement Pricing</title>
    <style>


        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

        .range-slider-container {
            position: relative;
            width: 100%;
            margin: 0 auto;

        }

        .range-slider {
            -webkit-appearance: none;
            width: 100%;
            height: 10px;
            background: #000000;
            outline: none;
            -webkit-transition: .2s;
            transition: opacity .2s;

        }

        .range-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #D9D9D9;
            cursor: pointer;
            position: relative;
            border-radius: 50%;
        }

        .value-box {
            position: absolute;
            bottom: -55px;
            left: calc((100% / (var(--max) - var(--min))) * (var(--value) - var(--min)) - 12.5px);
            font-size: 20px;
            background-color: #000;
            color: white;
            padding: 5px 10px;
        }

        .advertise-card {
            background-color: #FDF9DE;
            color: #000000;
            padding: 10px;
            margin-top: 100px;
            text-align: center;
            border-radius: 15px;
            width: 75%;
            margin-left: auto;
            margin-right: auto;
            font-size: 22px;

        }

        .heading {
            text-align: left;

        }

        .tab-menu {

            margin-top: 20px;
        }

        .tab-menu button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;

            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        .tab-menu button:focus {
            outline: none;
        }



        .radio-input label {
            font-size: 16px;
            margin-right: 10px;
        }

        .total-price {
            text-align: Left;
            margin-top: 0px;
            font-size: 35px;
            font-weight: bold;
        }

        .radio1 input[type="radio"]:checked {
            background: #FCBC49;

        }

        .judultab {
            font-family: 'inter', sans-serif;
            margin-left: 80px;
            font-size: 20px;
            margin-top: 20px;
        }

        .nav-pills2 .nav-link {
            font-size: 18px;
            padding: 5px 25px;
            border-radius: 25px;
            font-family: 'inter', sans-serif;
            margin: 5px 5px;
            color: black;
        }

        .nav-pills2 .nav-link.active {
            background: #1F5C70 !important;
            font-size: 18px;
            padding: 5px 25px;
            border-radius: 25px;
            font-family: 'inter', sans-serif;
            margin: 5px 5px;
            color:white;
        }

        .judultab2 {
            margin-left: 75px;
            margin-top: 10px;
        }

        .judultab3 {
            font-size: 18px;
            font-family: 'inter', sans-serif;
            margin-top: 20px;
        }

        .bg-oren {
            background: #FCBC49;
            margin-top: -85px;
            margin-left: 70px;
            margin-right: 20px;
            padding: 20px;
            border-radius: 25px;
        }

        .btn{
            font-family: 'inter', sans-serif;
            font-size: 18px;
            background-color: #1F5C70 !important;
            color: white;
            padding-left: 26px;
            padding-right: 26px;
            border-radius: 25px;
        }

        .btn:hover {
            font-family: 'inter', sans-serif;
            font-size: 18px;
            background-color: #1e4b5b !important;
            color: white;
            padding-left: 26px;
            padding-right: 26px;
            border-radius: 25px;
        }

        .form-check-input[type="radio"] {
            border-radius: 50%;
            background: #C19A6B;
            border: 2px solid black;
            width: 18px;
            height: 18px;
            margin-right: 10px;

        }

        .form-check-input[type="radio"]:checked {
            background-color: #000;
            border-color: #FCBC49;

            outline: 2px solid black;


        }

        @media (max-width: 768px) {
            .judultab {
                font-family: 'inter', sans-serif;
                margin-left: 18px;
                margin-top: 20px;
            }

            .bg-oren {
                background: #FCBC49;
                margin-top: 40px;
                margin-left: 10px;
                width: 95%;
                padding: 20px;
                border-radius: 25px;
            }

            .judultab3 {
                font-size: 18px;
                font-family: 'inter', sans-serif;
                weight: 500px;
                margin: 10px;
            }

            .judultab2 {
                margin-left: 15px;
            }

            .nav-pills2 .nav-link {
                font-size: 15px;
                padding: 5px 25px;
                border-radius: 25px;
                font-family: 'inter', sans-serif;
                margin: 5px 0px;
                color: black;
            }

            .nav-pills2 .nav-link.active {
                background: #1F5C70 !important;
                font-size: 15px;
                padding: 5px 25px;
                border-radius: 25px;
                font-family: 'inter', sans-serif;
                margin: 5px 0px;
                color:white;
            }

            .range-slider-container {
                position: relative;
                width: 100%;
                margin-left: 10px;
            }

            .value-box {
                position: absolute;
                bottom: -45px;
                left: calc((100% / (var(--max) - var(--min))) * (var(--value) - var(--min)) - 12.5px);
                font-size: 16px;
                background-color: #000;
                color: white !important;
                padding: 5px 10px;
            }

            .advertise-card {
                background-color: #FDF9DE;
                color: #000000;
                padding: 10px;
                margin-top: 80px;
                text-align: center;
                border-radius: 15px;
                width: 80%;
                margin-left: auto;
                margin-right: auto;

            }

            .judul {
                font-size: 16px;
            }

            .form-check-input[type="radio"] {
                border-radius: 50%;
                background: #C19A6B;
                border: 2px solid black;
                width: 18px;
                height: 18px;
                margin-right: 10px;

            }



            .form-check-input [type="radio"]:checked {
                background-color: #000;
                border-color: #FCBC49;

                outline: 2px solid black;


            }

        }
    </style>
</head>

<body>
    <h2 class="judultab">Lama Beriklan : </h2>

    <ul class="nav nav-pills2 judultab2" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#7hari" onclick="selectTab(7)">7 Hari</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#14hari" onclick="selectTab(14)">14 Hari</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#30hari" onclick="selectTab(30)">30 Hari</a>
        </li>
    </ul>

    <!-- Tab panes -->

    <div class="tab-content">
        <div id="7hari" class="container tab-pane active">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h4 class="judultab3">Budget Harian:</h4>

                    <!-- Baris 2: Slider -->
                    <div class="range-slider-container">
                        <input type="range" min="30000" max="200000" step="10000" value="30000"
                            class="range-slider" id="myRange4">
                        <div class="value-box" id="value4">Rp.30.000</div>
                    </div>
                    <div class="advertise-card">
                        <h5 id="advertise-text4" class="judul">Anda akan beriklan selama <strong>7 HARI</strong> dengan
                            <br> budget
                            harian sebesar <strong>Rp30.000</strong>
                        </h5>
                    </div>
                </div>
                <div class="col-md-5 bg-oren">
                    <div class="form-check">
                        <label class="label">
                            <input type="radio" name="ad-type" value="ads-only4" id="ads-only4" onclick="updatePrice4()"
                                class="form-check-input">
                            <h5><strong>Ads
                                    Only</strong></h5>
                            Setiap langkah iklan Anda adalah langkah menuju kesuksesan yang lebih besar.
                        </label>
                    </div>

                    <br>
                    <div class="form-check">
                        <label>
                            <input type="radio" name="ad-type" value="ads-and-content4" id="ads-and-content4"
                                onclick="updatePrice4()" class="form-check-input">
                            <h5><strong> Ads + Konten </strong></h5>Kami menyatukan iklan yang
                            memukau dengan konten yang menggugah minat.
                        </label>
                    </div>
                    <br>
                    <!-- Baris 5: Harga Total -->
                    <h6><b>Estimasi Total Biaya Iklan : <b></h6>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="total-price">
                                <span id="total-price4">Rp.30,000</span>*
                            </div>
                            <h6>*) Harga sudah termasuk jasa iklan</h6>
                        </div>
                        <div class="col-md-5">
                            <button type="button" class="btn">Iklankan Sekarang</button>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
    <div class="tab-content">
        <div id="14hari" class="container tab-pane">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h4 class="judultab3">Budget Harian:</h4>

                    <!-- Baris 2: Slider -->
                    <div class="range-slider-container">
                        <input type="range" min="30000" max="200000" step="10000" value="30000"
                            class="range-slider" id="myRange5">
                        <div class="value-box" id="value5"> Rp.30.000</div>
                    </div>
                    <div class="advertise-card">
                        <h5 id="advertise-text5" class="judul">Anda akan beriklan selama <strong>14 HARI</strong> dengan
                            <br> budget
                            harian sebesar <strong>Rp30.000</strong>
                        </h5>
                    </div>
                </div>
                <div class="col-md-5 bg-oren">
                    <div class="form-check">
                        <label class="label">
                            <input type="radio" name="ad-type" value="ads-only5" id="ads-only5" onclick="updatePrice5()"
                                class="form-check-input">
                            <h5><strong>Ads
                                    Only</strong></h5>
                            <h6 style="font-weight:300px!important">Setiap langkah iklan Anda adalah langkah menuju kesuksesan yang lebih besar.</h6>
                        </label>
                    </div>

                    <br>
                    <div class="form-check">
                        <label>
                            <input type="radio" name="ad-type" value="ads-and-content5" id="ads-and-content5"
                                onclick="updatePrice5()" class="form-check-input">
                            <h5><strong> Ads + Konten </strong></h5> <h6 style="font-weight:300px!important">Kami menyatukan iklan yang
                            memukau dengan konten yang menggugah minat.</h6>
                        </label>
                    </div>
                    <br>
                    <!-- Baris 5: Harga Total -->
                    <h6><b>Estimasi Total Biaya Iklan : <b></h6>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="total-price">
                                <span id="total-price5">Rp.30,000</span>*
                            </div>
                            <h6>*) Harga sudah termasuk jasa iklan</h6>
                        </div>
                        <div class="col-md-5">
                            <button type="button" class="btn">Iklankan Sekarang</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div id="30hari" class="container tab-pane">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h4 class="judultab3">Budget Harian:</h4>

                    <!-- Baris 2: Slider -->
                    <div class="range-slider-container">
                        <input type="range" min="30000" max="200000" step="10000" value="30000"
                            class="range-slider" id="myRange6">
                        <div class="value-box" id="value6"> Rp.30.000</div>
                    </div>
                    <div class="advertise-card">
                        <h5 id="advertise-text6" class="judul">Anda akan beriklan selama <strong>30 HARI</strong> dengan
                            <br> budget
                            harian sebesar <strong>Rp30.000</strong>
                        </h5>
                    </div>
                </div>
                <div class="col-md-5 bg-oren">
                    <div class="form-check">
                        <label class="label">
                            <input type="radio" name="ad-type" value="ads-only6" id="ads-only6" onclick="updatePrice6()"
                                class="form-check-input">
                            <h5><strong>Ads
                                    Only</strong></h5>
                            <h6 style="font-weight:300px!important">Setiap langkah iklan Anda adalah langkah menuju kesuksesan yang lebih besar.</h6>
                        </label>
                    </div>

                    <br>
                    <div class="form-check">
                        <label>
                            <input type="radio" name="ad-type" value="ads-and-content6" id="ads-and-content6"
                                onclick="updatePrice6()" class="form-check-input">
                            <h5><strong> Ads + Konten </strong></h5> <h6 style="font-weight:300px!important">Kami menyatukan iklan yang
                            memukau dengan konten yang menggugah minat.</h6>
                        </label>
                    </div>
                    <br>
                    <!-- Baris 5: Harga Total -->
                    <h6><b>Estimasi Total Biaya Iklan : <b></h6>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="total-price">
                                <span id="total-price6">Rp.30,000</span>*
                            </div>
                            <h6>*) Harga sudah termasuk jasa iklan</h6>
                        </div>
                        <div class="col-md-5">
                            <button type="button" class="btn">Iklankan Sekarang</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Baris 1: Heading -->








    <script>
      var slider4 = document.getElementById("myRange4");
      var output4 = document.getElementById("value4");
      var advertiseText4 = document.getElementById("advertise-text4");
      var radioAdsOnly4 = document.getElementById("ads-only4");
      var radioAdsAndContent4 = document.getElementById("ads-and-content4");
      var totalPrice4 = document.getElementById("total-price4");

      slider4.style.setProperty('--min', slider4.min);
      slider4.style.setProperty('--max', slider4.max);
      slider4.style.setProperty('--value', slider4.value);

      slider4.oninput = function() {
          slider4.style.setProperty('--value', this.value);
          updateValuePosition4();
          updateAdvertiseText4();
          updatePrice4();
          updateSliderStep4();
      };

      function updateValuePosition4() {
          var thumbWidth4 = slider4.clientWidth * ((slider4.value - slider4.min) / (slider4.max - slider4.min));
          var offset4 = thumbWidth4 - (output4.clientWidth / 2);
          output4.style.left = offset4 + "px";
          output4.textContent = "Rp." + numberWithCommas(slider4.value);
      }

      function updateAdvertiseText4() {
          var budget4 = "Rp." + numberWithCommas(slider4.value);
          advertiseText4.innerHTML = "Anda akan beriklan selama <strong>" + selectedTab4 + " HARI</strong> <br> dengan budget harian sebesar <strong>" + budget4 + "</strong>";
      }

      var selectedTab4 = 7; // Default selected tab is 7 Hari

      function selectTab(days) {
          selectedTab4 = days;
          slider4.value = 30000; // Reset slider value to minimum
          slider4.style.setProperty('--value', slider4.value);
          updateValuePosition4();
          updateAdvertiseText4();
          updatePrice4();
          // Menghapus kelas 'active' dari semua tombol tab
          var tabButtons = document.querySelectorAll(".tab-menu button");
        tabButtons.forEach(function(button) {
            button.classList.remove("active");
        });

        // Menambahkan kelas 'active' ke tombol tab yang dipilih
        event.target.classList.add("active");

      }

      var additionalPriceByDaysAdsOnly4 = {
          7: 250000,
          14: 300000,
          30: 450000
      };

      var additionalPriceByDaysAdsAndContent4 = {
          7: 300000,
          14: 400000,
          30: 450000
      };

      function updatePrice4() {
          var basePrice4 = parseInt(slider4.value);
          var selectedDays4 = selectedTab4;
          var additionalPrice4 = 0;

          if (radioAdsOnly4.checked) {
              additionalPrice4 = additionalPriceByDaysAdsOnly4[selectedDays4];
          } else if (radioAdsAndContent4.checked) {
              additionalPrice4 = additionalPriceByDaysAdsAndContent4[selectedDays4];
          }

          var totalPriceValue4 = (selectedDays4 * basePrice4) + additionalPrice4;

          totalPrice4.textContent = "Rp." + numberWithCommas(totalPriceValue4);
      }

      function numberWithCommas(x) {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      }

      function updateSliderStep4() {
          slider4.step = "10000"; // Tetapkan langkah slider ke 10.000
      }
  </script>
   <script>
    var slider5 = document.getElementById("myRange5");
    var output5 = document.getElementById("value5");
    var advertiseText5 = document.getElementById("advertise-text5");
    var radioAdsOnly5 = document.getElementById("ads-only5");
    var radioAdsAndContent5 = document.getElementById("ads-and-content5");
    var totalPrice5 = document.getElementById("total-price5");

    slider5.style.setProperty('--min', slider5.min);
    slider5.style.setProperty('--max', slider5.max);
    slider5.style.setProperty('--value', slider5.value);

    slider5.oninput = function() {
        slider5.style.setProperty('--value', this.value);
        updateValuePosition5();
        updateAdvertiseText5();
        updatePrice5();
        updateSliderStep5();
    };

    function updateValuePosition5() {
        var thumbWidth5 = slider5.clientWidth * ((slider5.value - slider5.min) / (slider5.max - slider5.min));
        var offset5 = thumbWidth5 - (output5.clientWidth / 2);
        output5.style.left = offset5 + "px";
        output5.textContent = "Rp." + numberWithCommas(slider5.value);
    }

    function updateAdvertiseText5() {
        var budget5 = "Rp." + numberWithCommas(slider5.value);
        advertiseText5.innerHTML = "Anda akan beriklan selama <strong>" + selectedTab5 + " HARI</strong> <br> dengan budget harian sebesar <strong>" + budget5 + "</strong>";
    }

    var selectedTab5 = 14; // Default selected tab is 7 Hari

    function selectTab(days) {
        selectedTab5 = days;
        slider5.value = 30000; // Reset slider value to minimum
        slider5.style.setProperty('--value', slider5.value);
        updateValuePosition5();
        updateAdvertiseText5();
        updatePrice5();

          // Menghapus kelas 'active' dari semua tombol tab
          var tabButtons = document.querySelectorAll(".tab-menu button");
        tabButtons.forEach(function(button) {
            button.classList.remove("active");
        });

        // Menambahkan kelas 'active' ke tombol tab yang dipilih
        event.target.classList.add("active");
    }

    var additionalPriceByDaysAdsOnly5 = {
        7: 250000,
        14: 300000,
        30: 450000
    };

    var additionalPriceByDaysAdsAndContent5 = {
        7: 300000,
        14: 400000,
        30: 450000
    };

    function updatePrice5() {
        var basePrice5 = parseInt(slider5.value);
        var selectedDays5 = selectedTab5;
        var additionalPrice5 = 0;

        if (radioAdsOnly5.checked) {
            additionalPrice5 = additionalPriceByDaysAdsOnly5[selectedDays5];
        } else if (radioAdsAndContent5.checked) {
            additionalPrice5 = additionalPriceByDaysAdsAndContent5[selectedDays5];
        }

        var totalPriceValue5 = (selectedDays5 * basePrice5) + additionalPrice5;

        totalPrice5.textContent = "Rp." + numberWithCommas(totalPriceValue5);
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function updateSliderStep5() {
        slider5.step = "10000"; // Tetapkan langkah slider ke 10.000
    }
</script>
<script>
    var slider6 = document.getElementById("myRange6");
    var output6 = document.getElementById("value6");
    var advertiseText6 = document.getElementById("advertise-text6");
    var radioAdsOnly6 = document.getElementById("ads-only6");
    var radioAdsAndContent6 = document.getElementById("ads-and-content6");
    var totalPrice6 = document.getElementById("total-price6");

    slider6.style.setProperty('--min', slider6.min);
    slider6.style.setProperty('--max', slider6.max);
    slider6.style.setProperty('--value', slider6.value);

    slider6.oninput = function() {
        slider6.style.setProperty('--value', this.value);
        updateValuePosition6();
        updateAdvertiseText6();
        updatePrice6();
        updateSliderStep6();
    };

    function updateValuePosition6() {
        var thumbWidth6 = slider6.clientWidth * ((slider6.value - slider6.min) / (slider6.max - slider6.min));
        var offset6 = thumbWidth6 - (output6.clientWidth / 2);
        output6.style.left = offset6 + "px";
        output6.textContent = "Rp." + numberWithCommas(slider6.value);
    }

    function updateAdvertiseText6() {
        var budget6 = "Rp." + numberWithCommas(slider6.value);
        advertiseText6.innerHTML = "Anda akan beriklan selama <strong>" + selectedTab6 + " HARI</strong> <br> dengan budget harian sebesar <strong>" + budget6 + "</strong>";
    }

    var selectedTab6 = 30; // Default selected tab is 7 Hari



    function selectTab(days) {
        selectedTab6 = days;
        slider6.value = 30000; // Reset slider value to minimum
        slider6.style.setProperty('--value', slider6.value);
        updateValuePosition6();
        updateAdvertiseText6();
        updatePrice6();

        // Menghapus kelas 'active' dari semua tombol tab
        var tabButtons = document.querySelectorAll(".tab-menu button");
        tabButtons.forEach(function(button) {
            button.classList.remove("active");
        });

        // Menambahkan kelas 'active' ke tombol tab yang dipilih
        event.target.classList.add("active");
    }

    var additionalPriceByDaysAdsOnly6 = {
        7: 250000,
        14: 300000,
        30: 450000
    };

    var additionalPriceByDaysAdsAndContent6 = {
        7: 300000,
        14: 400000,
        30: 450000
    };

    function updatePrice6() {
        var basePrice6 = parseInt(slider6.value);
        var selectedDays6 = selectedTab6;
        var additionalPrice6 = 0;

        if (radioAdsOnly6.checked) {
            additionalPrice6 = additionalPriceByDaysAdsOnly6[selectedDays6];
        } else if (radioAdsAndContent6.checked) {
            additionalPrice6 = additionalPriceByDaysAdsAndContent6[selectedDays6];
        }

        var totalPriceValue6 = (selectedDays6 * basePrice6) + additionalPrice6;

        totalPrice6.textContent = "Rp." + numberWithCommas(totalPriceValue6);
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function updateSliderStep6() {
        slider6.step = "10000"; // Tetapkan langkah slider ke 10.000
    }
</script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\coba2\resources\views/ads.blade.php ENDPATH**/ ?>