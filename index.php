<html>

<head>
  <title>JCDC - Form 137-E</title>
  <link rel="shortcut icon" type="images/png" href="images/fav.png"/>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://unpkg.com/vue"></script>
  <script type="text/javascript" src="js/bin/materialize.min.js"></script>
  <script type="text/javascript" src="js/date_picker/picker.date.js"></script>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style>

  </style>

</head>

<body>
  <div class="navbar-fixed">
    <nav>
      <div class="container-nav">
        <div class="nav-wrapper">
          <a href="" class="brand-logo">
            <img src="images/kidlat.png" />
          </a>
        </div>
      </div>
    </nav>
  </div>
  <div id="app">

    <div class="container-sexy-body">
    </br>
      <div class="row">
        <div class="col s12">
          <h5><strong>DepEd Form 137-E</strong></h5>
          <div class="card-panel white">
            <div class="row">
              <div class="input-field col s4">
                <input id="lrn" type="number" class="validate" v-model="lrn">
                <label for="lrn">LRN</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s5">
                <input id="apelyido" type="text" class="validate" v-model="apelyido">
                <label for="apelyido">Apelyido</label>
              </div>
              <div class="input-field col s5">
                <input id="unang_ngalan" type="text" class="validate" v-model="unang_ngalan">
                <label for="unang_ngalan">Unang ngalan</label>
              </div>
              <div class="input-field col s1">
                <input id="gitna" type="text" class="validate" v-model="gitna">
                <label for="gitna">M.I</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s2">
                <input id="purok" type="text" class="validate" v-model="purok">
                <label for="purok">Purok</label>
              </div>
              <div class="input-field col s6">
                <input id="paaralan" type="text" class="validate" v-model="paaralan">
                <label for="paaralan">Paaralan</label>
              </div>
            </div>
            <label for="kasarian">Kasarian</label>
            <div class="row">
              <div class="input-field col s2">
                <input name="kasarian" type="radio" id="kasarian_lalaki" value="Lalaki" v-model="kasarian"/>
                <label for="kasarian_lalaki">Lalaki</label>
              </div>
              <div class="input-field col s2">
                <input name="kasarian" type="radio" id="kasarian_babae" value="Babae" v-model="kasarian"/>
                <label for="kasarian_babae">Babae</label>
              </div>

            </div>
            <div class="row">
              <div class="input-field col s3">
                <input id="petsa_ng_kapanganakan" type="date" class="datepicker" v-model="petsa_ng_kapanganakan">
                <label for="petsa_ng_kapanganakan">Petsa ng Kapanganakan</label>
              </div>
              <div class="input-field col s4">
                <input id="pook" type="text" class="validate" v-model="pook">
                <label for="pook">Pook</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s3">
                <input id="petsa_ng_pagpasok" type="date" class="datepicker" v-model="petsa_ng_pagpasok">
                <label for="petsa_ng_pagpasok">Petsa ng Pagpasok</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s5">
                <input id="magulang" type="text" class="validate" v-model="magulang">
                <label for="magulang">Magulang</label>
              </div>
              <div class="input-field col s4">
                <input id="tirahan" type="text" class="validate" v-model="tirahan">
                <label for="tirahan">Tirahan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s5">
                <input id="hanapbuhay" type="text" class="validate" v-model="hanapbuhay">
                <label for="hanapbuhay">Hanapbuhay</label>
              </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action" data-target="modal_info">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL! -->
    <div id="modal_info" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h5><strong>Eyes on the board!</strong></h5>
        <p>Please review the following information</p>
        <div class="row">
          <div class="col s12">
            <p><strong>LRN:  </strong><span>{{ lrn }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Apelyido:  </strong><span>{{ apelyido }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Unang ngalan:  </strong><span>{{ unang_ngalan }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>M.I:  </strong><span>{{ gitna }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Purok: </strong><span>{{ purok }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Paaralan: </strong><span>{{ paaralan }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Kasarian: </strong><span>{{ kasarian }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Petsa ng Kapanganakan: </strong><span>{{ petsa_ng_kapanganakan }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Pook: </strong><span>{{ pook }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Petsa ng Pagpasok: </strong><span>{{ petsa_ng_pagpasok }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Magulang/Tagapag-alaga: </strong><span>{{ magulang }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Tirahan: </strong><span>{{ tirahan }}</span></p>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <p><strong>Hanapbuhay: </strong><span>{{ hanapbuhay }}</span></p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Download</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat red-text">Cancel</a>
      </div>
    </div>

  </div>


</body>

<script>

  var app = new Vue({
    el: '#app',
    data: {
      lrn: null,
      apelyido: null,
      unang_ngalan: null,
      gitna: null,
      purok: null,
      paaralan: null,
      kasarian: null,
      petsa_ng_kapanganakan: null,
      pook: null,
      petsa_ng_pagpasok: null,
      magulang: null,
      tirahan: null,
      hanapbuhay: null
    }
  })

  $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 100 // Creates a dropdown of 15 years to control year
    });

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

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
