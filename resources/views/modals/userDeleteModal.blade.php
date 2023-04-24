

            <!-- Modal -->
            <div class="modal fade" style="margin-top:200px" id="userDelete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Üye sil</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p class="">
                                Seçtiğiniz Üye Silinecektir Bunu Onaylıyor musunuz? 
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
                            <form action="{{route('usersDelete')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id">
                                <button method="POST" class="btn btn-danger">Sil</button>
                             </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- basic modal end -->
