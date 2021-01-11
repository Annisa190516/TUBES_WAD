@extends('app-dashboard')

@section('title')
Kelas-Materi | Admin
@endsection

@section('content')

<ul id="dropdown-menu" class="dropdown-content left-align">
  <li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
  <li><a class="modal-trigger" href="#modal-hapus">Hapus</a></li>
</ul>

<ul id="dropdown-rekap" class="dropdown-content">
  <li><a id="ExportPDF" href="#!">PDF</a></li>
  <li><a id="ExportExcel" href="#!">Excel</a></li>
</ul>

<section>
  <div class="container-dashboard">
    <div class="title-page-dashboard">
      <div class="row nm">
        <div class="col s12 m12 l6">
          <h5>Nama Kelas - Materi</h5>
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

  <table id="tabel-materi" class="display">
    <thead>
      <tr>
        <th>Materi</th>
        <th>Komponen</th>
        <th>Created At</th>
        <th style="width: 100px"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nama Materi</td>
        <td><a class="waves-effect waves btn-flat" href="{{route('admin.kelas.materi_komponen')}}"><i class="material-icons left">article</i>10</a></td>
        <td>22 Juni 2020</td>
        <td>
          <a class="btn-floating waves-effect waves-light btn-flat dropdown-trigger" href="#" data-target="dropdown-menu">
            <i class="material-icons">more_vert</i>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</section>


{{-- MODAL --}}
<div id="modal-hapus" class="modal small">
  <form action="" method="">
    @csrf

    <div class="modal-content">
      <div class="title-page nm">
        <h4>Hapus Materi</h4>
      </div>
      <br>

      <h6>Anda akan menghapus Materi ... dari kelas ...</h6>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
      <button type="submit" class="waves-effect waves-green btn outlined danger">Hapus</button>
    </div>
  </form>
</div>

<div id="modal-edit" class="modal small">
  <form action="" method="">
    @csrf

    <div class="modal-content">
      <div class="title-page nm">
        <h4>Edit Materi</h4>
      </div>
      <br>

      <div class="row">
        <div class="input-field col s12">
          <input id="nama_materi" type="text" class="validate" name="judul" required="">
          <label for="nama_materi">Nama Materi</label>
        </div>
      </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
      <button type="submit" class="waves-effect waves-green btn outlined primary">Submit</button>
    </div>
  </form>
</div>
@endsection

@section('js-plus')
<script type="text/javascript">
  $(document).ready( function () {
    var table = $('#tabel-materi').DataTable({
      "dom": 
      "<'row'<'col s12 m12 l12'tr>>",

      buttons: [
      {
        extend: 'excelHtml5'
      },
      {
        extend: 'pdfHtml5'
      },
      ],

    });

    tabelsearch = $('#tabel-materi').DataTable();
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