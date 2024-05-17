<div class="card">
    <img src="{{ Storage::url($image) }}" alt="{{ $title }}" class="card-img-top" style="height: 200px; width: 100%; object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text text-truncate">{{ $subtitle }}</p>
        <a href="{{ $urlCategory }}" 
        class="small text-muted text-center">{{ $category }}</p>
    </div>
    <div class="card-footer text-muted text-center">
        <div class="mb-2">Written by {{ $user }} on {{ $date }}</div>
        <a href="{{ $url }}" class="btn btn-info text-white">Read more</a>
    </div>
</div>
