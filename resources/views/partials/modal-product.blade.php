{{-- MODAL Création  --}}
<div class="modal fade text-left" id="creation" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Création d'un nouveau produit</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                {{-- FORM de création --}}
                <form class="form form-vertical" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name Product ?" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price">Price </label>
                                    <input type="Number" id="price" class="form-control" name="price" placeholder="Price ?" value="{{ old('price') }}">
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="popular">Popular</label>
                                    <select name="popular" class="form-select" id="popular">
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>                                
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="filter">Filter</label>
                                    <select name="filter" class="form-select" id="filter">
                                        <option value="home">home</option>
                                        <option value="profile">profile</option>
                                        <option value="contact">contact</option>
                                    </select>                                
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
                <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger">Definitive ?</button>
                </form>
            </div>
      
        </div>
    </div>
</div>


{{-- MODAL EDIT  --}}
<div class="modal fade text-left" id="edit-{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Edition de l'article numéro {{ $item->id }} | {{ $item->name }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                {{-- FORM de création --}}
                <form class="form form-vertical" action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name Product ?" value="{{ $item->name }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price">Price </label>
                                    <input type="Number" id="price" class="form-control" name="price" placeholder="Price ?" value="{{ $item->price }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description" placeholder="lorem lorem ?">{{ $item->description }}</textarea>                                
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="popular">Popular</label>
                                    <select name="popular" class="form-select" id="popular">
                                        <option value="1" {{ $item->item == true ? "selected" : "" }}>True</option>
                                        <option value="0" {{ $item->item == false ? "selected" : "" }}>False</option>
                                    </select>                                
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="filter">Filter</label>
                                    <select name="filter" class="form-select" id="filter">
                                        <option value="home" {{ $item->filter == 'home' ? "selected" : "" }}>home</option>
                                        <option value="profile" {{ $item->filter == 'profile' ? "selected" : "" }}>profile</option>
                                        <option value="contact" {{ $item->filter == 'contact' ? "selected" : "" }}>contact</option>
                                    </select>                                
                                </div>
                            </div>
                            <div class="col-12 d-flex py-2">
                                <img height="120" src="{{ asset('img/products/' . $item->img) }}" alt="img">
                                <div class="form-group w-100 mx-1">
                                    <label for="img">Image </label>
                                    <input name="img" class="form-control " type="file" id="img">                                
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


{{-- MODAL SHOW --}}
<div class="modal fade text-left" id="show-{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="row py-3 px-2">
                <div class="col-6">
                    <img class="w-100" src="{{ asset('img/products/'. $item->img) }}" alt="img">
                </div>
                <div class="col-6">
                    <h3 class="text-center">{{ $item->name }}</h3>
                    <p> price : ${{ $item->price }}</p>
                    <p>Popualar :{{ $item->popular == true ?  "True" : "False"  }} || Filter : {{ $item->filter }}</p>
                    <p>{{ $item->description }}</p>
                </div>

            </div>
        </div>
    </div>
</div>