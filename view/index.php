<?php
require_once 'header.php';
?>
        <div class="container">

            <div class="bordaIndex">
              <p id="demo"> Encontre a budega mais proxíma
                  <button onclick="getLocation()" type="button" class="btn btn-info">
                    <span class="glyphicon glyphicon-map-marker"></span>
                  </button>
              </p>
            </div>
            <div class="mapa">
              <div id="mapholder"></div>
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfzxUTS7j-jGRfvkBRyTFDGh-pqt447_A&callback=initMap"></script>
              <script>
              var x=document.getElementById("demo");
              function getLocation(){
                // Verifica se o browser do usuario tem suporte a geolocation.
                if (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition,showError);
                }else{
                  x.innerHTML="Geolocalização não é suportada nesse browser.";}
              }

              function showPosition(position){
                lat=position.coords.latitude;
                lon=position.coords.longitude;
                latlon=new google.maps.LatLng(lat, lon)
                mapholder=document.getElementById('mapholder')
                mapholder.style.height='250px';
                mapholder.style.width='500px';

                var myOptions={
                center:latlon,zoom:14,
                mapTypeId:google.maps.MapTypeId.ROADMAP,
                mapTypeControl:false,
                navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
                };

                var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
                var marker=new google.maps.Marker({position:latlon,map:map,title:"Você está Aqui!"});
              }

              function showError(error){
                switch(error.code){
                  case error.PERMISSION_DENIED:
                    x.innerHTML="Usuário rejeitou a solicitação de Geolocalização."
                    break;
                  case error.POSITION_UNAVAILABLE:
                    x.innerHTML="Localização indisponível."
                    break;
                  case error.TIMEOUT:
                    x.innerHTML="O tempo da requisição expirou."
                    break;
                  case error.UNKNOWN_ERROR:
                    x.innerHTML="Algum erro desconhecido aconteceu."
                    break;
                  }
                }
              </script>
          </div>
          <div class="container-fluid">
            <div id="listaBudega">
              <div class="page-header2"></div>
              <div class="lista_budega">
                <div class="row">
                  <div class="col-sm-4">
                    <img src="../public/img/icone_budega.jpg">
                  </div>
                  <div class="col-sm-4">
                    <h4>Mercadinho Dona Maria</h4>
                    <a href="buscaProduto.php">Entra na loja</a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <img src="../public/img/icone_budega.jpg">
                  </div>
                  <div class="col-sm-4">
                    <h4>Supermercado Demontie</h4>
                    <a href="buscaProduto.php">Entra na loja</a>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Outro mapa
        <?php include 'map.php'; ?> -->

        </div>
        <?php
        require_once 'footerInicio.php';
         ?>
    </body>
</html>
