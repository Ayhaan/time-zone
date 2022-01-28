@include('layouts.flash')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h4 class="card-title">Corbeille Blog</h4>
        </div>
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
                            <th>Creation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($blogs as $item)
                            <tr>
                                <td class="text-bold-700">{{ $item->id }}.</td>
                                <td>{{ $item->title }}</td>
                                <td class="text-bold-500">{{ $item->created_at->format('d-M-Y') }}</td>
                                <td class="text-bold-500 d-flex">
                                    <a class="btn btn-primary" href="{{ route('restore', $item->id) }}">restore</a>
                                    <form action="{{ route('forceDelete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                
                                    </form>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show-{{ $item->id }}">
                                        Show
                                    </button>
                                    
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

