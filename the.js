

const PartOne = {
  template: '#template-part-one',
  data() {
    return {
      lrn: '',
      apelyido: '',
      unang_ngalan: '',
      gitna: '',
      purok: '',
      paaralan: '',
      kasarian: '',
      petsa_ng_kapanganakan: '',
      pook: '',
      petsa_ng_pagpasok: '',
      magulang: '',
      tirahan: '',
      hanapbuhay: '',
      grade_1_adviser: '',
      grade_1_paaralan: '',
      grade_1_sy: '',
      grade_1_final_filipino: 0,
      grade_1_final_filipino_remarks: '',
      grade_1_1q_filipino: 0,
      grade_1_2q_filipino: 0,
      grade_1_3q_filipino: 0,
      grade_1_4q_filipino: 0,
      grade_1_final_english: 0,
      grade_1_final_english_remarks: '',
      grade_1_1q_english: 0,
      grade_1_2q_english: 0,
      grade_1_3q_english: 0,
      grade_1_4q_english: 0,
      grade_1_final_mathematics: 0,
      grade_1_final_mathematics_remarks: '',
      grade_1_1q_mathematics: 0,
      grade_1_2q_mathematics: 0,
      grade_1_3q_mathematics: 0,
      grade_1_4q_mathematics: 0,
      grade_1_final_science: 0,
      grade_1_final_science_remarks: '',
      grade_1_1q_science: 0,
      grade_1_2q_science: 0,
      grade_1_3q_science: 0,
      grade_1_4q_science: 0,
      grade_1_final_ap: 0,
      grade_1_final_ap_remarks: '',
      grade_1_1q_ap: 0,
      grade_1_2q_ap: 0,
      grade_1_3q_ap: 0,
      grade_1_4q_ap: 0,
      grade_1_final_esp: 0,
      grade_1_final_esp_remarks: '',
      grade_1_1q_esp: 0,
      grade_1_2q_esp: 0,
      grade_1_3q_esp: 0,
      grade_1_4q_esp: 0,
      grade_1_final_music: 0,
      grade_1_final_music_remarks: '',
      grade_1_1q_music: 0,
      grade_1_2q_music: 0,
      grade_1_3q_music: 0,
      grade_1_4q_music: 0,
      grade_1_final_arts: 0,
      grade_1_final_arts_remarks: '',
      grade_1_1q_arts: 0,
      grade_1_2q_arts: 0,
      grade_1_3q_arts: 0,
      grade_1_4q_arts: 0,
      grade_1_final_pe: 0,
      grade_1_final_pe_remarks: '',
      grade_1_1q_pe: 0,
      grade_1_2q_pe: 0,
      grade_1_3q_pe: 0,
      grade_1_4q_pe: 0,
      grade_1_final_health: 0,
      grade_1_final_health_remarks: '',
      grade_1_1q_health: 0,
      grade_1_2q_health: 0,
      grade_1_3q_health: 0,
      grade_1_4q_health: 0,
      grade_1_final_mother_tongue: 0,
      grade_1_final_mother_tongue_remarks: '',
      grade_1_1q_mother_tongue: 0,
      grade_1_2q_mother_tongue: 0,
      grade_1_3q_mother_tongue: 0,
      grade_1_4q_mother_tongue: 0,
      grade_1_1q_mapeh: 0,
      grade_1_2q_mapeh: 0,
      grade_1_3q_mapeh: 0,
      grade_1_4q_mapeh: 0,
      grade_1_final_mapeh: 0,
      grade_1_general_average: 0,
      grade_1_eligible_for_admission: false
    }
  },
  created : function() {
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      // $('.modal').modal();
      // $('.datepicker').pickadate({
      //   selectMonths: true, // Creates a dropdown to control month
      //   selectYears: 100 // Creates a dropdown of 15 years to control year
      // });
    });
  },
  ready() {
  },
  methods: {
    show_modal: function() {
      var petsa_ng_kapanganakan_input = document.getElementById('petsa_ng_kapanganakan');
      var petsa_ng_pagpasok_input = document.getElementById('petsa_ng_pagpasok');

      this.petsa_ng_kapanganakan = petsa_ng_kapanganakan_input.value;
      this.petsa_ng_pagpasok = petsa_ng_pagpasok_input.value;

      console.log(petsa_ng_kapanganakan);

      $('#modal_info').modal('open');
    },
    compute_filipino: function() {
      grade_1_final_filipino = grade_1_1q_filipino + grade_1_2q_filipino + grade_1_3q_filipino + grade_1_4q_filipino;
    },
    save_file: function() {
      var doc = new jsPDF({
        orientation: 'portrait',
        unit: 'in',
        format: [8.5, 11]
      });

      this.grade_1_final_filipino = Number( ( (this.grade_1_2q_filipino + this.grade_1_3q_filipino + this.grade_1_4q_filipino) / 3 ).toFixed(0) ).toFixed(2);
      this.grade_1_final_english = Number( ( (this.grade_1_3q_english + this.grade_1_4q_english) / 2 ).toFixed(0) ).toFixed(2);
      this.grade_1_final_mathematics = Number( ( (this.grade_1_1q_mathematics + this.grade_1_2q_mathematics + this.grade_1_3q_mathematics + this.grade_1_4q_mathematics) / 4 ).toFixed(0) ).toFixed(2);
      this.grade_1_final_science = Number( ( (this.grade_1_1q_science + this.grade_1_2q_science + this.grade_1_3q_science + this.grade_1_4q_science) / 4 ).toFixed(0) ).toFixed(2);
      this.grade_1_final_esp = Number( ( (this.grade_1_1q_esp + this.grade_1_2q_esp + this.grade_1_3q_esp + this.grade_1_4q_esp) / 4 ).toFixed(0) ).toFixed(2);

      this.grade_1_1q_mapeh = Number( ( (this.grade_1_1q_music + this.grade_1_1q_arts + this.grade_1_1q_pe + this.grade_1_1q_health) / 4 ).toFixed(0) );
      this.grade_1_2q_mapeh = Number( ( (this.grade_1_2q_music + this.grade_1_2q_arts + this.grade_1_2q_pe + this.grade_1_2q_health) / 4 ).toFixed(0) );
      this.grade_1_3q_mapeh = Number( ( (this.grade_1_3q_music + this.grade_1_3q_arts + this.grade_1_3q_pe + this.grade_1_3q_health) / 4 ).toFixed(0) );
      this.grade_1_4q_mapeh = Number( ( (this.grade_1_4q_music + this.grade_1_4q_arts + this.grade_1_4q_pe + this.grade_1_4q_health) / 4 ).toFixed(0) );

      this.grade_1_final_mapeh = Number( ( (this.grade_1_1q_mapeh + this.grade_1_2q_mapeh + this.grade_1_3q_mapeh + this.grade_1_4q_mapeh) / 4 ).toFixed(0) ).toFixed(2);
      this.grade_1_final_mother_tongue = Number( ( (this.grade_1_1q_mother_tongue + this.grade_1_2q_mother_tongue + this.grade_1_3q_mother_tongue + this.grade_1_4q_mother_tongue) / 4 ).toFixed(0) ).toFixed(2);

      this.grade_1_general_average = Number( ( (Number(this.grade_1_final_filipino) + Number(this.grade_1_final_english) + Number(this.grade_1_final_mathematics) + Number(this.grade_1_final_esp) + Number(this.grade_1_final_mapeh) + Number(this.grade_1_final_mother_tongue)) / 6 ).toFixed(0) ).toFixed(2);

      doc.setTextColor(0, 0, 0);
      doc.setFontSize(9);
      doc.text(this.lrn, 1.0009, 2.18);

      doc.text(this.apelyido, 1.0009, 2.6);
      doc.text(this.unang_ngalan, 2.2, 2.6);
      doc.text(this.gitna, 3.8, 2.6);
      doc.text(this.purok, 4.5, 2.6);
      doc.text(this.paaralan, 6.25, 2.6);

      doc.setFontSize(6);
      doc.text(this.kasarian, 0.85, 3.08);
      doc.setFontSize(9);
      doc.text(this.petsa_ng_kapanganakan, 2.4, 3.08);
      doc.text(this.pook, 3.8, 3.08);
      doc.text(this.petsa_ng_pagpasok, 6.76, 3.08);

      doc.text(this.magulang, 1.7, 3.55);
      doc.text(this.tirahan, 4.1, 3.55);
      doc.text(this.hanapbuhay, 6.7, 3.55);

      //GRADES - Grade 1
      doc.text('I', 0.9, 4.55);
      doc.text(this.grade_1_paaralan, 1.6, 4.55);

      doc.text(this.grade_1_sy, 1.25, 4.68);
      doc.text(this.grade_1_adviser, 2.55, 4.68);

      doc.text(this.grade_1_2q_filipino + "", 2.4, 5.22);
      doc.text(this.grade_1_3q_filipino + "", 2.7, 5.22);
      doc.text(this.grade_1_4q_filipino + "", 2.98, 5.22);
      doc.text(this.grade_1_final_filipino + "", 3.25, 5.22);
      doc.text(this.grade_1_final_filipino < 75 ? 'Failed' : 'Passed', 3.65, 5.22);

      doc.text(this.grade_1_3q_english + "", 2.7, 5.37);
      doc.text(this.grade_1_4q_english + "", 2.98, 5.37);
      doc.text(this.grade_1_final_english + "", 3.25, 5.37);
      doc.text(this.grade_1_final_english < 75 ? 'Failed' : 'Passed', 3.65, 5.37);

      doc.text(this.grade_1_1q_mathematics + "", 2.1, 5.52);
      doc.text(this.grade_1_2q_mathematics + "", 2.4, 5.52);
      doc.text(this.grade_1_3q_mathematics + "", 2.7, 5.52);
      doc.text(this.grade_1_4q_mathematics + "", 2.98, 5.52);
      doc.text(this.grade_1_final_mathematics + "", 3.25, 5.52);
      doc.text(this.grade_1_final_mathematics < 75 ? 'Failed' : 'Passed', 3.65, 5.52);

      // doc.text(this.grade_1_2q_science + "", 2.1, 5.67);
      // doc.text(this.grade_1_2q_science + "", 2.4, 5.67);
      // doc.text(this.grade_1_3q_science + "", 2.7, 5.67);
      // doc.text(this.grade_1_4q_science + "", 2.98, 5.67);

      doc.text(this.grade_1_1q_ap + "", 2.1, 5.82);
      doc.text(this.grade_1_2q_ap + "", 2.4, 5.82);
      doc.text(this.grade_1_3q_ap + "", 2.7, 5.82);
      doc.text(this.grade_1_4q_ap + "", 2.98, 5.82);
      doc.text(this.grade_1_final_science + "", 3.25, 5.82);
      doc.text(this.grade_1_final_science < 75 ? 'Failed' : 'Passed', 3.65, 5.82);

      doc.text(this.grade_1_1q_esp + "", 2.1, 5.98);
      doc.text(this.grade_1_2q_esp + "", 2.4, 5.98);
      doc.text(this.grade_1_3q_esp + "", 2.7, 5.98);
      doc.text(this.grade_1_4q_esp + "", 2.98, 5.98);
      doc.text(this.grade_1_final_esp + "", 3.25, 5.98);
      doc.text(this.grade_1_final_esp < 75 ? 'Failed' : 'Passed', 3.65, 5.98);

      doc.text(this.grade_1_1q_mapeh + "", 2.1, 6.34);
      doc.text(this.grade_1_2q_mapeh + "", 2.4, 6.34);
      doc.text(this.grade_1_3q_mapeh + "", 2.7, 6.34);
      doc.text(this.grade_1_4q_mapeh + "", 2.98, 6.34);
      doc.text(this.grade_1_final_mapeh + "", 3.25, 6.34);
      doc.text(this.grade_1_final_mapeh < 75 ? 'Failed' : 'Passed', 3.65, 6.34);

      doc.text(this.grade_1_1q_music + "", 2.1, 6.49);
      doc.text(this.grade_1_2q_music + "", 2.4, 6.49);
      doc.text(this.grade_1_3q_music + "", 2.7, 6.49);
      doc.text(this.grade_1_4q_music + "", 2.98, 6.49);

      doc.text(this.grade_1_1q_arts + "", 2.1, 6.64);
      doc.text(this.grade_1_2q_arts + "", 2.4, 6.64);
      doc.text(this.grade_1_3q_arts + "", 2.7, 6.64);
      doc.text(this.grade_1_4q_arts + "", 2.98, 6.64);

      doc.text(this.grade_1_1q_pe + "", 2.1, 6.79);
      doc.text(this.grade_1_2q_pe + "", 2.4, 6.79);
      doc.text(this.grade_1_3q_pe + "", 2.7, 6.79);
      doc.text(this.grade_1_4q_pe + "", 2.98, 6.79);

      doc.text(this.grade_1_1q_health + "", 2.1, 6.93);
      doc.text(this.grade_1_2q_health + "", 2.4, 6.93);
      doc.text(this.grade_1_3q_health + "", 2.7, 6.93);
      doc.text(this.grade_1_4q_health + "", 2.98, 6.93);

      doc.text(this.grade_1_1q_mother_tongue + "", 2.1, 7.07);
      doc.text(this.grade_1_2q_mother_tongue + "", 2.4, 7.07);
      doc.text(this.grade_1_3q_mother_tongue + "", 2.7, 7.07);
      doc.text(this.grade_1_4q_mother_tongue + "", 2.98, 7.07);
      doc.text(this.grade_1_final_mother_tongue + "", 3.25, 7.07);
      doc.text(this.grade_1_final_mother_tongue < 75 ? 'Failed' : 'Passed', 3.65, 7.07);

      doc.text(this.grade_1_general_average + "", 3.25, 7.36);
      doc.text(this.grade_1_general_average < 75 ? 'Failed' : 'Passed', 3.65, 7.36);

      doc.text(this.grade_1_eligible_for_admission ? 'Two' : '' + "", 1.9, 7.55);

      doc.save(this.apelyido + this.unang_ngalan + this.gitna + '.pdf');
    }
  }
}

const router = new VueRouter({
  mode: 'history',
  routes: [
    // dynamic segments start with a colon
    { path: '/Form', component: PartOne },
    { path: '/part-one', component: PartOne }
  ]
})
const app = new Vue({
  router
}).$mount('#app')



// var app = new Vue({
//   el: '#app',
//   data: {
//     lrn: '',
//     apelyido: '',
//     unang_ngalan: '',
//     gitna: '',
//     purok: '',
//     paaralan: '',
//     kasarian: '',
//     petsa_ng_kapanganakan: '',
//     pook: '',
//     petsa_ng_pagpasok: '',
//     magulang: '',
//     tirahan: '',
//     hanapbuhay: '',
//     grade_1_adviser: '',
//     grade_1_paaralan: '',
//     grade_1_sy: '',
//     grade_1_final_filipino: 0,
//     grade_1_final_filipino_remarks: '',
//     grade_1_1q_filipino: 0,
//     grade_1_2q_filipino: 0,
//     grade_1_3q_filipino: 0,
//     grade_1_4q_filipino: 0,
//     grade_1_final_english: 0,
//     grade_1_final_english_remarks: '',
//     grade_1_1q_english: 0,
//     grade_1_2q_english: 0,
//     grade_1_3q_english: 0,
//     grade_1_4q_english: 0,
//     grade_1_final_mathematics: 0,
//     grade_1_final_mathematics_remarks: '',
//     grade_1_1q_mathematics: 0,
//     grade_1_2q_mathematics: 0,
//     grade_1_3q_mathematics: 0,
//     grade_1_4q_mathematics: 0,
//     grade_1_final_science: 0,
//     grade_1_final_science_remarks: '',
//     grade_1_1q_science: 0,
//     grade_1_2q_science: 0,
//     grade_1_3q_science: 0,
//     grade_1_4q_science: 0,
//     grade_1_final_ap: 0,
//     grade_1_final_ap_remarks: '',
//     grade_1_1q_ap: 0,
//     grade_1_2q_ap: 0,
//     grade_1_3q_ap: 0,
//     grade_1_4q_ap: 0,
//     grade_1_final_esp: 0,
//     grade_1_final_esp_remarks: '',
//     grade_1_1q_esp: 0,
//     grade_1_2q_esp: 0,
//     grade_1_3q_esp: 0,
//     grade_1_4q_esp: 0,
//     grade_1_final_music: 0,
//     grade_1_final_music_remarks: '',
//     grade_1_1q_music: 0,
//     grade_1_2q_music: 0,
//     grade_1_3q_music: 0,
//     grade_1_4q_music: 0,
//     grade_1_final_arts: 0,
//     grade_1_final_arts_remarks: '',
//     grade_1_1q_arts: 0,
//     grade_1_2q_arts: 0,
//     grade_1_3q_arts: 0,
//     grade_1_4q_arts: 0,
//     grade_1_final_pe: 0,
//     grade_1_final_pe_remarks: '',
//     grade_1_1q_pe: 0,
//     grade_1_2q_pe: 0,
//     grade_1_3q_pe: 0,
//     grade_1_4q_pe: 0,
//     grade_1_final_health: 0,
//     grade_1_final_health_remarks: '',
//     grade_1_1q_health: 0,
//     grade_1_2q_health: 0,
//     grade_1_3q_health: 0,
//     grade_1_4q_health: 0,
//     grade_1_final_mother_tongue: 0,
//     grade_1_final_mother_tongue_remarks: '',
//     grade_1_1q_mother_tongue: 0,
//     grade_1_2q_mother_tongue: 0,
//     grade_1_3q_mother_tongue: 0,
//     grade_1_4q_mother_tongue: 0,
//     grade_1_1q_mapeh: 0,
//     grade_1_2q_mapeh: 0,
//     grade_1_3q_mapeh: 0,
//     grade_1_4q_mapeh: 0,
//     grade_1_final_mapeh: 0,
//     grade_1_general_average: 0,
//     grade_1_eligible_for_admission: false
//   },
//   methods: {
//     show_modal: function() {
//       var petsa_ng_kapanganakan_input = document.getElementById('petsa_ng_kapanganakan');
//       var petsa_ng_pagpasok_input = document.getElementById('petsa_ng_pagpasok');
//
//       this.petsa_ng_kapanganakan = petsa_ng_kapanganakan_input.value;
//       this.petsa_ng_pagpasok = petsa_ng_pagpasok_input.value;
//
//       console.log(petsa_ng_kapanganakan);
//
//       $('#modal_info').modal('open');
//     },
//     compute_filipino: function() {
//       grade_1_final_filipino = grade_1_1q_filipino + grade_1_2q_filipino + grade_1_3q_filipino + grade_1_4q_filipino;
//     },
//     save_file: function() {
//       var doc = new jsPDF({
//         orientation: 'portrait',
//         unit: 'in',
//         format: [8.5, 11]
//       });
//
//       this.grade_1_final_filipino = Number( ( (this.grade_1_2q_filipino + this.grade_1_3q_filipino + this.grade_1_4q_filipino) / 3 ).toFixed(0) ).toFixed(2);
//       this.grade_1_final_english = Number( ( (this.grade_1_3q_english + this.grade_1_4q_english) / 2 ).toFixed(0) ).toFixed(2);
//       this.grade_1_final_mathematics = Number( ( (this.grade_1_1q_mathematics + this.grade_1_2q_mathematics + this.grade_1_3q_mathematics + this.grade_1_4q_mathematics) / 4 ).toFixed(0) ).toFixed(2);
//       this.grade_1_final_science = Number( ( (this.grade_1_1q_science + this.grade_1_2q_science + this.grade_1_3q_science + this.grade_1_4q_science) / 4 ).toFixed(0) ).toFixed(2);
//       this.grade_1_final_esp = Number( ( (this.grade_1_1q_esp + this.grade_1_2q_esp + this.grade_1_3q_esp + this.grade_1_4q_esp) / 4 ).toFixed(0) ).toFixed(2);
//
//       this.grade_1_1q_mapeh = Number( ( (this.grade_1_1q_music + this.grade_1_1q_arts + this.grade_1_1q_pe + this.grade_1_1q_health) / 4 ).toFixed(0) );
//       this.grade_1_2q_mapeh = Number( ( (this.grade_1_2q_music + this.grade_1_2q_arts + this.grade_1_2q_pe + this.grade_1_2q_health) / 4 ).toFixed(0) );
//       this.grade_1_3q_mapeh = Number( ( (this.grade_1_3q_music + this.grade_1_3q_arts + this.grade_1_3q_pe + this.grade_1_3q_health) / 4 ).toFixed(0) );
//       this.grade_1_4q_mapeh = Number( ( (this.grade_1_4q_music + this.grade_1_4q_arts + this.grade_1_4q_pe + this.grade_1_4q_health) / 4 ).toFixed(0) );
//
//       this.grade_1_final_mapeh = Number( ( (this.grade_1_1q_mapeh + this.grade_1_2q_mapeh + this.grade_1_3q_mapeh + this.grade_1_4q_mapeh) / 4 ).toFixed(0) ).toFixed(2);
//       this.grade_1_final_mother_tongue = Number( ( (this.grade_1_1q_mother_tongue + this.grade_1_2q_mother_tongue + this.grade_1_3q_mother_tongue + this.grade_1_4q_mother_tongue) / 4 ).toFixed(0) ).toFixed(2);
//
//       this.grade_1_general_average = Number( ( (Number(this.grade_1_final_filipino) + Number(this.grade_1_final_english) + Number(this.grade_1_final_mathematics) + Number(this.grade_1_final_esp) + Number(this.grade_1_final_mapeh) + Number(this.grade_1_final_mother_tongue)) / 6 ).toFixed(0) ).toFixed(2);
//
//       doc.setTextColor(0, 0, 0);
//       doc.setFontSize(9);
//       doc.text(this.lrn, 1.0009, 2.18);
//
//       doc.text(this.apelyido, 1.0009, 2.6);
//       doc.text(this.unang_ngalan, 2.2, 2.6);
//       doc.text(this.gitna, 3.8, 2.6);
//       doc.text(this.purok, 4.5, 2.6);
//       doc.text(this.paaralan, 6.25, 2.6);
//
//       doc.setFontSize(6);
//       doc.text(this.kasarian, 0.85, 3.08);
//       doc.setFontSize(9);
//       doc.text(this.petsa_ng_kapanganakan, 2.4, 3.08);
//       doc.text(this.pook, 3.8, 3.08);
//       doc.text(this.petsa_ng_pagpasok, 6.76, 3.08);
//
//       doc.text(this.magulang, 1.7, 3.55);
//       doc.text(this.tirahan, 4.1, 3.55);
//       doc.text(this.hanapbuhay, 6.7, 3.55);
//
//       //GRADES - Grade 1
//       doc.text('I', 0.9, 4.55);
//       doc.text(this.grade_1_paaralan, 1.6, 4.55);
//
//       doc.text(this.grade_1_sy, 1.25, 4.68);
//       doc.text(this.grade_1_adviser, 2.55, 4.68);
//
//       doc.text(this.grade_1_2q_filipino + "", 2.4, 5.22);
//       doc.text(this.grade_1_3q_filipino + "", 2.7, 5.22);
//       doc.text(this.grade_1_4q_filipino + "", 2.98, 5.22);
//       doc.text(this.grade_1_final_filipino + "", 3.25, 5.22);
//       doc.text(this.grade_1_final_filipino < 75 ? 'Failed' : 'Passed', 3.65, 5.22);
//
//       doc.text(this.grade_1_3q_english + "", 2.7, 5.37);
//       doc.text(this.grade_1_4q_english + "", 2.98, 5.37);
//       doc.text(this.grade_1_final_english + "", 3.25, 5.37);
//       doc.text(this.grade_1_final_english < 75 ? 'Failed' : 'Passed', 3.65, 5.37);
//
//       doc.text(this.grade_1_1q_mathematics + "", 2.1, 5.52);
//       doc.text(this.grade_1_2q_mathematics + "", 2.4, 5.52);
//       doc.text(this.grade_1_3q_mathematics + "", 2.7, 5.52);
//       doc.text(this.grade_1_4q_mathematics + "", 2.98, 5.52);
//       doc.text(this.grade_1_final_mathematics + "", 3.25, 5.52);
//       doc.text(this.grade_1_final_mathematics < 75 ? 'Failed' : 'Passed', 3.65, 5.52);
//
//       // doc.text(this.grade_1_2q_science + "", 2.1, 5.67);
//       // doc.text(this.grade_1_2q_science + "", 2.4, 5.67);
//       // doc.text(this.grade_1_3q_science + "", 2.7, 5.67);
//       // doc.text(this.grade_1_4q_science + "", 2.98, 5.67);
//
//       doc.text(this.grade_1_1q_ap + "", 2.1, 5.82);
//       doc.text(this.grade_1_2q_ap + "", 2.4, 5.82);
//       doc.text(this.grade_1_3q_ap + "", 2.7, 5.82);
//       doc.text(this.grade_1_4q_ap + "", 2.98, 5.82);
//       doc.text(this.grade_1_final_science + "", 3.25, 5.82);
//       doc.text(this.grade_1_final_science < 75 ? 'Failed' : 'Passed', 3.65, 5.82);
//
//       doc.text(this.grade_1_1q_esp + "", 2.1, 5.98);
//       doc.text(this.grade_1_2q_esp + "", 2.4, 5.98);
//       doc.text(this.grade_1_3q_esp + "", 2.7, 5.98);
//       doc.text(this.grade_1_4q_esp + "", 2.98, 5.98);
//       doc.text(this.grade_1_final_esp + "", 3.25, 5.98);
//       doc.text(this.grade_1_final_esp < 75 ? 'Failed' : 'Passed', 3.65, 5.98);
//
//       doc.text(this.grade_1_1q_mapeh + "", 2.1, 6.34);
//       doc.text(this.grade_1_2q_mapeh + "", 2.4, 6.34);
//       doc.text(this.grade_1_3q_mapeh + "", 2.7, 6.34);
//       doc.text(this.grade_1_4q_mapeh + "", 2.98, 6.34);
//       doc.text(this.grade_1_final_mapeh + "", 3.25, 6.34);
//       doc.text(this.grade_1_final_mapeh < 75 ? 'Failed' : 'Passed', 3.65, 6.34);
//
//       doc.text(this.grade_1_1q_music + "", 2.1, 6.49);
//       doc.text(this.grade_1_2q_music + "", 2.4, 6.49);
//       doc.text(this.grade_1_3q_music + "", 2.7, 6.49);
//       doc.text(this.grade_1_4q_music + "", 2.98, 6.49);
//
//       doc.text(this.grade_1_1q_arts + "", 2.1, 6.64);
//       doc.text(this.grade_1_2q_arts + "", 2.4, 6.64);
//       doc.text(this.grade_1_3q_arts + "", 2.7, 6.64);
//       doc.text(this.grade_1_4q_arts + "", 2.98, 6.64);
//
//       doc.text(this.grade_1_1q_pe + "", 2.1, 6.79);
//       doc.text(this.grade_1_2q_pe + "", 2.4, 6.79);
//       doc.text(this.grade_1_3q_pe + "", 2.7, 6.79);
//       doc.text(this.grade_1_4q_pe + "", 2.98, 6.79);
//
//       doc.text(this.grade_1_1q_health + "", 2.1, 6.93);
//       doc.text(this.grade_1_2q_health + "", 2.4, 6.93);
//       doc.text(this.grade_1_3q_health + "", 2.7, 6.93);
//       doc.text(this.grade_1_4q_health + "", 2.98, 6.93);
//
//       doc.text(this.grade_1_1q_mother_tongue + "", 2.1, 7.07);
//       doc.text(this.grade_1_2q_mother_tongue + "", 2.4, 7.07);
//       doc.text(this.grade_1_3q_mother_tongue + "", 2.7, 7.07);
//       doc.text(this.grade_1_4q_mother_tongue + "", 2.98, 7.07);
//       doc.text(this.grade_1_final_mother_tongue + "", 3.25, 7.07);
//       doc.text(this.grade_1_final_mother_tongue < 75 ? 'Failed' : 'Passed', 3.65, 7.07);
//
//       doc.text(this.grade_1_general_average + "", 3.25, 7.36);
//       doc.text(this.grade_1_general_average < 75 ? 'Failed' : 'Passed', 3.65, 7.36);
//
//       doc.text(this.grade_1_eligible_for_admission ? 'Two' : '' + "", 1.9, 7.55);
//
//       doc.save(this.apelyido + this.unang_ngalan + this.gitna + '.pdf');
//     }
//   }
// })

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 100 // Creates a dropdown of 15 years to control year
  });

$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});
