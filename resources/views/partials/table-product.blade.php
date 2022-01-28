<div class="card">
    <div class="card-header">
        <h4 class="card-title">Confuguration Products</h4>
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
                            <th>Popuaire ?</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $item)
                            <tr>
                                <td class="text-bold-700">{{ $item->id }}.</td>
                                <td>{{ $item->name }}</td>
                                <td class="text-bold-500">{{ $item->price }}</td>
                                <td class="text-bold-500">{{ $item->popular }}</td>
                                <td class="text-bold-500 d-flex justify-content-around">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $item->id }}">
                                            Delete
                                        </button>
                                    </form>
                                    <a class="btn btn-success" href="{{ route('product.show', $item->id) }}">Show</a>
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

