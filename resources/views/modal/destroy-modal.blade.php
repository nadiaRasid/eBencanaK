<div class="modal fade" id="destroy-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Pengesahan</h4>
        </div>
        <div class="modal-body">
            <strong>
                <!-- Are you sure you want to delete this? -->
                Adakah anda pasti untuk padam?
            </strong>
        </div>
        <div class="modal-footer">
            <form id="destroy-form" class="delete-form" action="" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-default btn-outline" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger btn-outline ">Padam</button>
            </form>
        </div>
        </div>
    </div>
</div>
