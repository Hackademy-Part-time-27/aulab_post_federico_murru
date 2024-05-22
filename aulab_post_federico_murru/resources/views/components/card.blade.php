<div class="card" >
    <img src="{{ Storage::url($image) }}" alt="{{ $title }}" class="card-img-top" style="height: 300px; width: 100%; object-fit: cover;">
    <div class="card-body" style="height: 200px;">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text text-truncate">{{ $subtitle }}</p>
        @if ($category)
        <a href="{{$urlCategory}}" class="text-muted d-flex 
        justify-content-center align-items-center my-2">{{$category}}</a>
        @else
      <p class="small fst-italic text-capitalize text-center">
        Uncategorised
      </p> 
      @endif

      <span class="text-muted small fst-italic">- Read time {{$article->readDuration()}} min</span>
        @if ($tags)
           
        <p class="small fst-italic text-capitalize">
            @foreach ($tags as $tag)
            #{{$tag->name}}            
            @endforeach
        </p>
        @endif
    </div>
    <div class="card-footer text-muted text-center">
        <div class="mb-2">Written by {{ $user }}</div>
        <a href="{{ $url }}" class="btn btn-info text-white">Read more</a>
    </div>
</div>
