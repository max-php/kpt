<form method="POST" action="{{ route('create.form') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
            <label>Событие</label>
               
                  <div><textarea name="a" cols="50" rows="5" >{{ old('a') }} </textarea><br/>
                
                @error('a')<strong>{{ $message }}</strong>@enderror<br/><br/>
                </div>
                <label>Автоматическая мысль</label>
               
                  <div><textarea name="b" cols="50" rows="5">{{ old('b') }} </textarea><br/>
                
                @error('b')<strong>{{ $message }}</strong>@enderror<br/><br/>
                </div>
                 <label>Ощущение в теле</label>
               
                  <div><textarea name="c" cols="50" rows="5">{{ old('c') }} </textarea><br/>
                
                @error('c')<strong>{{ $message }}</strong>@enderror
                
                <br/>
                @foreach (App\Models\Emotions::All() as $item)
                
                <input type="checkbox"  name="emotion[]" value="{{ $item->id }}" />{{$item->name }}<br/>
 	
	@endforeach 
               
               <br/>
                 <label>Действие</label>
               
                  <div><textarea name="d" cols="50" rows="5">{{ old('d') }} </textarea><br/>
                
                @error('d')<strong>{{ $message }}</strong>@enderror<br/>
                </div>
                
                
                <input type="submit"  value="Submit" >
                
            </form>
            
              @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif 
 


