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
                    <table class="table table-striped table-sm compact-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Book Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>The Little Owl's Adventure</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Learning Laravel</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
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
                                <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pack 2
                            <span>
                                <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pack 3
                            <span>
                                <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Custom CSS -->
<style>
    .compact-table th,
    .compact-table td {
        padding: 0.35rem 0.5rem;
        font-size: 0.85rem;
        vertical-align: middle;
    }
</style>

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
