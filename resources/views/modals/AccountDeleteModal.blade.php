
            <!-- Modal -->
            <div class="modal fade" id="accountDelete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hesap Silme</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Hesabınız Kalıcı Olarak Silinecektir Onaylıyormusunuz ?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                             <form action="{{route('userDelete')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id">
                                <button class="btn btn-danger">Onayla</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- basic modal end -->
