@extends('template')
@section('content')
    <main class="d-flex flex-wrap">
        <section id="add" class="container w-100 border border-1 border-dark my-5 py-5">
            <h2 class="mb-5">Add new news : </h2>
            <form enctype="multipart/form-data" action="/a/b/c/d/e/f/gosave" method="POST"
                class="row g-0 flex-wrap justify-content-around">
                <div class="mb-3" style="width: 47.5%">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old("title","") }}" autofocus name="title" type="text" class="form-control" id="title">
                    @error('title')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3" style="width: 47.5%">
                    <label for="photo" class="form-label">Thumbnail</label>
                    <input name="thumbnail" class="form-control" type="file" id="photo"
                        accept=".png,.jpeg,.jpg,.svg">
                    @error('thumbnail')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12"></div>
                <div class="mb-3" style="width: 47.5%">
                    <label for="desc" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="desc" rows="4">{{ old("description","") }}</textarea>
                    @error('description')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3" style="width: 47.5%">
                    <label for="body" class="form-label">Body</label>
                    <textarea name="body" class="form-control" id="body" rows="4">{{ old("body","") }}</textarea>
                    @error('body')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12"></div>
                <button type="submit" class="btn btn-primary col-2">Add</button>
                @csrf
            </form>
        </section>
        <section id="show" class="container w-100 border border-1 border-dark my-5 py-5">
            <h2 class="mb-5">News List : </h2>
            <div class="list-group news-list">
                @if (count($news) == 0)
                    <p>No news right now</p>
                @else
                    @foreach ($news as $new)
                        <button href="#" data-bs-toggle="modal" data-bs-target="#modal{{ $loop->iteration }}"
                            class="list-group-item d-flex list-group-item-action px-5">
                            <div class="me-auto">{{ $loop->iteration }}. {!! $new['title'] !!}</div>
                            <div>{{ $new['updated_at']->format('d-m-Y') }}</div>
                        </button>
                        <div class="modal fade" id="modal{{ $loop->iteration }}" tabindex="-1"
                            aria-labelledby="modal{{ $loop->iteration }}Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modal{{ $loop->iteration }}Label">
                                            {!! $new['title'] !!}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5">
                                        <img src="{{ url("/") . $new['image_path'] }}" alt="" class="img-fluid mb-5">
                                        <h1>Desc:</h1>
                                        <p>{!! $new['description'] !!}</p>
                                        <h1>Body:</h1>
                                        <p>{!! $new['body'] !!}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
    </main>
@endsection
@section('headers')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
