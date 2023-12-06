<html>
    <body>
     <a href="{{ route('view.list.abcd') }}">Назад</a><br/><br/>
        <h1>Проработка, составление копинг карточки</h1>
        
       
     @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif 
        
        
 <form method="POST" action="{{ route('Store.AbcdPlus') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
            <ul>

                
    <li><label>Ситуация</label><br/>{{  $data->A }}<br/><br/>
   </li>
    
    
    <li><label>Автоматическая мысль</label><br/>{{  $data->B }}<br/><br/>
   </li>
      <li><label>Действие</label><br/>{{  $data->D }}<br/><br/>
   </li>
     
               
       <li><label>ЦЕЛЬ Мотивация+-(положительные и отрицательные)</label>
               
                  <div><textarea name="celi" cols="50" rows="3">@if(isset($data->AbcdPlu[0]['target'])) {{$data->AbcdPlu[0]['target']}} @endif </textarea><br/>
                
                @error('celi')<strong>{{ $message }}</strong>@enderror<br/><br/>
                </div></li>        
                
      <li> <label>Убеждения из ам (глубиные,промежуточные)</label> 
        
          <div><textarea name="ygp" cols="50" rows="5"> </textarea><br/>
                
                @error('ygp')<strong>{{ $message }}</strong>@enderror<br/><br/>
                </div></li>
                
       <li> <label>Адаптивный ответ (копинг каторчка)</label> 
        
          <div><textarea name="ao" cols="50" rows="5">@if(isset($data->AbcdPlu[0]['AlternativKopingMisli'])) {{$data->AbcdPlu[0]['AlternativKopingMisli']}} @endif </textarea><br/>
                
                @error('ao')<strong>{{ $message }}</strong>@enderror<br/><br/>
                </div></li>
                 <li> <label>Вывод(как реагировать на нее)</label> 
        
          <div><textarea name="v" cols="50" rows="5">@if(isset($data->AbcdPlu[0]['Vivod'])) {{$data->AbcdPlu[0]['Vivod']}} @endif </textarea><br/>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/><br/>
                </div></li>
                
                   
                
              
 </ul>
   
<input type="hidden" name="id" value="{{  $data->id }}" />
             <input type="submit"  value="Submit" >
              
                
                
                
            </form>
            
 
    </body>
</html>