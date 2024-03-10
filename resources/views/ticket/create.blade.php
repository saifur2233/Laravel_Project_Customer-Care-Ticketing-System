<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-3 bg-primary text-white text-center">
  <h1>Create Ticket Page</h1>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand text-primary fw-bold" href="/">Ticketing App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ticket/create">Go Back</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <div class="row">
  <div class="col-2"></div>
<div class="col-8">
   <div class="card">
  <div class="card-header text-primary fw-bold">
    Create New Support Ticket
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <!-- <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
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
  </form> -->
   @include('ticket.acd')
  </div>
  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
</div>
  <div class="col-2"></div>
   </div>
  </div>
</div>

</body>
</html>
