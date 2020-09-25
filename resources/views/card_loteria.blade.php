
     
 <?php 
     
    $i = collect(json_decode($lot['resultado'],true))
    
 ?>


<div class="card border mb-3">
     <div class="card-header bg_card-1 text-white font-weight-bold">Loterias Caixa</div>
          
          <div class="card-body text-center">
               <h3 style="color:#0066b3; font-family: Helvetica; font-weight: 800 ">Mega-Sena</h3>
               <small class="text-secondary">Concurso: {{$lot['concurso']}} ( {{$lot['dataStr']}} )</small>
               <h5 class="">Resultado:</h5>
               <h6 style="color:#28a391; font-weight: bolder"> {{$lot['resultadoOrdenado']}}</h6>
          </div>
          <div class="card-footer bg-transparent border-top text-center">
               <small class="text-secondary">Próximo Sorteio: {{$lot['dt_proximo_concursoStr']}}</small>
          </div>
</div>



{{-- array:39 [▼
  "proximoConcurso" => "2301"
  "concursoAnterior" => "2300"
  "forward" => null
  "mensagens" => []
  "concurso" => "2301"
  "data" => 1600484400000
  "resultado" => "18-36-47-52-35-17"
  "ganhadores" => 0
  "ganhadores_quina" => 66
  "ganhadores_quadra" => 4333
  "valor" => 0
  "valor_quina" => 44296.26
  "valor_quadra" => 963.88
  "acumulado" => 1
  "valor_acumulado" => 36675402.78
  "dtinclusao" => 1600557900000
  "prox_final_zero" => "2305"
  "ac_final_zero" => 5984839.44
  "proxConcursoFinal" => null
  "observacao" => null
  "rowguid" => "8EC80EFD-6122-4BCF-A534-87583580C2CD"
  "ic_conferido" => "1"
  "de_local_sorteio" => "Espaço Loterias Caixa"
  "no_cidade" => "SÃO PAULO"
  "sg_uf" => "SP"
  "vr_estimativa" => 43000000
  "dt_proximo_concurso" => 1600830000000
  "vr_acumulado_especial" => 63247322.77
  "vr_arrecadado" => 50707269
  "ic_concurso_especial" => false
  "error" => false
  "rateioProcessamento" => false
  "sorteioAcumulado" => true
  "concursoEspecial" => "0"
  "ganhadoresPorUf" => null
  "resultadoOrdenado" => "17-18-35-36-47-52"
  "dataStr" => "19/09/2020"
  "dt_proximo_concursoStr" => "23/09/2020"
  "name" => "megasena"
] --}}