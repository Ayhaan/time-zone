{{-- MODAL Création  --}}
<div class="modal fade text-left" id="creation" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Création d'un nouveau article/blog</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-vertical" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="title ?" value="{{ old('title') }}">
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="img">Image </label>
                                    <input name="img" class="form-control" type="file" id="img">                                
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description" placeholder="lorem lorem ?">{{ old('description') }}</textarea>                                
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- MODAL Création  --}}
<div class="modal fade text-left" id="edit-{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Edition de l'article {{ $item->id }} | {{ $item->title }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form form-vertical" action="{{ route('blog.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" id="title" class="form-control" name="title" placeholder="title ?" value="{{ $item->title }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description" placeholder="lorem lorem ?">{{ $item->description }}</textarea>                                
                                </div>
                            </div>
                            <div class="col-12 d-flex py-2">
                                <img height="120" src="{{ asset('img/blog/' . $item->img) }}" alt="img">
                                <div class="form-group w-100 mx-1">
                                    <label for="img">Image </label>
                                    <input name="img" class="form-control" type="file" id="img">                                
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- MODAL CONFIRMATION DELETE --}}
<div class="modal fade text-left" id="delete-{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
       
            <div class="modal-body d-flex justify-content-center">
                <form action="{{ route('blog.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger">Definitive ?</button>
                </form>
            </div>
      
        </div>
    </div>
</div>


{{-- MODAL SHOW --}}
<div class="modal fade text-left" id="show-{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="row py-3 px-2">
                <div class="col-6">
                    <img class="w-100" src="{{ asset('img/blog/'. $item->img) }}" alt="img">
                </div>
                <div class="col-6">
                    <h3 class="text-center">{{ $item->title }}</h3>
                    <p>{{ $item->description }}</p>
                </div>

            </div>
        </div>
    </div>
</div>