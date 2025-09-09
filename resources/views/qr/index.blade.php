@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs mb-3" id="dashboardTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="books-tab" data-bs-toggle="tab" data-bs-target="#books" type="button" role="tab" aria-controls="books" aria-selected="true">Books</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="packs-tab" data-bs-toggle="tab" data-bs-target="#packs" type="button" role="tab" aria-controls="packs" aria-selected="false">Packs</button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="dashboardTabsContent">
        <!-- Books Tab -->
        <div class="tab-pane fade show active" id="books" role="tabpanel" aria-labelledby="books-tab">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Books</h5>
                    <button class="btn btn-primary btn-sm">Add New Book</button>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>The Little Owl's Adventure</td>
                                <td>John Doe</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Learning Laravel</td>
                                <td>Jane Smith</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Packs Tab -->
        <div class="tab-pane fade" id="packs" role="tabpanel" aria-labelledby="packs-tab">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Packs</h5>
                    <button class="btn btn-success btn-sm">Add New Pack</button>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pack 1
                            <span>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pack 2
                            <span>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pack 3
                            <span>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
   
    var triggerTabList = [].slice.call(document.querySelectorAll('#dashboardTabs button'))
    triggerTabList.forEach(function (triggerEl) {
      var tabTrigger = new bootstrap.Tab(triggerEl)

      triggerEl.addEventListener('click', function (event) {
        event.preventDefault()
        tabTrigger.show()
      })
    })
</script>
@endsection
