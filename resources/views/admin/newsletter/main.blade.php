@extends('layouts.back')

@section('content')
<div class="row" id="table-head">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Liste de personnes inscrite à la newsletter</h4>
            </div>
            <div class="card-content container">
              
                <!-- table head dark -->
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nbr.</th>
                                <th>EMAIL</th>
                                <th>insctiption fait le </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($news as $item)
                                <tr>
                                    <td class="text-bold-500">{{ $item->id }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->created_at->format('d M Y') }} à {{ $item->created_at->format('H:i') }}</td>
                                </tr>
                                
                            @empty
                                <tr>
                                    <td>pas d'inscription, pour l'instant..</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection