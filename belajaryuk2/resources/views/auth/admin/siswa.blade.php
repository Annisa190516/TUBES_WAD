@extends('app-dashboard')

@section('title')
Siswa | Admin
@endsection

@section('content')

<ul id="dropdown-menu" class="dropdown-content left-align">
  <li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
  <li><a class="modal-trigger" href="#modal-hapus">Hapus</a></li>
</ul>

<section>
  <div class="container-dashboard">
    <div class="title-page-dashboard">
      <div class="row nm">
        <div class="col s12 m12 l6">
          <h5>Siswa</h5>
        </div>

        <div class="col s12 m12 l6 right-align">

        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-dashboard">
   <table id="tabel-siswa" class="display">
    <thead>
      <tr>
        <th style="width: 350px">Siswa</th>
        <th>Username</th>
        <th>Kelas</th>
        <th>Register At</th>
        <th style="width: 100px"></th>
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
       <td>Username Siswa</td>
       <td>10</td>
       <td>12 Juni 2020</td>
       <td>
        <a class="btn-floating waves-effect waves-light btn-flat dropdown-trigger" href="#" data-target="dropdown-menu">
          <i class="material-icons">more_vert</i>
        </a>
      </td>
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
     <td>Username Siswa</td>
     <td>10</td>
     <td>12 Juni 2020</td>
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
<div id="modal-edit" class="modal modal-full">
  <div class="modal-header row">
    <div class="col s11">
      <div class="img-wtext">
        <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle">
        <div class="text">
         <div><b>Nama Siswa</b></div>
         <div>NIS Siswa</div>
       </div>
     </div>
   </div>
   <div class="col s1 right-align">
    <button class="btn-floating waves-effect waves-light btn-flat modal-close"><i class="material-icons">close</i></button>
  </div>
</div>
<div class="modal-content">
  <div class="container w30">
    <div class="card-panel outlined nm mgb-3">
      <form action="" method="">
        @csrf
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Nama" id="nama" type="text" class="validate" name="nama">
            <label for="nama">Nama</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="NIS" id="nis" type="text" class="validate" name="nis">
            <label for="nis">NIS</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Kelas" id="nama" type="text" class="validate" name="kelas">
            <label for="kelas">Kelas</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Username" id="username" type="text" class="validate" name="username">
            <label for="username">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Password" id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn outlined primary">
              <span>Foto</span>
              <input type="file" name="foto" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload Foto" name="foto">
            </div>
          </div>
        </div>
        <div class="row nm">
          <div class="input-field col s12 right-align">
            <button type="submit" class="waves-effect waves-light btn btn-large primary-dark outlined">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<div id="modal-hapus" class="modal small">
  <form action="" method="">
    @csrf

    <div class="modal-content">
      <div class="title-page nm">
        <h4>Hapus Siswa</h4>
      </div>
      <br>

      <h6>Anda akan menghapus Siswa ...</h6>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
      <button type="submit" class="waves-effect waves-green btn outlined danger">Hapus</button>
    </div>
  </form>
</div>

@endsection

@section('js-plus')
<script type="text/javascript">
 

</script>
@endsection