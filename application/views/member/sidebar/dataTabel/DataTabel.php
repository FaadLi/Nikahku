<div class="container" id="datatabelv" style="display:none">
<div class="card text-center">
    <h3>DATATABEL<h3>


    <div class="row text-center card=header">
        <div class="col">
            <a class="btn" id="dekorasi" value="dekorasi" href="#"> Dekorasi </a>
        </div>
        <div class="col">
            <a class="btn" id="pakaian" href="#"> Pakaian </a>
        </div>
        <div class="col">
            <a class="btn" id="undangan" href="#"> Undangan </a>
        </div>
        <div class="col">
            <a class="btn" id="dokumentasi" href="#"> Dokumentasi </a>
        </div>
        <div class="col">
            <a class="btn" id="souvenir" href="#"> Souvenir </a>
        </div>
        <div class="col">
            <a class="btn" id="catering" href="#"> Catering </a>
        </div>
    </div>
</div>
<hr>
<br><br>
<script type="text/javascript">
    // Menu Member sidebar
    document.getElementById("dekorasi").addEventListener("click",dekorasi);
    document.getElementById("pakaian").addEventListener("click",pakaian);
    document.getElementById("undangan").addEventListener("click",undangan);
    document.getElementById("dokumentasi").addEventListener("click",dokumentasi);
    document.getElementById("souvenir").addEventListener("click",souvenir);
    document.getElementById("catering").addEventListener("click",catering);

    
    


    function dekorasi(){
        document.getElementById("dekorasiv").style.display="block";
        document.getElementById("pakaianv").style.display="none";
        document.getElementById("undanganv").style.display="none";
        document.getElementById("dokumentasiv").style.display="none";
        document.getElementById("souvenirv").style.display="none";
        document.getElementById("cateringv").style.display="none";
        
         tabelDb = "dekorasi";

        console.log(tabelDb);
    }

    function pakaian(){
        
        document.getElementById("dekorasiv").style.display="none";
        document.getElementById("pakaianv").style.display="block";
        document.getElementById("undanganv").style.display="none";
        document.getElementById("dokumentasiv").style.display="none";
        document.getElementById("souvenirv").style.display="none";
        document.getElementById("cateringv").style.display="none";

        tabelDb = "pakaian";

        console.log(tabelDb);
        
    }

    function undangan(){
        document.getElementById("dekorasiv").style.display="none";
        document.getElementById("pakaianv").style.display="none";
        document.getElementById("undanganv").style.display="";
        document.getElementById("dokumentasiv").style.display="none";
        document.getElementById("souvenirv").style.display="none";
        document.getElementById("cateringv").style.display="none";

        tabelDb = "undangan";

        console.log(tabelDb);
    }
    function dokumentasi(){
        document.getElementById("dekorasiv").style.display="none";
        document.getElementById("pakaianv").style.display="none";
        document.getElementById("undanganv").style.display="none";
        document.getElementById("dokumentasiv").style.display="";
        document.getElementById("souvenirv").style.display="none";
        document.getElementById("cateringv").style.display="none";

        tabelDb = "dokumentasi";

        console.log(tabelDb);
    }
    function souvenir(){
        document.getElementById("dekorasiv").style.display="none";
        document.getElementById("pakaianv").style.display="none";
        document.getElementById("undanganv").style.display="none";
        document.getElementById("dokumentasiv").style.display="none";
        document.getElementById("souvenirv").style.display="";
        document.getElementById("cateringv").style.display="none";

        tabelDb = "souvenir";

        console.log(tabelDb);
    }
    function catering(){
        document.getElementById("dekorasiv").style.display="none";
        document.getElementById("pakaianv").style.display="none";
        document.getElementById("undanganv").style.display="none";
        document.getElementById("dokumentasiv").style.display="none";
        document.getElementById("souvenirv").style.display="none";
        document.getElementById("cateringv").style.display="";

        tabelDb = "catering";

        console.log(tabelDb);
    }
</script>
