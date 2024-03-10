 <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
         @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" placeholder="Title" name="title" id="title" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
      <textarea class="form-control" placeholder="Write a Description here" name="description" required></textarea>
      </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Attachments</label>
      <input class="form-control" type="file" id="attachment" name="attachment" multiple>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
  </form>