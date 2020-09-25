



<div class="card  mb-3  ">

    <div class="card-header bg_card-1 text-white font-weight-bold   ">Clima-Tempo </div>
    <div class="card-body text-danger">
        <h5 class="card-title ">Previsão Para {{$response['city']}}</h5>


        <span>{{$response['description']}} </span><br>
        {{-- <small>cod. tempo atual {{$response['condition_code']}}</small><br>
        <small> Vento: {{$response['wind_speedy']}}</small><br>
        <small>umidade: {{$response['humidity']}}%</small><br>
        <small>tepo atual: {{$response['condition_slug']}}</small>  --}}

        {{-- <small>Item: {{$response['date']}}</small><br>
        <small>Item: {{$response['time']}}</small><br>
        <small>Item: {{$response['condition_code']}}</small><br> --condition_code - código da condição de tempo atual--
        <small>Item: {{$response['description']}}</small><br>
        <small>Item: {{$response['img_id']}}</small><br>

        <small>Item: {{$response['sunrise']}}</small><br>
        <small>Item: {{$response['sunset']}}</small><br>
        <small>Item: {{$response['condition_slug']}}</small><br> {{---condition_slug - slug da condição de tempo atual---}}

        <div class="row">
            <div id="container_img" class="col-6 d-flex align-items-center">

                @if(($response['condition_slug'] === "cloudly_night") OR ( $response['condition_slug'] === "cloud") && ($response['currently']=== "noite"))
                {{-- Noite nublada --}}
                <img src="{{URL::asset('/imagens/images_tempo/2rN.png')}}" class="" alt="img">
                @endif
                @if(($response['condition_slug'] === "clear_night") && ($response['currently']=== "noite"))
                {{-- Noite limpa --}}
                <img src="{{URL::asset('/imagens/images_tempo/1n.png')}}" class="" alt="img">
                @endif
                @if(($response['condition_slug'] === "clear_day") && ($response['currently']=== "dia"))
                {{-- Noite limpa --}}
                <img src="{{URL::asset('/imagens/images_tempo/sol.png')}}" class="" alt="img">
                @endif
                @if(($response['condition_slug'] === "cloudly_day") OR ( $response['condition_slug'] === "cloud") && ($response['currently']=== "dia"))
                {{-- Dia nublado --}}
                <img src="{{URL::asset('/imagens/images_tempo/2r.png')}}" class="" alt="img">
                @endif
                @if(($response['currently']=== "dia") && ($response['condition_slug'] === "rain"))
                {{-- Dia Chuvoso --}}
                <img src="{{URL::asset('/imagens/images_tempo/4r.png')}}" class="" alt="img">
                @endif
                @if(($response['currently']=== "noite") && ($response['condition_slug'] === "rain"))
                {{-- Noite Chuvoso --}}
                <img src="{{URL::asset('/imagens/images_tempo/4r.png')}}" class="" alt="img">
                @endif

            </div>
            <div class="col-6 ">
                <span style="font-size: 50pt ">{{$response['temp']}}º</span>

            </div>
        </div>

        <div id="card_tempo" class="row">
            @foreach ($previsao as $item)

            <div class="col-4 p-1 text-center">
                
                <h6 title="Data: {{$item['date']}}">{{$item['weekday']}}</h6>


                 @if ($item['condition']=== "storm")
                     <img src="{{URL::asset('/imagens/images_tempo/6n.png')}}" class="p-2" style="width: 50px " title="Chuva Forte" alt="img">
                 @endif
                 @if ($item['condition']=== "snow")
                     <img src="{{URL::asset('/imagens/images_tempo/8n.png')}}" class="p-2" style="width: 50px " title="Neve" alt="img">
                 @endif
                 @if ($item['condition']=== "hail")
                     <img src="{{URL::asset('/imagens/images_tempo/8n.png')}}" class="p-2" style="width: 50px " title="Granizo" alt="img">
                 @endif
                 @if ($item['condition']=== "rain")
                     <img src="{{URL::asset('/imagens/images_tempo/5n.png')}}" class="p-2" style="width: 50px " title="Chuva" alt="img">
                 @endif
                 @if ($item['condition']=== "fog")
                     <img src="{{URL::asset('/imagens/images_tempo/9.png')}}" class="p-2" style="width: 50px " title="Neblina" alt="img">
                 @endif
                 @if ($item['condition']=== "clear_day")
                     <img src="{{URL::asset('/imagens/images_tempo/sol.png')}}" class="p-2" style="width: 50px " title="Dia limpo" alt="img">
                 @endif
                 @if ($item['condition']=== "clear_night ")
                     <img src="{{URL::asset('/imagens/images_tempo/1n.png')}}" class="p-2" style="width: 50px " title="Noite limpa" alt="img">
                 @endif
                 @if ($item['condition']=== "cloud")
                     <img src="{{URL::asset('/imagens/images_tempo/3TM.png')}}" class="p-2" style="width: 50px " title="Nublado" alt="img">
                 @endif
                 @if ($item['condition']=== "cloudly_day")
                     <img src="{{URL::asset('/imagens/images_tempo/2r.png')}}" class="p-2" style="width: 50px " title="Nublado de dia" alt="img">
                 @endif
                 @if ($item['condition']=== "cloudly_night")
                     <img src="{{URL::asset('/imagens/images_tempo/2rN.png')}}" class="p-2" style="width: 50px " title="Nublado de noite" alt="img">
                 @endif
                 @if ($item['condition']=== "none_day")
                    none
                 @endif
                 @if ($item['condition']=== "none_night")
                     none
                 @endif
             
                <h6 class="" title="Máxima"> {{$item['max']}}</h6>
                <h6 class="min" title="Mínima"> {{$item['min']}}</h6>
                {{-- <span>Min: {{$item['condition']}}</span> --}}
            </div>

            @endforeach
        </div>

    </div>
</div>

{{--::::Lista condition ou  condition_slug::::::::::::
    -------------------------------
        storm - tempestade
        snow - neve
        hail - granizo
        rain - chuva
        fog - neblina
        clear_day - dia limpo
        clear_night - noite limpa
        cloud - nublado
        cloudly_day - nublado de dia
        cloudly_night - nublado de noite
        none_day - erro ao obter mas está de dia
        none_night - erro ao obter mas está de noite --}}