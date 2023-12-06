
<html>
 
    <body>
    <a href="{{ route('view.list.abcd') }}">Назад</a><br/><br/>
  
        <h1>Disput</h1>
        
        
 <ul>
 	<li>Какие есть доводы, доказывающие и опровергающие эту мысль?
 

 	
 	<div id="mydiv">
 	
 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
    
        <textarea name="q" cols="80" rows="8">@if(isset($disput[0]['q'])) {{$disput[0]['q']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div>
 	</li>
 	
 	
 	
 	<li>Имеет ли эта мысль под собой основания?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="w" cols="80" rows="8">@if(isset($disput[0]['w'])) {{$disput[0]['w']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div>
 	</li>
 	
 	
 	
 	<li>Сколько раз я уже понапрасну переживал в прошлом?
 	<div id="mydiv">
 		
 	
 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
  <textarea name="e" cols="80" rows="8">@if(isset($disput[0]['e'])) {{$disput[0]['e']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div>
 	
 	</li>
 	
 	
 	<li>О чем я раньше волновался из того, что теперь меня не беспокоит?
 	<div id="mydiv">
 		
 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
<textarea name="r" cols="80" rows="8"> @if(isset($disput[0]['r'])) {{$disput[0]['r']}} @endif</textarea>
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
              <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div>
 	</li>
 	
 	
 	
 	<li>Как я раньше справлялся с тем, чего не мог предвидеть
 	<div id="mydiv">
 		
 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
<textarea name="t" cols="80" rows="8">@if(isset($disput[0]['t'])) {{$disput[0]['t']}} @endif </textarea>
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
              <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div>
 	
 	</li>
 	
 	
 	<li>Готов ли я поставить деньги на то, что мои мысли реализуются?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="y" cols="80" rows="8">@if(isset($disput[0]['y'])) {{$disput[0]['y']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Какова вероятность событий в цепочке негативных прогнозов?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="u" cols="80" rows="8">@if(isset($disput[0]['u'])) {{$disput[0]['u']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Каков наихудший, наилучший и наиболее вероятный исход событий?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="i" cols="80" rows="8">@if(isset($disput[0]['i'])) {{$disput[0]['i']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Как я могу справиться с ситуацией, даже если произойдет худшее?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="o" cols="80" rows="8">@if(isset($disput[0]['o'])) {{$disput[0]['o']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Что я могу предпринять по этому поводу уже сегодня?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="p" cols="80" rows="8">@if(isset($disput[0]['p'])) {{$disput[0]['p']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Каковы факты в пользу малой вероятности реализации худшего?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="a" cols="80" rows="8">@if(isset($disput[0]['a'])) {{$disput[0]['a']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Каковы возможные альтернативные варианты развития событий?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="s" cols="80" rows="8">@if(isset($disput[0]['s'])) {{$disput[0]['s']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Что бы я посоветовал другу с такой же проблемой и мыслями?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="d" cols="80" rows="8">@if(isset($disput[0]['d'])) {{$disput[0]['d']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Как бы в этой ситуации поступил мой авторитетный знакомый?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="f" cols="80" rows="8">@if(isset($disput[0]['r'])) {{$disput[0]['r']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Действительно ли подавленность может мне помочь?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="g" cols="80" rows="8">@if(isset($disput[0]['g'])) {{$disput[0]['g']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Каковы польза и вред этих мыслей?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="h" cols="80" rows="8">@if(isset($disput[0]['h'])) {{$disput[0]['h']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Почему это не является проблемой?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="j" cols="80" rows="8">@if(isset($disput[0]['j'])) {{$disput[0]['j']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Какими могут быть мои мысли, чтобы я чувствовал и вел себя иначе?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="k" cols="80" rows="8">@if(isset($disput[0]['k'])) {{$disput[0]['k']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Как я в прошлом или другие справлялись с аналогичной ситуацией?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="l" cols="80" rows="8">@if(isset($disput[0]['l'])) {{$disput[0]['l']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Что я буду думать об этой ситуации через неделю, месяц, год?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="z" cols="80" rows="8">@if(isset($disput[0]['z'])) {{$disput[0]['z']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Настолько ли это ужасно и невыносимо, как мне представляется?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="x" cols="80" rows="8">@if(isset($disput[0]['x'])) {{$disput[0]['x']}} @endif </textarea>
                
                @error('x')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li> Уверен ли я в том, что в жизни не бывает ситуаций тяжелее?
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="c" cols="80" rows="8">@if(isset($disput[0]['c'])) {{$disput[0]['c']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Убеди суд присяжных. Расмотри с точки зрения прокурора и адвоката и вынеси вердикт судьи на освновани этого.
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="v" cols="80" rows="8">@if(isset($disput[0]['v'])) {{$disput[0]['v']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>За (за твое ГУ)
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="b" cols="80" rows="8">@if(isset($disput[0]['b'])) {{$disput[0]['b']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>против
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="n" cols="80" rows="8">@if(isset($disput[0]['n'])) {{$disput[0]['n']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 	<li>Против за (алтерантива)
 	<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="m" cols="80" rows="8">@if(isset($disput[0]['m'])) {{$disput[0]['m']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
 <li>	Вопрос 1: “как Вы представляете себе данную ситуацию?
 <div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="qq" cols="80" rows="8">@if(isset($disput[0]['qq'])) {{$disput[0]['qq']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Вопрос 2: “какие у Вас доказательства, что Ваша мысль верна?
<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="ww" cols="80" rows="8">@if(isset($disput[0]['ww'])) {{$disput[0]['ww']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Вопрос 3: “какие есть доказательства, что эта мысль не верна?”<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="ee" cols="80" rows="8">@if(isset($disput[0]['ee'])) {{$disput[0]['ee']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Вопрос 4: “какое можно дать объяснение случившемуся?”<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="rr" cols="80" rows="8">@if(isset($disput[0]['rr'])) {{$disput[0]['rr']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li> 
<li>Вопрос 5: “что самое худшее может произойти?”
<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="tt" cols="80" rows="8">@if(isset($disput[0]['tt'])) {{$disput[0]['tt']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Вопрос 6? “как с этим справиться?”<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="yy" cols="80" rows="8">@if(isset($disput[0]['yy'])) {{$disput[0]['yy']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Вопрос 7: “что самое лучшее может произойти?”<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="uu" cols="80" rows="8">@if(isset($disput[0]['uu'])) {{$disput[0]['uu']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Вопрос 8: “какой вариант самый реалистичный?”<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="ii" cols="80" rows="8">@if(isset($disput[0]['ii'])) {{$disput[0]['ii']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li> 
<li>Вопрос 9: “как будут развиваться события, если постоянно повторять себе слова<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="oo" cols="80" rows="8">@if(isset($disput[0]['oo'])) {{$disput[0]['oo']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div> </li>
<li>Вопрос 11: “если бы друг попал в аналогичную ситуацию, и рассуждал бы так же- что можно ему посоветовать?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="pp" cols="80" rows="8">@if(isset($disput[0]['pp'])) {{$disput[0]['pp']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Вопрос 12: “что стоит сделать сейчас?”.<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="aa" cols="80" rows="8">@if(isset($disput[0]['aa'])) {{$disput[0]['aa']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div> </li>
<li>Давайте подумаем, какие доказательства ваших ам ?
<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="ss" cols="80" rows="8">@if(isset($disput[0]['ss'])) {{$disput[0]['ss']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Мысль базируется на фактах или чувствах?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="dd" cols="80" rows="8">@if(isset($disput[0]['dd'])) {{$disput[0]['dd']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Не черно-белая ли это мысль, имеющая отношение к крайностям, в то время как реальность более разносторонняя?
<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="ff" cols="80" rows="8">@if(isset($disput[0]['ff'])) {{$disput[0]['ff']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Могут ли другие люди считать иначе? Почему?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="gg" cols="80" rows="8">@if(isset($disput[0]['gg'])) {{$disput[0]['gg']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Мы рассматриваем все факты и доказательства, или только те, которые поддерживают мысль?
<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="hh" cols="80" rows="8">@if(isset($disput[0]['hh'])) {{$disput[0]['hh']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Может ли мысль быть просто привычной, или её действительно поддерживают факты?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="jj" cols="80" rows="8">@if(isset($disput[0]['jj'])) {{$disput[0]['jj']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li> 
<li>Такое раньше уже случалось? Чем все закончилось?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="kk" cols="80" rows="8">@if(isset($disput[0]['kk'])) {{$disput[0]['kk']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Что мы знаем сейчас, чего не знали тогда?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="ll" cols="80" rows="8">@if(isset($disput[0]['ll'])) {{$disput[0]['ll']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Какие есть доказательства того, что эта мысль верна?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="zz" cols="80" rows="8">@if(isset($disput[0]['zz'])) {{$disput[0]['zz']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li> 
<li>Какие есть доказательства того, что она неверна?
<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="xx" cols="80" rows="8">@if(isset($disput[0]['xx'])) {{$disput[0]['xx']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Какое альтернативное объяснение можно дать случившемуся?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="cc" cols="80" rows="8">@if(isset($disput[0]['cc'])) {{$disput[0]['cc']}} @endif</textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Что произойдет, если я изменю образ мыслей? <div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="vv" cols="80" rows="8">@if(isset($disput[0]['vv'])) {{$disput[0]['vv']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div></li>
<li>Итог:В конце сократовского диалога берётся исходное утверждение и ставится под сомнение: действительно ли это так и никак иначе, или всё-таки бывает и по-другому?Действительно ли исходное утверждение — это 100%-ная истина без исключений или как?<div id="mydiv">

 	<form method="POST" action="{{ route('Store.disput') }}" 
            enctype="multipart/form-data" novalidate>
          
            @csrf
 
        <textarea name="bb" cols="80" rows="8">@if(isset($disput[0]['bb'])) {{$disput[0]['bb']}} @endif </textarea>
                
                @error('v')<strong>{{ $message }}</strong>@enderror<br/>
               
                <input type="hidden" name="id" value={{$id}} />
             <input type="submit"  value="Submit" >
              
</form></div> </li>


 	
 	
 </ul>
    
 
    </body>
</html>