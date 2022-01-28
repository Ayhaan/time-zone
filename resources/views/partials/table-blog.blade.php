<div class="card">
    <div class="card-header">
        <h4 class="card-title">Confuguration Blog</h4>
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
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($blogs as $item)
                            <tr>
                                <td class="text-bold-700">{{ $item->id }}.</td>
                                <td>{{ $item->title }}</td>
                                <td class="text-bold-500">{{ $item->desciption }}</td>
                                <td class="text-bold-500 d-flex justify-content-around">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $item->id }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('blog.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $item->id }}">
                                            Delete
                                        </button>
                                    </form>
                                    <a class="btn btn-success" href="{{ route('blog.show', $item->id) }}">Show</a>
                                </td>

                            </tr>
                            @include('partials.modal-blog')
                        @empty
                            <p>vide</p>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

