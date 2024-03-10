<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ticketing App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-3 bg-primary text-white text-center">
  <h1>Ticket Page</h1>
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
<div class="col-12">
   <div class="card">
  <div class="card-header text-primary fw-bold">
    All Support Ticket
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Status</th>
      <th scope="col">Created At</th>
       <th scope="col">Updated At</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($tickets as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td><a href="{{ route('ticket.show', $item->id) }}">{{ $item->title }}</a></td>
      <td>
      {{ $item->status }}
      </td>
      <td>
      {{ $item->created_at }}
      </td>
      <td>
      {{ $item->updated_at }}
      </td>
      <td>
      <a href="{{ route('ticket.edit', $item->id) }}" class="btn btn-success">Edit</a></div>
      <!-- <form action="{{ route('ticket.destroy', $item->id) }}" method="post">
      @method('delete')  
      @csrf </form> -->
      <a href="{{ url('ticket/'.$item->id.'/delete') }}" class="btn btn-danger" 
      onClick="return confirm('Are You Sure?')"
      >Delete</a> 
    </div>
    </tr>
    @endforeach 
   
  </tbody>
</table>
  </div>
  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
</div>
   </div>
  </div>
</div>

</body>
</html>
