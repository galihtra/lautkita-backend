@extends('layouts.app')

@section('title', 'Category Article')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/prismjs/themes/prism.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Category Article</h1>
            </div>

            @if (session()->has('success'))
                <div class="alert alert-success col-lg-6" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="section-body">
                <div class="table-responsive">
                    <!-- Button trigger modal -->
                    <div class="buttons">
                        <button class="btn btn-primary" id="modal-5">Create New Category</button>
                    </div>

                    <form class="modal-part" id="modal-categoryPost-part">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="mb-2" for="name">Nama Category</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2" for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" required>
                        </div>
                    </form>

                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <form action="{{ route('categories-post.destroy', $category->id) }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger border-0 btn-sm"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/prismjs/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script>
        $("#modal-5").fireModal({
            title: "New Category Post",
            body: $("#modal-categoryPost-part"),
            footerClass: "bg-whitesmoke",
            autoFocus: false,
            onFormSubmit: function(modal, e, form) {
                // Form Data
                let form_data = $(e.target).serialize();
                console.log("Form Data:", form_data);
    
                // Mendapatkan nilai nama kategori
                let categoryName = $("#name").val();
    
                // Generate slug berdasarkan nama kategori
                let slug = categoryName.toLowerCase().replace(/\s+/g, '-');
    
                // Mengisi nilai slug ke input
                $("#slug").val(slug);
    
                // DO AJAX HERE
                $.ajax({
                    type: "POST",
                    url: "{{ route('categories-post.store') }}",
                    data: form_data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log("AJAX Success:", response);
                        form.stopProgress();
                        modal.modal('hide');
                        // Refresh halaman atau tindakan lain yang diperlukan
                        window.location.reload();
                    },
                    error: function(error) {
                        console.error("AJAX Error:", error);
                        form.stopProgress();
                        // Tampilkan pesan kesalahan atau tindakan lain yang diperlukan
                    }
                });
    
                e.preventDefault();
            },
            shown: function(modal, form) {
                console.log("Modal Shown:", form);
            },
            buttons: [{
                text: "Save",
                submit: true,
                class: "btn btn-primary btn-shadow",
                handler: function(modal) {},
            }],
        });
    
        // Event listener untuk memperbarui slug saat nilai nama berubah
        $("#name").on("input", function() {
            let categoryName = $(this).val();
            let slug = categoryName.toLowerCase().replace(/\s+/g, '-');
            $("#slug").val(slug);
        });
    </script>
@endpush
