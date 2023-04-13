
@extends ('layout.frontend', ['title' => $project->title])

@section ('content')
   
<section class="w3-padding">

     <h2 class="w3-text-blue">{{$project->title}}</h2>

    @if ($project->image)
         <div class="w3-margin-top">
            <img src="{{asset('storage/'.$project->image)}}" width="400">
        </div>
     @endif

    <p><{{$project->content}}</p>
 
    @if ($project->live)
        Live Project: <a href="{{$project->live}}" target="_blank">{{$project->live}}</a>
     @endif

    <p>

    <p><{{$project->content}}</p>
 
 @if ($project->source)
     Source Code: <a href="{{$project->source}}" target="_blank">{{$project->source}}</a>
  @endif

 <p>
        Posted: {{$project->created_at->format('M j, 
Y')}}
        <br>
            Skill: {{$project->skill->title}}
        </p>
    
    
           <a href="/console/projects/list">Back to Home</a>
        
           
       
       </section>

@endsection
    

