@include('layouts.flash')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Confuguration Products</h4>
            <a class="btn btn-success" href="{{ route('shop') }}">Go page Shop</a>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#creation">
            Create
        </button>
    </div>
    <div class="card-content">
        <div class="card-body">
            <!-- Table with outer spacing -->
            <div class="table-responsive">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th>Nbr.</th>
                            <th>Title</th>
                            <th>Prix</th>
                            <th>Filter</th>
                            <th>Popuaire ?</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $item)
                            <tr>
                                <td class="text-bold-700">{{ $item->id }}.</td>
                                <td>{{ $item->name }}</td>
                                <td class="text-bold-500">{{ $item->price }}</td>
                                <td class="text-bold-500">{{ $item->filter }}</td>
                                    {{-- Condition ternaire pour afficage plus user friendly --}}
                                <td class="text-bold-500">
                                    {{ $item->popular == 1 ? "True" : "False" }}
                                </td>
                                <td class="text-bold-500 d-flex justify-content-around">
                                    {{-- LOGIQUE DES CRUDS --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $item->id }}">
                                        Delete
                                    </button>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show-{{ $item->id }}">
                                        Show
                                    </button>
                                </td>

                            </tr>
                            @include('partials.modal-product')
                        @empty
                            <p>vide</p>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

