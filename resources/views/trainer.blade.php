<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gym Management</title>

  <!--Fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <!--Side Bar-->
  <div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
      <aside class="col-12 col-md-3 col-xl-2 p-0 flex-shrink-1 bg-secondary ">
        <nav class="navbar navbar-expand-md navbar-primary bd-primary flex-md-column flex-row align-items-center py-2 text-center sticky-top" id="sidebar">
          <div class="text-center p-3">
            <p class="fs-2 fw-bold">Gym Management</p>
          </div>

          <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-last" id="nav">
            <ul class="navbar-nav flex-column w-100 justify-content-center">
              <li class="nav-item mt-3">
                <a href="/" class="nav-link active mt-3">
                  <i class="fa-sharp fa-solid fa-house-chimney fs-1 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="/trainer" class="nav-link active mt-3">
                  <i class="fa-solid fa-dumbbell fs-1 text-white"></i>
                </a>
              </li>
              <li class="nav-item mt-3">
                <a href="/member" class="nav-link active mt-3">
                  <i class="fa-solid fa-people-group fs-1 text-white"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </aside>
      <main class="col">
        <h1 class="text-center mt-4">TRAINER</h1>
        <div class="container-fluid">
          <div class="row p-5">
            <div class="col-md-8 mx-auto border border-dark rounded p-3 shadow">
              @if( session('success'))
              <div class="alert alert-primary">{{ session('success') }}</div>
              @endif
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trainerModal">
                Create Trainer
              </button>
              <!-- Modal -->
              <div class="modal fade" id="trainerModal" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5">Create Trainer</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('createtrainer') }}">
                      @csrf
                      <div class="col p-3">
                        <input type="text" class="form-control border-dark mt-4" id="name" placeholder="Enter Name" name="name" required>
                      </div>
                      <div class="col p-3">
                        <input type="email" class="form-control border-dark mt-4" id="email" placeholder="Enter Email" name="email" required>
                      </div>
                      <div class="col p-3">
                        <select id="specialization" class="form-select border-dark mt-4" name="specialization" required>
                          <option selected>Specialization</option>
                          <option>Medical Fitness</option>
                          <option>Senior Fitness</option>
                          <option>Lifestyle Wellness</option>
                          <option>Youth Fitness</option>
                        </select>
                      </div>
                      <div class="col mb-3">
                        <input type="number" class="form-control mt-4" id="phone" placeholder="Enter Phone" name="phone" required>
                      </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <table class="table mt-4">
                <hr>
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Specialization</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                <tbody>
                  @if ( count($trainers) > 0)
                  @foreach ($trainers as $trainer)
                  <tr>
                    <td>{{ $trainer->name }}</td>
                    <td>{{ $trainer->email }}</td>
                    <td>{{ $trainer->specialization }}</td>
                    <td>{{ $trainer->phone }}</td>

                    <td>
                      <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td colspan="4" class="text-center fw-bold ">No Available Students</td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>
  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>