<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.head')

@section('main-content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Explore Our Menu</h2>
        <span class="badge bg-secondary px-3 py-2">{{ $foods->count() }} Items Found</span>
    </div>

    <div class="row g-4">
        @forelse($foods as $food)
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <img src="https://via.placeholder.com/300x200?text={{ $food->name }}" class="card-img-top rounded-top" alt="{{ $food->name }}">
                    
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title mb-0 fw-semibold">{{ $food->name }}</h5>
                            <span class="badge bg-success text-white">${{ number_format($food->price, 2) }}</span>
                        </div>
                        
                        <p class="card-text text-muted small flex-grow-1">
                            Code: <span class="text-dark fw-medium">{{ $food->code }}</span>
                        </p>

                        <div class="mt-auto d-flex align-items-center justify-content-between">
                            <div class="text-warning small">
                                <i class="bi bi-heart-fill"></i> {{ number_format($food->like_count) }} likes
                            </div>
                            <a href="{{ route('foods.show', $food->id) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No food items found. Time to seed the database!</p>
            </div>
        @endforelse
    </div>
</div>

<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.12) !important;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
    .card-img-top {
        height: 180px;
        object-fit: cover;
    }
</style>
@endsection
</body>
</html>