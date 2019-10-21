<div class="container" id="kategoriv" style="display:none"><br>
 <h3 class="text-center">Tambah Kategori <b>Nikahku.com</b></h3>

 <div class="container border">
 <br>

  <form id="formbaru1" >
    <div class="row" id="Modal_Add">
      
      <div class="col-6">
        <div class="form-group col-12 row">
          <hr class="col">
          <label class="col text-center"><b> Kategori</b></label>
          <hr class="col">
        </div>
        <div class="form-group col-lg-12">
          <label>Pilih Kategori</label>
          <select class="form-control" id="tabel" required="">
            <option disabled selected>Pilih Kategori</option>
            <option value="dekorasi">Dekorasi</option>
            <option value="pakaian">Pakaian</option>
            <option value="undangan">Undangan</option>
            <option value="dokumentasi">Dokumentasi</option>
            <option value="souvenir">Souvenir</option>
            <option value="catering">Catering</option>
          </select>
        </div>
        
        <div class="form-group col-lg-12">
          <label>Nama</label>
            <input type="text" id="nama" class="form-control" minlength="3" placeholder="Nama Kategori"required="" >
          <div class="invalid-feedback">Wedding Organizer</div>
        </div>
        <div class="form-group col-lg-12">
          <label>Harga Kategori</label>
            <input type="text" id="harga" class="form-control" minlength="3" placeholder="Harga"required="" >
          <div class="invalid-feedback">Harga</div>
        </div>
        <div class="form-group col-lg-12">
          <label>Tambah Keterangan</label>
            <textarea type="textarea" id="keterangan" class="form-control" minlength="3" placeholder="Keterangan"required="" >
            </textarea>
          <div class="invalid-feedback">Keterangan</div>
        </div>
      </div>


      <div class="col-6">
        <div class="form-group col-12 row">
          <hr class="col">
          <label class="col text-center"><b>Opsi</b></label>
          <hr class="col">
        </div>
        
        
        <div class="form-group col-12">
          <label class="row col" id="kat_jenis"> Jenis Kategori : 
            <a class=col-12 ></a>
            <label class="radio-inline col"><input type="radio" class="radioJenis" value="1" name="radioJenis" checked> Bebas</label>
            <label class="radio-inline col"><input type="radio" class="radioJenis" value="2" name="radioJenis"> Modern</label>
            <label class="radio-inline col"><input type="radio" class="radioJenis" value="3" name="radioJenis"> Tradisional</label> 
          </label>
        </div>
        <div class="form-group col-lg-6">
          <label class="row col">Warna Kategori</label>

          <select class="form-control" id="kat_warna" required="">
              <option disabled selected> Pilih Warna Kategori</option>
              <option value="1"> Merah</option>
              <option value="2"> Kuning</option>
              <option value="3"> Hijau</option>
              <option value="4"> Biru</option>				
          </select>

        </div>
        <div class="form-group col-lg-12">
          <label> Image</label>
          <input type="file" class="form-control-file border" name="file" data-toggle="tooltip" title="Fungsi Belum Bisa">
        </div> 
      </div>
      
      
      <div class="col-5"></div>
      <div class="form-group col-5">
        <button type="submit" class="btn btn-success" value="Tambah Kategori" >Tambah Kategori</button>
      </div>

      
    </div>
  </form> 


 </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {       
//   ========================  Start ADD RECORD ====================================
    $('#formbaru1').submit(function(e){
      e.preventDefault();
      e.stopPropagation(); 
      var tabel       = $('#tabel').val();
      var nama        = $('#nama').val();
      var keterangan  = $('#keterangan').val();
      var harga       = $('#harga').val();
      var kat_warna   = $('#kat_warna').val();
      var kat_jenis   = $('.radioJenis:checked').val();

      console.log("tambah kategori");

      alert(tabel+" +"+kat_warna +" + "+kat_jenis);
//      return;
      $.ajax({
        type : "POST",
        url  : "<?php echo site_url(); ?>/CMember/createDekorasi",
        dataType : "JSON",
        data : {tabel,
                nama,
                keterangan,
                harga,
                kat_warna,
                kat_jenis}, 
        
        success:function(data){
          
          alert("Berhasil Ditambah");
          location.reload();
        }
        
      });

      return false;
    });
//   ========================  END ADD RECORD ====================================
  });

</script>