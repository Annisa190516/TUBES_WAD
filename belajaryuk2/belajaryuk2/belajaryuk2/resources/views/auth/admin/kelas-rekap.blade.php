@extends('app-dashboard')

@section('title')
Kelas-Rekap | Admin
@endsection

@section('content')

<ul id="dropdown-rekap" class="dropdown-content">
  <li><a id="ExportPDF" href="#!">PDF</a></li>
  <li><a id="ExportExcel" href="#!">Excel</a></li>
</ul>

<section>
  <div class="container-dashboard">
    <div class="title-page-dashboard">
      <div class="row nm">
        <div class="col s12 m12 l6">
          <h5>Nama Kelas - Rekap</h5>
        </div>

        <div class="col s12 m12 l6 right-align">

        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-dashboard">
    <div class="row">
      <div class="col s12 m12 l6">
       <div class="input-field nm">
        <i class="material-icons prefix">search</i>
        <input placeholder="Search here" id="input-search" type="text" style="border: 0 !important; margin-bottom: 0">
      </div>
    </div>
    <div class="col s12 m12 l6 right-align">
      <a class="waves-effect waves-light btn outlined primary dropdown-trigger" data-target="dropdown-rekap">
        <i class="material-icons left">article</i>Rekap
      </a>
    </div>
  </div>

  <table id="tabel-rekap" class="display" width="180%">
      <thead>
        <tr>
          <th>Siswa</th>
          <th class="center">Tugas 1</th>
          <th class="center">Tugas 2</th>
          <th class="center">Tugas 1</th>
          <th class="center">Tugas 2</th>
          <th class="center">Tugas 1</th>
          <th class="center">Tugas 2</th>
          <th class="center">Tugas 1</th>
          <th class="center">Tugas 2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
           <div class="img-wtext">
            <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
            <div class="text">
             <div><b>Nama Siswa</b></div>
             <div>NIS Siswa</div>
           </div>
         </div>
       </td>
       <td class="center">100</td>
       <td class="center">100</td>
       <td class="center">100</td>
       <td class="center">100</td>
       <td class="center">100</td>
       <td class="center">100</td>
       <td class="center">100</td>
       <td class="center">100</td>
     </tr>
     <tr>
      <td>
        <div class="img-wtext">
          <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
          <div class="text">
           <div><b>Nama Siswa</b></div>
           <div>NIS Siswa</div>
         </div>
       </div>
     </td>
     <td class="center">100</td>
     <td class="center">100</td>
     <td class="center">100</td>
     <td class="center">100</td>
     <td class="center">100</td>
     <td class="center">100</td>
     <td class="center">100</td>
     <td class="center">100</td>
   </tr>
   <tr>
    <td>
     <div class="img-wtext">
      <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
      <div class="text">
       <div><b>Nama Siswa</b></div>
       <div>NIS Siswa</div>
     </div>
   </div>
 </td>
 <td class="center">100</td>
 <td class="center">100</td>
 <td class="center">100</td>
 <td class="center">100</td>
 <td class="center">100</td>
 <td class="center">100</td>
 <td class="center">100</td>
 <td class="center">100</td>
</tr>
<tr>
  <td>
   <div class="img-wtext">
    <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
    <div class="text">
     <div><b>Nama Siswa</b></div>
     <div>NIS Siswa</div>
   </div>
 </div>
</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
</tr>
<tr>
  <td>
   <div class="img-wtext">
    <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
    <div class="text">
     <div><b>Nama Siswa</b></div>
     <div>NIS Siswa</div>
   </div>
 </div>
</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
</tr>
<tr>
  <td>
   <div class="img-wtext">
    <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
    <div class="text">
     <div><b>Nama Siswa</b></div>
     <div>NIS Siswa</div>
   </div>
 </div>
</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
</tr>
<tr>
  <td>
   <div class="img-wtext">
    <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
    <div class="text">
     <div><b>Nama Siswa</b></div>
     <div>NIS Siswa</div>
   </div>
 </div>
</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
</tr>
<tr>
  <td>
   <div class="img-wtext">
    <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
    <div class="text">
     <div><b>Nama Siswa</b></div>
     <div>NIS Siswa</div>
   </div>
 </div>
</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
<td class="center">100</td>
</tr>
</tbody>
</table>

</div>
</section>


{{-- MODAL --}}

@endsection

@section('js-plus')
<script type="text/javascript">
  $(document).ready( function () {
    var table = $('#tabel-rekap').DataTable({
      "dom": 
      "<'row'<'col s12 m12 l12'tr>>",

      scrollX:        true,
      scrollCollapse: true,
      paging:         false,
      fixedColumns:   {
        leftColumns: 1
      },

      buttons: [
      {
        extend: 'excelHtml5'
      },
      {
        extend: 'pdfHtml5'
      },
      ],

    });

    tabelsearch = $('#tabel-rekap').DataTable();
    $('#input-search').keyup(function(){
      tabelsearch.search($(this).val()).draw();
    });

    $("#ExportPDF").on("click", function() {
      table.button( '.buttons-pdf' ).trigger();
    });

    $("#ExportExcel").on("click", function() {
      table.button( '.buttons-excel' ).trigger();
    });
  });


</script>
@endsection