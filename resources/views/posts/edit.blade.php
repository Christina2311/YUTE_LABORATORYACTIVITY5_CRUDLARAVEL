<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-3">
                        <a href="{{ route('posts.index') }}" class="text-decoration-none text-muted">
                            <i class="bi bi-arrow-left"></i> Cancel and go back
                        </a>
                    </div>

                    <div class="card border-0 shadow-sm" style="border-radius: 15px;">
                        <div class="card-header bg-warning text-dark py-3" style="border-radius: 15px 15px 0 0;">
                            <h4 class="mb-0 fw-bold">
                                <i class="bi bi-pencil-square me-2"></i> Edit Post
                            </h4>
                        </div>
                    
                    <div class="card-body p-4">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">Title:</label>
                            <input type="text" name="title" value="{{ $post->title }}" 
                                   class="form-control" required
                                   style="border-radius: 8px; padding: 12px; border: 1px solid #dee2e6;">
                        </div>

                       <div class="mb-4">
                            <label class="form-label fw-bold">Body:</label>
                            <textarea name="body" class="form-control" rows="6" required
                                      style="border-radius: 8px; padding: 12px; border: 1px solid #dee2e6;">{{ $post->body }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-warning text-dark fw-bold">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>