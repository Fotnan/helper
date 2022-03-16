@extends('layouts.layouts');

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="mb-4 d-flex justify-content-between">

                                        <div>
                                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="import_file" id="import_file" class="@error('import_file') is-invalid @enderror">
                                               <button class="btn btn-outline-secondary">Import</button>
                                                @error('import_file')
                                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror
                                            </form>
                                        </div>
                                    </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection
