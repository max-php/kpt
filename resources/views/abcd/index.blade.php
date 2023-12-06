
<html>
    <body>
        <h1>ABCD</h1>
        <a href="/">Назад</a><br/><br/>
        @foreach ($data as $user)
   
<ul>

<li>{{$user->created_at}}</li>
    <li>{{ $user->A }}</li>
     <li>{{ $user->B }}</li>
   <li> 
   	
   	 @foreach(App\Models\Emotions::GetName($user->emotions) as $info )
    {{$info->name}}
  @endforeach

 
     </li> 
      
       <li><a href="{{ route('Create.form.abcdplus',['id'=>$user->id])}}">Цель,Адаптивный ответ,вывод</a></li>
       <li><a href="{{ route('disput',['id'=>$user->id])}}">Провести Диспут</a></li>
 </ul>
    <br/><br/>
@endforeach
 
    </body>
</html>