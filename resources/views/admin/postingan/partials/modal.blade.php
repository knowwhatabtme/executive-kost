  <!-- Modal -->
  <div class="modal fade" id="ModalPosts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
        </div>
        <div class="modal-body">
          <form action="{{route ('managepost.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Judul:</label>
              <input type="text" class="form-control" id="recipient-name" name="title">
            </div>
            <div class="mb-3">
              <label for="formFileSm" class="form-label">Sampul Gambar</label>
              <input class="form-control form-control-sm" id="formFileSm" type="file" name="picture">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Sub Judul:</label>
              <textarea class="form-control" id="message-text" name="excerpt"></textarea>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Isi:</label>
              <textarea class="form-control" id="message-text" name="body"></textarea>
            </div>
          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>