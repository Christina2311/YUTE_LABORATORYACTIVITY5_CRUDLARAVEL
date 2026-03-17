<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Post Details</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    </head>

    <body>
       <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    
                    <div class="mb-4">
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary px-4 shadow-sm" style="border-radius: 8px;">
                            <i class="bi bi-arrow-left me-2"></i>Back
                        </a>
                    </div>

                    <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
                        <div style="height: 10px; background: linear-gradient(90deg, #4e73df, #224abe);"></div>
                        
                        <div class="card-body p-5">
                            <h1 class="display-5 fw-bold text-dark mb-4">{{ $post->title }}</h1>
                            
                            <hr class="my-4" style="opacity: 0.1;">

                            <div class="post-content" style="font-size: 1.1rem; line-height: 1.8; color: #444;">
                                <p>{{ $post->body }}</p>
                            </div>

                            <div class="mt-5 pt-4 border-top">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar3 me-2"></i> Posted on: {{ $post->created_at->format('M d, Y') }}
                                    </small>
                                    
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm px-3 fw-bold" style="border-radius: 6px;">
                                        <i class="bi bi-pencil me-1"></i> Edit This Post
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-center mt-4 text-muted small">
                        Viewing Post Record #{{ $post->id }}
                    </p>

                </div>
            </div>
        </div>
    </body>
</html>