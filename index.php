<html>

<head>
  <title>JCDC - Form 137-E</title>
  <link rel="shortcut icon" type="images/png" href="images/fav.png"/>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://unpkg.com/vue"></script>
  <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
  <script type="text/javascript" src="js/bin/materialize.min.js"></script>
  <script type="text/javascript" src="js/date_picker/picker.date.js"></script>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style>

  </style>

</head>

<body>
  <div id="app">
    <div class="navbar-fixed">
      <nav>
        <div class="container-nav">
          <div class="nav-wrapper">
            <a class="brand-logo">
              <router-link to="/Form">
                <img src="images/kidlat.png" />
              </router-link>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a><router-link to="/part-one">Part I</router-link></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <router-view></router-view>
  </div>

</body>

<script type="text/x-template" id="template-part-one">
  <div>
    <div class="container-sexy-body">
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
                <input id="petsa_ng_kapanganakan" type="date" class="datepicker">
                <label class="active" for="petsa_ng_kapanganakan">Petsa ng Kapanganakan</label>
              </div>
              <div class="input-field col s4">
                <input id="pook" type="text" class="validate" v-model="pook">
                <label for="pook">Pook</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s3">
                <input id="petsa_ng_pagpasok" type="date" class="datepicker">
                <label class="active" for="petsa_ng_pagpasok">Petsa ng Pagpasok</label>
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
          </div>
        </div>

        <div class="col s12">
          <div class="card-panel white">
            <div class="row">
              <div class="input-field col s3">
                <input id="grade_1" type="text" class="validate" value="I" disabled="">
                <label for="grade_1">Grade level</label>
              </div>
              <div class="input-field col s5">
                <input id="grade_1_adviser" type="text" class="validate" v-model="grade_1_adviser">
                <label for="grade_1_adviser">Adviser</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="grade_1_paaralan" type="text" class="validate" v-model="grade_1_paaralan">
                <label for="grade_1_paaralan">Paaralan</label>
              </div>
              <div class="input-field col s3">
                <input id="grade_1_sy" type="text" class="validate" v-model="grade_1_sy">
                <label for="grade_1_sy">School Year</label>
              </div>
            </div>

            <div class="row">
              <div class="col s12">
                <table class="">
                  <thead>
                    <tr>
                        <th data-field="id">Learning Areas</th>
                        <th data-field="name">1st Quarter</th>
                        <th data-field="price">2nd Quarter</th>
                        <th data-field="price">3rd Quarter</th>
                        <th data-field="price">4th Quarter</th>
                        <th data-field="price">Final Grade</th>
                        <th data-field="price">Remarks</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="grey lighten-5">
                      <td>&nbsp;Filipino</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_filipino" type="number" class="validate" disabled>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_filipino" type="number" class="validate" v-model.number="grade_1_2q_filipino" number>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_filipino" type="number" class="validate" v-model.number="grade_1_3q_filipino" number>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_filipino" type="number" class="validate" v-model.number="grade_1_4q_filipino" number>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_filipino" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_filipino">{{ Number( ( (grade_1_2q_filipino + grade_1_3q_filipino + grade_1_4q_filipino) / 3 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s2">
                          <input id="grade_1_final_filipino_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_filipino_remarks">{{ Number( ( (grade_1_2q_filipino + grade_1_3q_filipino + grade_1_4q_filipino) / 3 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="blue lighten-5">
                      <td>&nbsp;English</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_english" type="text" class="validate" disabled>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_english" type="text" class="validate" disabled>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_english" type="number" class="validate" v-model.number="grade_1_3q_english">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_english" type="number" class="validate" v-model.number="grade_1_4q_english">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_english" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_english">{{ Number( ( (grade_1_3q_english + grade_1_4q_english) / 2 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_english_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_english_remarks">{{ Number( ( (grade_1_3q_english + grade_1_4q_english) / 2 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="indigo lighten-5">
                      <td>&nbsp;Mathematics</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_mathematics" type="number" class="validate" v-model.number="grade_1_1q_mathematics">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_mathematics" type="number" class="validate" v-model.number="grade_1_2q_mathematics">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_mathematics" type="number" class="validate" v-model.number="grade_1_3q_mathematics">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_mathematics" type="number" class="validate" v-model.number="grade_1_4q_mathematics">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_mathematics" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_mathematics">{{ Number( ( (grade_1_1q_mathematics + grade_1_2q_mathematics + grade_1_3q_mathematics + grade_1_4q_mathematics) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_mathematics_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_mathematics_remarks">{{ Number( ( (grade_1_1q_mathematics + grade_1_2q_mathematics + grade_1_3q_mathematics + grade_1_4q_mathematics) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <!-- <tr class="green lighten-5">
                      <td>&nbsp;Science</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_science" type="number" class="validate" v-model.number="grade_1_1q_science">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_science" type="number" class="validate" v-model.number="grade_1_2q_science">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_science" type="number" class="validate" v-model.number="grade_1_3q_science">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_science" type="number" class="validate" v-model.number="grade_1_4q_science">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_science" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_science">{{ Number( ( (grade_1_1q_science + grade_1_2q_science + grade_1_3q_science + grade_1_4q_science) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_science_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_science_remarks">{{ Number( ( (grade_1_1q_science + grade_1_2q_science + grade_1_3q_science + grade_1_4q_science) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr> -->
                    <tr class="orange lighten-5">
                      <td>&nbsp;Araling Panlipunan</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_ap" type="number" class="validate" v-model.number="grade_1_1q_ap">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_ap" type="number" class="validate" v-model.number="grade_1_2q_ap">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_ap" type="number" class="validate" v-model.number="grade_1_3q_ap">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_ap" type="number" class="validate" v-model.number="grade_1_4q_ap">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_ap" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_ap">{{ Number( ( (grade_1_1q_ap + grade_1_2q_ap + grade_1_3q_ap + grade_1_4q_ap) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_ap_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_ap_remarks">{{ Number( ( (grade_1_1q_ap + grade_1_2q_ap + grade_1_3q_ap + grade_1_4q_ap) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="blue-grey lighten-5">
                      <td>&nbsp;Edukasyon sa Pagpapakatao</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_esp" type="number" class="validate" v-model.number="grade_1_1q_esp">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_esp" type="number" class="validate" v-model.number="grade_1_2q_esp">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_esp" type="number" class="validate" v-model.number="grade_1_3q_esp">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_esp" type="number" class="validate" v-model.number="grade_1_4q_esp">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_esp" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_esp">{{ Number( ( (grade_1_1q_esp + grade_1_2q_esp + grade_1_3q_esp + grade_1_4q_esp) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_esp_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_esp_remarks">{{ Number( ( (grade_1_1q_esp + grade_1_2q_esp + grade_1_3q_esp + grade_1_4q_esp) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="">
                      <td>&nbsp;MAPEH</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_music" type="number" class="validate" disabled>
                          <label for="grade_1_1q_music">{{ Number( ( (grade_1_1q_music + grade_1_1q_arts + grade_1_1q_pe + grade_1_1q_health) / 4 ).toFixed(0) ) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_music" type="number" class="validate" disabled>
                          <label for="grade_1_2q_music">{{ Number( ( (grade_1_2q_music + grade_1_2q_arts + grade_1_2q_pe + grade_1_2q_health) / 4 ).toFixed(0) ) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_music" type="number" class="validate" disabled>
                          <label for="grade_1_3q_music">{{ Number( ( (grade_1_3q_music + grade_1_3q_arts + grade_1_3q_pe + grade_1_3q_health) / 4 ).toFixed(0) ) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_music" type="number" class="validate" disabled>
                          <label for="grade_1_4q_music">{{ Number( ( (grade_1_4q_music + grade_1_4q_arts + grade_1_4q_pe + grade_1_4q_health) / 4 ).toFixed(0) ) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_music">{{ Number( ( (grade_1_1q_music + grade_1_2q_music + grade_1_3q_music + grade_1_4q_music) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_music_remarks">{{ Number( ( (grade_1_1q_music + grade_1_2q_music + grade_1_3q_music + grade_1_4q_music) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="amber lighten-5">
                      <td>&nbsp;&nbsp;&nbsp; Music</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_music" type="number" class="validate" v-model.number="grade_1_1q_music">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_music" type="number" class="validate" v-model.number="grade_1_2q_music">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_music" type="number" class="validate" v-model.number="grade_1_3q_music">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_music" type="number" class="validate" v-model.number="grade_1_4q_music">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_music">{{ Number( ( (grade_1_1q_music + grade_1_2q_music + grade_1_3q_music + grade_1_4q_music) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_music_remarks">{{ Number( ( (grade_1_1q_music + grade_1_2q_music + grade_1_3q_music + grade_1_4q_music) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="amber lighten-5">
                      <td>&nbsp;&nbsp;&nbsp; Arts</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_arts" type="number" class="validate" v-model.number="grade_1_1q_arts">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_arts" type="number" class="validate" v-model.number="grade_1_2q_arts">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_arts" type="number" class="validate" v-model.number="grade_1_3q_arts">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_arts" type="number" class="validate" v-model.number="grade_1_4q_arts">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_music">{{ Number( ( (grade_1_1q_arts + grade_1_2q_arts + grade_1_3q_arts + grade_1_4q_arts) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_music_remarks">{{ Number( ( (grade_1_1q_arts + grade_1_2q_arts + grade_1_3q_arts + grade_1_4q_arts) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="amber lighten-5">
                      <td>&nbsp;&nbsp;&nbsp; PE</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_pe" type="number" class="validate" v-model.number="grade_1_1q_pe">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_pe" type="number" class="validate" v-model.number="grade_1_2q_pe">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_pe" type="number" class="validate" v-model.number="grade_1_3q_pe">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_pe" type="number" class="validate" v-model.number="grade_1_4q_pe">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_music">{{ Number( ( (grade_1_1q_pe + grade_1_2q_pe + grade_1_3q_pe + grade_1_4q_pe) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_music_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_music_remarks">{{ Number( ( (grade_1_1q_pe + grade_1_2q_pe + grade_1_3q_pe + grade_1_4q_pe) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="amber lighten-5">
                      <td>&nbsp;&nbsp;&nbsp; Health</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_health" type="number" class="validate" v-model.number="grade_1_1q_health">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_health" type="number" class="validate" v-model.number="grade_1_2q_health">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_health" type="number" class="validate" v-model.number="grade_1_3q_health">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_health" type="number" class="validate" v-model.number="grade_1_4q_health">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_health" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_health">{{ Number( ( (grade_1_1q_health + grade_1_2q_health + grade_1_3q_health + grade_1_4q_health) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_health_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_health_remarks">{{ Number( ( (grade_1_1q_health + grade_1_2q_health + grade_1_3q_health + grade_1_4q_health) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>
                    <tr class="green lighten-5">
                      <td>&nbsp; Mother Tongue</td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_1q_mother_tongue" type="number" class="validate" v-model.number="grade_1_1q_mother_tongue">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_2q_mother_tongue" type="number" class="validate" v-model.number="grade_1_2q_mother_tongue">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_3q_mother_tongue" type="number" class="validate" v-model.number="grade_1_3q_mother_tongue">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_4q_mother_tongue" type="number" class="validate" v-model.number="grade_1_4q_mother_tongue">
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_mother_tongue_remarks" type="text" class="validate" disabled></input>
                          <label for="grade_1_final_mother_tongue_remarks">{{ Number( ( (grade_1_1q_mother_tongue + grade_1_2q_mother_tongue + grade_1_3q_mother_tongue + grade_1_4q_mother_tongue) / 4 ).toFixed(0) ).toFixed(2) }}</label>
                        </div>
                      </td>
                      <td>
                        <div class="input-field col s12">
                          <input id="grade_1_final_mother_tongue_remarks" type="text" class="validate" disabled>
                          <label for="grade_1_final_mother_tongue_remarks">{{ Number( ( (grade_1_1q_mother_tongue + grade_1_2q_mother_tongue + grade_1_3q_mother_tongue + grade_1_4q_mother_tongue) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</label>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <div class="input-field col s12">
                <input type="checkbox" class="filled-in" id="grade_1_eligible_for_admission" v-model="grade_1_eligible_for_admission" />
                <label for="grade_1_eligible_for_admission">Eligible for Admission to Grade 2</label>
              </div>

            </div>

          </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action" v-on:click="show_modal">Submit</button>

      </div>
    </div>

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

        <div class="row">
          <label>Grade 1</label>
          <div class="col s12">
            <div class="card-panel white">
              <table class="">
                <thead>
                  <tr>
                      <th data-field="id">Learning Areas</th>
                      <th data-field="name">1</th>
                      <th data-field="price">2</th>
                      <th data-field="price">3</th>
                      <th data-field="price">4</th>
                      <th data-field="price">Final Grade</th>
                      <th data-field="price">Remarks</th>
                  </tr>
                </thead>

                <tbody>
                  <tr class="grey lighten-5">
                    <td>FILIPINO</td>
                    <td></td>
                    <td>{{ grade_1_2q_filipino }}</td>
                    <td>{{ grade_1_3q_filipino }}</td>
                    <td>{{ grade_1_4q_filipino }}</td>
                    <td>{{ Number( ( (grade_1_2q_filipino + grade_1_3q_filipino + grade_1_4q_filipino) / 3 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ ((grade_1_2q_filipino + grade_1_3q_filipino + grade_1_4q_filipino) / 3) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="blue lighten-5">
                    <td>ENGLISH</td>
                    <td></td>
                    <td></td>
                    <td>{{ grade_1_3q_english }}</td>
                    <td>{{ grade_1_4q_english }}</td>
                    <td>{{ Number( ( (grade_1_3q_english + grade_1_4q_english) / 2 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ ((grade_1_3q_english + grade_1_4q_english) / 2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="indigo lighten-5">
                    <td>MATHEMATICS</td>
                    <td>{{ grade_1_1q_mathematics }}</td>
                    <td>{{ grade_1_2q_mathematics }}</td>
                    <td>{{ grade_1_3q_mathematics }}</td>
                    <td>{{ grade_1_4q_mathematics }}</td>
                    <td>{{ Number( ( (grade_1_1q_mathematics + grade_1_2q_mathematics + grade_1_3q_mathematics + grade_1_4q_mathematics) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_mathematics + grade_1_2q_mathematics + grade_1_3q_mathematics + grade_1_4q_mathematics) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <!-- <tr class="green lighten-5">
                    <td>SCIENCE</td>
                    <td>{{ grade_1_1q_science }}</td>
                    <td>{{ grade_1_2q_science }}</td>
                    <td>{{ grade_1_3q_science }}</td>
                    <td>{{ grade_1_4q_science }}</td>
                    <td>{{ Number( ( (grade_1_1q_science + grade_1_2q_science + grade_1_3q_science + grade_1_4q_science) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_science + grade_1_2q_science + grade_1_3q_science + grade_1_4q_science) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr> -->
                  <tr class="orange lighten-5">
                    <td>ARALING PANLIPUNAN</td>
                    <td>{{ grade_1_1q_ap }}</td>
                    <td>{{ grade_1_2q_ap }}</td>
                    <td>{{ grade_1_3q_ap }}</td>
                    <td>{{ grade_1_4q_ap }}</td>
                    <td>{{ Number( ( (grade_1_1q_ap + grade_1_2q_ap + grade_1_3q_ap + grade_1_4q_ap) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_ap + grade_1_2q_ap + grade_1_3q_ap + grade_1_4q_ap) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="blue-grey lighten-5">
                    <td>EDUKAYSON SA PAGPAPAKATAO</td>
                    <td>{{ grade_1_1q_esp }}</td>
                    <td>{{ grade_1_2q_esp }}</td>
                    <td>{{ grade_1_3q_esp }}</td>
                    <td>{{ grade_1_4q_esp }}</td>
                    <td>{{ Number( ( (grade_1_1q_esp + grade_1_2q_esp + grade_1_3q_esp + grade_1_4q_esp) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_esp + grade_1_2q_esp + grade_1_3q_esp + grade_1_4q_esp) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="">
                    <td>MAPEH</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="amber lighten-5">
                    <td>&nbsp;&nbsp;&nbsp; MUSIC</td>
                    <td>{{ grade_1_1q_music }}</td>
                    <td>{{ grade_1_2q_music }}</td>
                    <td>{{ grade_1_3q_music }}</td>
                    <td>{{ grade_1_4q_music }}</td>
                    <td>{{ Number( ( (grade_1_1q_music + grade_1_2q_music + grade_1_3q_music + grade_1_4q_music) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_music + grade_1_2q_music + grade_1_3q_music + grade_1_4q_music) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="amber lighten-5">
                    <td>&nbsp;&nbsp;&nbsp; ARTS</td>
                    <td>{{ grade_1_1q_arts }}</td>
                    <td>{{ grade_1_2q_arts }}</td>
                    <td>{{ grade_1_3q_arts }}</td>
                    <td>{{ grade_1_4q_arts }}</td>
                    <td>{{ Number( ( (grade_1_1q_arts + grade_1_2q_arts + grade_1_3q_arts + grade_1_4q_arts) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_arts + grade_1_2q_arts + grade_1_3q_arts + grade_1_4q_arts) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="amber lighten-5">
                    <td>&nbsp;&nbsp;&nbsp; PE</td>
                    <td>{{ grade_1_1q_pe }}</td>
                    <td>{{ grade_1_2q_pe }}</td>
                    <td>{{ grade_1_3q_pe }}</td>
                    <td>{{ grade_1_4q_pe }}</td>
                    <td>{{ Number( ( (grade_1_1q_pe + grade_1_2q_pe + grade_1_3q_pe + grade_1_4q_pe) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_pe + grade_1_2q_pe + grade_1_3q_pe + grade_1_4q_pe) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="amber lighten-5">
                    <td>&nbsp;&nbsp;&nbsp; HEALTH</td>
                    <td>{{ grade_1_1q_health }}</td>
                    <td>{{ grade_1_2q_health }}</td>
                    <td>{{ grade_1_3q_health }}</td>
                    <td>{{ grade_1_4q_health }}</td>
                    <td>{{ Number( ( (grade_1_1q_health + grade_1_1q_health + grade_1_1q_health + grade_1_1q_health) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_health + grade_1_2q_health + grade_1_3q_health + grade_1_4q_health) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>
                  <tr class="green lighten-5">
                    <td>&nbsp;&nbsp;&nbsp; HEALTH</td>
                    <td>{{ grade_1_1q_mother_tongue }}</td>
                    <td>{{ grade_1_2q_mother_tongue }}</td>
                    <td>{{ grade_1_3q_mother_tongue }}</td>
                    <td>{{ grade_1_4q_mother_tongue }}</td>
                    <td>{{ Number( ( (grade_1_1q_mother_tongue + grade_1_2q_mother_tongue + grade_1_3q_mother_tongue + grade_1_4q_mother_tongue) / 4 ).toFixed(0) ).toFixed(2) }}</td>
                    <td>{{ Number( ( (grade_1_1q_mother_tongue + grade_1_2q_mother_tongue + grade_1_3q_mother_tongue + grade_1_4q_mother_tongue) / 4 ).toFixed(0) ).toFixed(2) < 75 ? 'Failed' : 'Passed' }}</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              <p><strong> {{ grade_1_eligible_for_admission ? '' : 'Not' }} Eligible for Admission to Grade 2</strong></p>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat" v-on:click="save_file">Download</a>
        <a class="modal-action modal-close waves-effect waves-green btn-flat red-text">Cancel</a>
      </div>
    </div>
  </div>

</script>


<script type="text/javascript" src="the.js"></script>

</html>
