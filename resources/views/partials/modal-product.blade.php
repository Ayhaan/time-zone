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
                I love tart cookie cupcake. I love chupa chups biscuit. I
                love
                marshmallow apple pie wafer
                liquorice. Marshmallow cotton candy chocolate. Apple pie
                muffin tart.
                Marshmallow halvah pie
                marzipan lemon drops jujubes. Macaroon sugar plum cake icing
                toffee.
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