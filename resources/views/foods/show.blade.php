@extends('layouts.head')

@section('main-content')
<div class="container py-5">
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-light shadow-sm">
            <i class="bi bi-arrow-left"></i> Back to Menu
        </a>
    </div>

    <div class="row g-5">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 20px;">
                <img src="https://via.placeholder.com/600x500?text={{ $food->name }}" 
                     class="img-fluid w-100" 
                     alt="{{ $food->name }}"
                     style="object-fit: cover; height: 500px;">
            </div>
        </div>

        <div class="col-md-6">
            <div class="ps-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-uppercase small tracking-wider">
                            {{ $food->category->name ?? 'General' }}
                        </li>
                    </ol>
                </nav>

                <h1 class="display-4 fw-bold mb-3">{{ $food->name }}</h1>
                
                <div class="d-flex align-items-center mb-4">
                    <h2 class="text-success fw-bold mb-0 me-3">${{ number_format($food->price, 2) }}</h2>
                    <span class="badge bg-light text-dark border p-2">Code: {{ $food->code }}</span>
                </div>

                <hr class="my-4">

                <div class="mb-4">
                    <h5 class="fw-bold">Details</h5>
                    <p class="text-muted leading-relaxed">
                        This delicious <strong>{{ $food->name }}</strong> is prepared with the finest ingredients. 
                        Currently served at <strong>{{ $food->restaurant->name ?? 'Our Main Branch' }}</strong>.
                    </p>
                </div>

                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                        <span class="text-muted">Popularity</span>
                        <span class="fw-bold text-warning">
                            <i class="bi bi-heart-fill"></i> {{ number_format($food->like_count) }} Likes
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                        <span class="text-muted">Available at</span>
                        <span class="fw-bold">{{ $food->restaurant->name ?? 'N/A' }}</span>
                    </li>
                </ul>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg rounded-pill shadow">
                        Add to Order
                    </button>
                    <button class="btn btn-outline-secondary btn-lg rounded-pill">
                        Save to Favorites
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection