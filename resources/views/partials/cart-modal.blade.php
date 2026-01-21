<div class="modal fade" id="cartModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('cart.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah ke Keranjang</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="product_name" value="{{ $product }}">
                    <input type="hidden" name="thickness" id="thickness">
                    <input type="hidden" name="width" id="width">
                    <input type="hidden" name="length" id="length">

                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input type="number" name="qty" class="form-control" min="1" value="1">
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('cartModal').addEventListener('show.bs.modal', function(event) {
        let btn = event.relatedTarget
        document.getElementById('thickness').value = btn.dataset.thickness
        document.getElementById('width').value = btn.dataset.width
        document.getElementById('length').value = btn.dataset.length
    })
</script>
