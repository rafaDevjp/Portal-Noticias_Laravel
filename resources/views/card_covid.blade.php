  
<?php 
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://covid19-brazil-api.now.sh/api/report/v1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        $dados_covid =json_decode($response, true);

    //     foreach ($dados_covid['data'] as $val) {
    //          if ($val === 13) {
    //         $img_estado = '/imagens/estados/amazonas.png';
            

    //     }
        
    // }
      
        //   echo $i;
}

?>

<div id="carouselExampleControls" class="carousel slide mb-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card " style=" max-height: 254.5px">
               <img src="{{URL::asset('/imagens/img5.jpg')}}" alt="img-test"  class="img-fluid">
            </div>
        </div>
        @foreach ($dados_covid['data'] as $item)
            <div class="carousel-item ">
              <div class="card border-light ">
              <div class="card-header bg_card-1 text-white font-weight-bold">
                  
                  
                  {{$item['state']}}</div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-6 bg-light p-2 text-center">
                            @if ( $item['uid'] === 13)
                               <img src="{{URL::asset('/imagens/estados/amazonas.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 23)
                               <img src="{{URL::asset('/imagens/estados/ceara.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 35)
                               <img src="{{URL::asset('/imagens/estados/sao-paulo.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 31)
                               <img src="{{URL::asset('/imagens/estados/minas-gerais.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 52)
                               <img src="{{URL::asset('/imagens/estados/goias.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 53)
                               <img src="{{URL::asset('/imagens/estados/distrito-federal.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 32)
                               <img src="{{URL::asset('/imagens/estados/espirito-santo.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 50)
                               <img src="{{URL::asset('/imagens/estados/mato-grosso-do-sul.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 51)
                               <img src="{{URL::asset('/imagens/estados/mato-grosso.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 21)
                               <img src="{{URL::asset('/imagens/estados/maranhao.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 25)
                               <img src="{{URL::asset('/imagens/estados/paraiba.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 41)
                               <img src="{{URL::asset('/imagens/estados/parana.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 26)
                               <img src="{{URL::asset('/imagens/estados/pernambuco.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 22)
                               <img src="{{URL::asset('/imagens/estados/piaui.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 11)
                               <img src="{{URL::asset('/imagens/estados/rondonia.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 33)
                               <img src="{{URL::asset('/imagens/estados/rio-de-janeiro.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 24)
                               <img src="{{URL::asset('/imagens/estados/rio-grande-do-norte.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 43)
                               <img src="{{URL::asset('/imagens/estados/rio-grande-do-sul.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 42)
                               <img src="{{URL::asset('/imagens/estados/santa-catarina.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 28)
                               <img src="{{URL::asset('/imagens/estados/sergipe.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 17)
                               <img src="{{URL::asset('/imagens/estados/tocantins.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 15)
                               <img src="{{URL::asset('/imagens/estados/para.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 27)
                               <img src="{{URL::asset('/imagens/estados/alagoas.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 12)
                               <img src="{{URL::asset('/imagens/estados/acre.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 16)
                               <img src="{{URL::asset('/imagens/estados/amapa.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 29)
                               <img src="{{URL::asset('/imagens/estados/bahia.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                            @if ( $item['uid'] === 14)
                               <img src="{{URL::asset('/imagens/estados/roraima.png')}}" style="width: 160px; height: 100px" class="border img-fluid"alt="">
                            @endif
                        </div>
                        <div class="col-6">
                            
                        <div class="col-12 p-0  text-center p-0">
                            <small class="card-text">Nº Casos: <h5><i class="fa fa-users" aria-hidden="true"></i> {{$item['cases']}}</h5></small>
                        </div>
                        <div class="col-12 text-center p-0">
                            <small class="card-text text-danger">Nº Mortes: <h5><i class="fa fa-users" aria-hidden="true"></i> {{$item['deaths']}}</h5></small>
                        </div>
                      
                        
                        </div>
                        <div class="col-12 text-center">
                            <small class="">Última atualização:
                                <h6> <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo date('d m Y ', strtotime($item['datetime'])) ?>as
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <?php echo date(' H:i', strtotime($item['datetime'])) ?>
                                </h6>
                            </small>
                        </div>
                        {{-- {{$val = $item['uid']}} --}}
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="" aria-hidden="true"></span>
        <span class="sr-only r">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



{{-- "uid": 11,
      "uf": "Rondônia",
      "state": "RO",
      "cases": 0,
      "deaths": 0,
      "suspects": 61,
      "refuses": 2,
      "broadcast": false,
      "comments": "",
      "datetime": "2020-03-18T23:00:00.000Z" --}}