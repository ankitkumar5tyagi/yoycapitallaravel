
<div class="container">
    <h2>Create or Update Service</h2>
    <form action="{{route('serviceadmin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf  <!-- CSRF Token for security -->

        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Image Field -->
        <div class="form-group">
            <label for="image_url">Image:</label>
            <input type="file" id="image_url" name="image_url" class="form-control" accept="image/*">
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Documents List (Text Field for Comma-Separated Names) -->
        <div class="form-group">
            <label for="documents">Documents List (comma-separated names):</label>
            <input type="text" id="document_list" name="document_list" class="form-control" value="{{ old('documents') }}" placeholder="doc1, doc2, doc3">
            @error('documents')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Note Field -->
        <div class="form-group">
            <label for="note">Note:</label>
            <textarea id="note" name="note" class="form-control" rows="4">{{ old('note') }}</textarea>
            @error('note')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

