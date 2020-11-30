<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kisah di Balik Terali Besi</title>
    <link rel="shortcut icon" href="https://interaktif.tempo.co/frontend/interaktif/favicon.ico" type="image/x-icon" >
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="stylesheet" href="assets/css/list.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,800&display=swap" rel="stylesheet">
    <link rel="original-source" href="https://interaktif.tempo.co/kisah-di-balik-terali-besi/index.html" />
    <link rel="canonical" href="https://interaktif.tempo.co/kisah-di-balik-terali-besi/index.html" />
    <link rel="publisher" href="https://plus.google.com/109335234362909335582"/>
    <meta property="fb:app_id" content="737824856376068" />
    <meta property="fb:pages" content="160355148441">
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Kisah di Balik Terali Besi" />
    <meta property="og:description" content="Selama setahun lebih, Tempo.co menelusuri data korban-korban penganiayaan di ruang-ruang tahanan kantor polisi di seluruh Indonesia. " />
    <meta property="og:url" content="https://interaktif.tempo.co/kisah-di-balik-terali-besi/index.html" />
    <meta property="og:site_name" content="TEMPO.CO" />
    <meta property="article:publisher" content="https://www.facebook.com/TempoMedia" />
    <meta property="article:author" content="https://www.facebook.com/TempoMedia" />
    <meta property="article:published_time" content="2017-02-01T18:00:00+07:00" />
    <meta property="og:image" content="https://interaktif.tempo.co/kisah-di-balik-terali-besi/assets/images/header.jpg" />
    <meta property="og:image:width" content="1490" />
    <meta property="og:image:height" content="820" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Kisah di Balik Terali Besi" />
    <meta name="twitter:description" content="Selama setahun lebih, Tempo.co menelusuri data korban-korban penganiayaan di ruang-ruang tahanan kantor polisi di seluruh Indonesia. " />
    <meta name="twitter:site" content="@tempodotco">
    <meta name="twitter:image" content="https://interaktif.tempo.co/kisah-di-balik-terali-besi/assets/images/header.jpg" />
    <meta name="twitter:creator" content="@tempodotco" />
    <meta property="DC.date.issued" content="2019-09-28T18:00:00+07:00" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ginanjarpamungkas.github.io/font-awesome/font-awesome.css">
<script>

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-23817453-1', 'auto', {'allowAnchor': true});
ga('set', {
    page: '/'
});

ga('send', 'pageview', {
    hitType: 'pageview',
    page: location.pathname + location.search + location.hash
});

</script>
</head>
<body>
    <img src="assets/images/swipe.png" class="vert-move hide-desktop">
    <div class="sidebar">
        <h3>Yang Tersiksa</h3>
        <p>Ratusan orang menjadi korban dugaan kekerasan atau penyiksaan oleh polisi sejak penangkapan sampai penahanan. Tempo pun telah meminta Mabes Polri untuk memverifikasi data ini. Namun, hingga tulisan ini terbit, polisi belum menyerahkan hasil verifikasi.</p>

        <p>Kepala Biro Penerangan Masyarakat Divisi Humas Markas Besar Polri Brigadir Jenderal Dedi Prasetyo mengakui memang ada anggota polisi yang masih menyiksa tahanan. “Kami pasti menghukum mereka yang terbukti menyiksa tahanan,” kata Dedi. </p>

        <center>
        <div class="search-container">
            <button class="btn-search"><i class="fa fa-search"></i></button>
            <input type="text" name="search" id="search" class="input-search">
        </div>
        <div class="option">
            <span id="map" class="off">MAP</span>
        </div>
        <br>
        <br>
        <a href="index.html">Kembali ke artikel awal</a>
        </center>
        <img src="assets/images/logo.png" class="logo">
    </div>
    <div class="content">
        <div class="list">
            <!-- tempat data -->
        </div>
        <div class="map" style="display:none">
            <div class="head-map">
                <div class="child-map">
                    <h3>Peta Korban</h3>
                    <p>Dugaan penyiksaan terhadap tahanan oleh polisi terjadi hampir di semua tingkatan mulai dari kepolisian sektor sampai kepolisian daerah.</p>
                </div>
            </div>
            <div id="map-container" style="overflow-x: scroll;"></div>
            <div class="desc">
                <h5 style="margin:5px">Provinsi</h6>
                <h3 style="margin:5px" id="provinsi"></h3>
                <h5 style="margin:1px" id="korban"></h6>
                <p style="margin:0px" class="hide-mobile">Klik untuk detail korban.</p>
            </div>
            <div class="list-pulau">
                <!-- data berdasarkan pulau disini -->
            </div>
        </div>
    </div>
<div id="myModal" class="modal">
  <div class="modal-content">
      <div class="modal-header">
        <h2 style="width:60%" id="name">Nama Korban</h2><h2 class="hide-mobile" style="width:38%" id="date">Tanggal</h2>
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <h3 class="hide-desktop" id="date">Tanggal</h3><br>
        <label>LOKASI :</label>
        <p id="LOKASI">LOKASI</p><br>
        <label>PROVINSI :</label>
        <p id="PROVINSI">PROVINSI</p><br>
        <label>JENIS :</label>
        <p id="JENIS">JENIS</p><br>
        <label>PERISTIWA :</label>
        <p id="PERISTIWA">PERISTIWA</p><br>
        <label>INSTITUSI :</label>
        <p id="INSTITUSI">INSTITUSI</p><br>
        <label>PELAKU :</label>
        <p id="PELAKU">PELAKU</p><br>
        <label>TINDAKAN :</label>
        <p id="TINDAKAN">TINDAKAN</p><br>
        <label>ALASAN TINDAKAN :</label>
        <p id="ALASAN-TINDAKAN">ALASAN TINDAKAN</p><br>
        <label>KORBAN :</label>
        <p id="KORBAN">KORBAN</p><br>
        <label>GOLONGAN :</label>
        <p id="GOLONGAN">GOLONGAN</p><br>
        <label>ISU :</label>
        <p id="ISU">ISU</p><br>
        <label>DAMPAK :</label>
        <p id="DAMPAK">DAMPAK</p><br>
        <label>LUKA :</label>
        <p id="LUKA">LUKA</p><br>
        <label>TEWAS :</label>
        <p id="TEWAS">TEWAS</p><br>
        <label>DITANGKAP :</label>
        <p id="DITANGKAP">DITANGKAP</p><br>
        <label>LAINNYA :</label>
        <p id="LAINNYA">LAINNYA</p><br>
        <label>L :</label>
        <p id="L">L</p><br>
        <label>P :</label>
        <p id="P">P</p><br>
      </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
<script src="//unpkg.com/d3-hexgrid"></script>
<script src="//unpkg.com/d3"></script>
<script src="assets/js/map.js"></script>
<script>
var kasus = [];

$(document).ready(function() {
  var url = new URL(document.URL);
  var urlP = url.searchParams;

  const xxx = $.getJSON("data.json",function(data){
      kasus = data.Sheet1;
  });
  Promise.all([xxx]).then(res => {
    if (urlP.has('search')) {
      search = urlP.get('search')
      console.log(kasus)
    }else{
        var tombol = '';
        $.each(kasus,function(kety, value){
            tombol += '<div class="column" onclick="klik('+value.ID+')"><div class="card"><span>'+value.TANGGAL+'</span><br><br><b>'+value.LOKASI+'</b><br><br><b>'+value.GOLONGAN+'</b><p>'+value.ISU+'</p></div></div>';
        });
        $('.list').html(tombol);
    }
  })

  $('.column').click(function() {
      $('#myModal').slideDown(500);
  })

  $('.close').click(function() {
      $('#myModal').slideUp(500);
  })

  $(window).click(function(e) {
      if ($(e.target).is('#myModal')) {
          $('#myModal').slideUp(500);
      }
  })

  $('#list').click(function() {
      $('.map').hide();
      $('.filter-btn').show();
      $('.vert-move').show();
      $('.list').show(700);
      $(this).attr('class','on')
      $('#map').attr('class','off')
  })

  $('#map').click(function() {
      $('.list').hide();
      $('.filter-btn').hide();
      $('.vert-move').hide();
      $('.map').slideDown(500);
      $(this).attr('class','on')
      $('#list').attr('class','off')
  })
})
</script>
<script>
    $description = $(".desc");
    $provinsi = $("#provinsi");
    $data = $("#korban");

    $('.enabled').hover(function() {

    $(this).attr("class", "enabled heyo");
    $description.addClass('active');
    $provinsi.html($(this).data('title'));
    $data.html("Korban: "+$(this).attr('data')+"");
    }, function() {
    $description.removeClass('active');
    });
</script>
<script type="text/javascript">
var kasusFiltered;

function klikPulau(ini){
  var kasusFilteredProvinsi = [];
  kasusFilteredProvinsi =  kasus.filter(function(data) {
    return data.PROVINSI == ini;
  });
  console.log(kasusFilteredProvinsi)
  var tombol = '';
      tombol += '<h3>Daftar Korban Provinsi '+ini+'</h3>'
      $.each(kasusFilteredProvinsi,function(kety, value){
        tombol += '<div class="column" onclick="klik('+value.ID+')"><div class="card"><span>'+value.TANGGAL+'</span><br><br><b>'+value.LOKASI+'</b><br><br><b>'+value.GOLONGAN+'</b><p>'+value.ISU+'</p></div></div>';
      });
      $('.list-pulau').html(tombol);
      $('.vert-move').show();
  kasusFilteredProvinsi = []
}

function klik(id) {
  kasusFiltered =  kasus.filter(function(data) {
    return data.ID == id;
  });
  console.log(kasusFiltered)
  $('#name').html(kasusFiltered[0].ISU);
  $('[id=date]').html(kasusFiltered[0].TANGGAL);
  $('#LOKASI').html(kasusFiltered[0].LOKASI);
  $('#PROVINSI').html(kasusFiltered[0].PROVINSI);
  $('#JENIS').html(kasusFiltered[0].JENIS);
  $('#PERISTIWA').html(kasusFiltered[0].PERISTIWA);
  $('#INSTITUSI').html(kasusFiltered[0].INSTITUSI);
  $('#PELAKU').html(kasusFiltered[0].PELAKU);
  $('#TINDAKAN').html(kasusFiltered[0].TINDAKAN);
  $('#ALASAN-TINDAKAN').html(kasusFiltered[0].ALASAN);
  $('#KORBAN').html(kasusFiltered[0].KORBAN);
  $('#GOLONGAN').html(kasusFiltered[0].GOLONGAN);
  $('#ISU').html(kasusFiltered[0].ISU);
  $('#DAMPAK').html(kasusFiltered[0].DAMPAK);
  $('#LUKA').html(kasusFiltered[0].LUKA);
  $('#TEWAS').html(kasusFiltered[0].TEWAS);
  $('#DITANGKAP').html(kasusFiltered[0].DITANGKAP);
  $('#LAINNYA').html(kasusFiltered[0].LAINNYA);
  $('#L').html(kasusFiltered[0].L);
  $('#P').html(kasusFiltered[0].P);
  
  $('#myModal').slideDown(500);
}

$('#tahun').change(function(){
  var dataJson = '';
	var tahun = $('#tahun').val();
	switch (tahun) {
    case '2011':
      var dataJson = '2011.JSON';
      break;
    case '2012':
      var dataJson = '2012.JSON';
      break;
    case '2013':
      var dataJson = '2013.JSON';
      break;
    case '2014':
      var dataJson = '2014.JSON';
      break;
    case '2015':
      var dataJson = '2015.JSON';
      break;
    case '2016':
      var dataJson = '2016.JSON';
      break;
    case '2017':
      var dataJson = '2017.JSON';
      break;
    case '2018':
      var dataJson = '2018.JSON';
      break;
    case '2019':
      var dataJson = '2019.JSON';
      break;
    default:
      var dataJson = 'data.JSON';
      break;
  }
  $.getJSON(dataJson,function(data){
      var tombol = '';
      kasus = data;
      $.each(data,function(kety, value){
        if ( value.EFFECT == 'Meninggal'){
         tombol += '<div class="column" onclick="klik('+value.ID+')"><div class="card"><span>'+value.DATE+'</span><br><b>'+value.VICTIM+'</b><br><b>'+value.METODE+'</b><p>'+value.CITY+'</p></div></div>';
        } else {
         tombol += '<div class="column" onclick="klik('+value.ID+')"><div class="card"><span>'+value.DATE+'</span><br><b>'+value.VICTIM+'</b><br><b>'+value.METODE+'</b><p>'+value.CITY+'</p></div></div>';
        }
      });
      $('.list').html(tombol);
    });

});
</script>
</body>
</html>
