<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Post</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    </head>
    <body>
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-3">
                        <a href="{{ route('posts.index') }}" class="text-decoration-none text-muted">
                            <i class="bi bi-arrow-left"></i> Back to Blog Posts
                        </a>
                    </div>

                    <div class="card border-0 shadow-sm" style="border-radius: 15px;">
                        <div class="card-header bg-primary text-white py-3" style="border-radius: 15px 15px 0 0;">
                            <h4 class="mb-0 fw-bold">
                                <i class="bi bi-pencil-square me-2"></i> Create New Post
                            </h4>
                        </div>
                        
                        <div class="card-body p-4">
                            <form action="{{ route('posts.store') }}" method="POST">
                                @csrf
                                
                                <div class="mb-4">
                                    <label class="form-label fw-bold text-dark">Post Title</label>
                                    <input type="text" name="title" class="form-control" 
                                        placeholder="Enter a catchy title..." required
                                        style="border-radius: 8px; padding: 12px; border: 1px solid #dee2e6;">
                                    <div class="form-text">Give your post a unique and descriptive title.</div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold text-dark">Content Body</label>
                                    <textarea name="body" class="form-control" rows="6" 
                                            placeholder="Write your thoughts here..." required
                                            style="border-radius: 8px; padding: 12px; border: 1px solid #dee2e6;"></textarea>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="reset" class="btn btn-light px-4 py-2" style="border-radius: 8px;">
                                        Clear Form
                                    </button>
                                    <button type="submit" class="btn btn-primary px-5 py-2 fw-bold shadow-sm" 
                                            style="border-radius: 8px; transition: 0.3s;">
                                        <i class="bi bi-save me-2"></i> Save Post
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <p class="text-center mt-4 text-muted small">
                        © 2026 CPAMA Management System
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
