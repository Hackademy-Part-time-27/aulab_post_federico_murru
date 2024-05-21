<div class="card">
    <img src="{{ Storage::url($image) }}" alt="{{ $title }}" class="card-img-top" style="height: 200px; width: 100%; object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text text-truncate">{{ $subtitle }}</p>
        <a href="{{ $urlCategory }}" 
        class="small text-muted text-center">{{ $category }}</p> </a>

        @if ($tags)
           
        <p class="small fst-italic text-capitalize text-center">
            @foreach ($tags as $tag)
            #{{$tag->name}}            
            @endforeach
        </p>
        @endif
    </div>
    <div class="card-footer text-muted text-center">
        <div class="mb-2">Written by {{ $user }} on {{ $data }}</div>
        <a href="{{ $url }}" class="btn btn-info text-white">Read more</a>
    </div>
</div>
