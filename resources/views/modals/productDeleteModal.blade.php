
            <!-- Modal -->
            <div class="modal fade" id="productDelete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Mesaj Silme</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Seçtiğiniz Mesaj Sistemden Silinecektir Onaylıyormusunuz?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                             <form action="{{route('productDelete')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id">
                                <button class="btn btn-danger">Sil</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- basic modal end -->
