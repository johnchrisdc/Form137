<html>

<head>
  <title>Form 137</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style>

  </style>

</head>

<body>
  <nav>
    <div class="container-nav">
      <div class="nav-wrapper">
        <a href="" class="brand-logo">
          <img src="images/kidlat.png" />
        </a>
      </div>
    </div>
  </nav>
  <div class="container">

  </div>
</body>

<script>
  var doc = new jsPDF({
    orientation: 'portrait',
    unit: 'in',
    format: [8.5, 11]
  });

  function lewildFormAppeard() {
    doc.setTextColor(55, 37, 165);
    doc.setFontSize(9);
    doc.text('12345678901234', 1.0009, 2.18);

    doc.text('Dela Cruz', 1.0009, 2.6);
    doc.text('John Chris', 2.2, 2.6);
    doc.text('X', 3.9, 2.6);
    doc.text('143', 4.5, 2.6);
    doc.text('Potato Inc', 6.25, 2.6);

    doc.text('M', 0.85, 3.08);
    doc.text('Abril 07, 2015', 2.4, 3.08);
    doc.text('Quingua, Bulakan', 3.8, 3.08);
    doc.text('Hulyo 1, 2016', 6.76, 3.08);

    doc.text('Leonora D. Liligo', 1.7, 3.56);
    doc.text('AwardWinningHome, Quingua, Bulakan', 4.1, 3.56);
    doc.text('Bhoszzzhh', 6.7, 3.56);

//    doc.save('two-by-four.pdf');
  }
</script>

</html>
