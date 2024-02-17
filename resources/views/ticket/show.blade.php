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
  <h1>Show Ticket Page</h1>
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
          <a class="nav-link" href="/ticket">Go Back</a>
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
   Ticket Title: {{ $ticket->title }}
  </div>
  <div class="card-body">
   <div>{{ $ticket->description }}</div> </br>
    @if($ticket->attachment)
     <a href="{{ '/storage/app/public/attachments'. $ticket->attachment }}" target="_blank" class="btn btn-sm btn-primary">Attachments</a></div>
    @endif
  </div>  </br>
  <div class="d-flex justify-content-between p-3">
    <p>Created at: {{ $ticket->created_at }}</p>
    <p>Updated at: {{ $ticket->updated_at }} </p>
</div>
  <div class="card-footer text-body-secondary">
<a href="{{ route('ticket.edit', $ticket->id) }}" class="btn btn-success">Edit</a>
<a href="{{ url('ticket/'.$ticket->id.'/delete') }}" class="btn btn-danger" onClick="return confirm('Are You Sure?')">Delete</a> 
@if (auth()->user()->isAdmin)
<a href="{{ route('ticket.edit', $ticket->id) }}" class="btn btn-primary">Approve</a>
<a href="{{ route('ticket.edit', $ticket->id) }}" class="btn btn-warning">Reject</a>
@else
<button type="button" class="btn btn-primary position-relative">
  Ticket Status
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    {{$ticket->status}}
    <span class="visually-hidden">unread messages</span>
  </span>
</button>

@endif
</div>
  
   </div>
  </div>
</div>

</body>
</html>
