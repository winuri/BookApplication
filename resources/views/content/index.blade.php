@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div id="content-management" style="display: {{ request()->routeIs('content.index') ? 'block' : 'none' }}">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Content Management</li>
            </ol>
        </nav>
        <div class="row g-3">
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm p-3 rounded-3 text-center flex-fill d-flex flex-column">
                    <h4 class="fw-bold d-flex align-items-center justify-content-center mb-3" style="font-size: 1.5rem;">
                        <img src="{{ asset('icons/clapperboard_564056.svg') }}" width="45" class="me-2"> Videos
                    </h4>
                    <button id="add-new-video-btn" class="btn add-new-btn mb-3 d-flex flex-column align-items-center justify-content-center py-2 px-3" style="font-size: 0.95rem;">
                        <img src="{{ asset('icons/add_3755124.svg') }}" width="32" class="mb-1">
                        Add New
                    </button>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fw-semibold mb-0" style="font-size: 1rem;">Recent Videos</h6>
                        <a href="#" class="btn btn-sm btn-outline-secondary">All</a>
                    </div>
                    <ul class="list-group list-group-flush flex-grow-1">
                        @foreach(['Lorem ipsum','Dolor sit','Aiquan erat','Diam nonum','Sed siam','Magna aliqua'] as $video)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span style="font-size: 0.95rem;">{{ $video }}</span>
                            <span class="d-flex gap-2">
                                <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                    <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                    <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                </button>
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm p-3 rounded-3 text-center flex-fill d-flex flex-column">
                    <h4 class="fw-bold d-flex align-items-center justify-content-center mb-3" style="font-size: 1.5rem;">
                        <img src="{{ asset('icons/upload_1946070.svg') }}" width="45" class="me-2"> E-Books
                    </h4>
                    <button id="add-new-ebook-btn" class="btn add-new-btn mb-3 d-flex flex-column align-items-center justify-content-center py-2 px-3" style="font-size: 0.95rem;">
                        <img src="{{ asset('icons/add_3755124.svg') }}" width="32" class="mb-1">
                        Add New
                    </button>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fw-semibold mb-0" style="font-size: 1rem;">Recent E-Books</h6>
                        <a href="#" class="btn btn-sm btn-outline-secondary">All</a>
                    </div>
                    <ul class="list-group list-group-flush flex-grow-1">
                        @foreach(['Lorem ipsum','Dolor sit','Aiquan erat','Diam nonum','Sed siam','Magna aliqua'] as $ebook)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span style="font-size: 0.95rem;">{{ $ebook }}</span>
                            <span class="d-flex gap-2">
                                <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                    <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                    <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                </button>
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card shadow-sm p-3 rounded-3 flex-fill d-flex flex-column">
                    <h4 class="fw-bold d-flex align-items-center justify-content-center mb-3" style="font-size: 1.5rem;">
                        <img src="{{ asset('icons/interactive_2818069.svg') }}" width="45" class="me-2"> Interactive Activities
                    </h4>
                    <div class="row g-3 flex-grow-1">
                        @foreach([
                            ['Quizzes','speech-bubble_3407022.svg'],
                            ['Drag-and-Drop','shape-builder_4892010.svg'],
                            ['Matching Games','puzzle_7399624.svg'],
                            ['Fill-in-the-Blanks','banker_351914.svg'],
                            ['Sequencing','work-progress_5698568.svg'],
                            ['Puzzles','crossword_3813765.svg'],
                            ['Coloring','paint-palette_5238410.svg'],
                            ['Memory Game','memory-game_14189533.svg'],
                        ] as $activity)
                        <div class="col-6">
                            <button id="{{ $activity[0] == 'Quizzes' ? 'add-new-quiz-btn' : '' }}" class="btn btn-outline-secondary w-100 py-3 d-flex flex-column align-items-center">
                                <img src="{{ asset('icons/'.$activity[1]) }}" width="50" class="mb-2">
                                <span style="font-size: 0.98rem;">{{ $activity[0] }}</span>
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="add-video-form" style="display: none;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" onclick="showContentManagement()">Content Management</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Video</li>
            </ol>
        </nav>
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5>Add New Video</h5>
            <div class="d-flex align-items-center gap-2">
                <h6 class="m-0">Status</h6>
                <div class="form-check form-switch p-0">
                    <input class="form-check-input m-0" type="checkbox" role="switch" id="statusToggleVideo" checked>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label for="videoName" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="videoName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="videoDescription" class="form-label">Description *</label>
                                    <textarea class="form-control" id="videoDescription" rows="4" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="videoThumbnail" class="form-label">Thumbnail *</label>
                                    <input class="form-control" type="file" id="videoThumbnail" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card p-3 mb-3">
                                    <label class="form-label d-block text-center mb-3">Video File Upload</label>
                                    <div class="border border-secondary border-dashed rounded p-4 text-center">
                                        <img src="{{ asset('icons/upload_12485502.svg') }}" width="50" alt="Upload" class="mb-2">
                                        <p class="text-muted m-0">Drop Here or <a href="#">Browse</a></p>
                                    </div>
                                    <div class="progress mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-center text-muted mt-1">Upload Progress</small>
                                </div>
                                <div class="mb-3">
                                    <label for="videoTopic" class="form-label">Topic/Subject *</label>
                                    <select class="form-select" id="videoTopic" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Mathematics</option>
                                        <option>Science</option>
                                        <option>History</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="videoAgeGroup" class="form-label">Age Group *</label>
                                    <select class="form-select" id="videoAgeGroup" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>4-6</option>
                                        <option>7-9</option>
                                        <option>10-12</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="videoSeries" class="form-label">Series (Optional)</label>
                                    <select class="form-select" id="videoSeries">
                                        <option selected disabled value="">Choose...</option>
                                        <option>Series A</option>
                                        <option>Series B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" onclick="showContentManagement()">Cancel</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="add-ebook-form" style="display: none;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" onclick="showContentManagement()">Content Management</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New E-Book</li>
            </ol>
        </nav>
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5>Add New E-Book</h5>
            <div class="d-flex align-items-center gap-2">
                <h6 class="m-0">Status</h6>
                <div class="form-check form-switch p-0">
                    <input class="form-check-input m-0" type="checkbox" role="switch" id="statusToggleEbook" checked>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label for="ebookName" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="ebookName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="ebookDescription" class="form-label">Description *</label>
                                    <textarea class="form-control" id="ebookDescription" rows="4" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="ebookThumbnail" class="form-label">Thumbnail *</label>
                                    <input class="form-control" type="file" id="ebookThumbnail" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card p-3 mb-3">
                                    <label class="form-label d-block text-center mb-3">E-Book File Upload</label>
                                    <div class="border border-secondary border-dashed rounded p-4 text-center">
                                        <img src="{{ asset('icons/upload_12485502.svg') }}" width="50" alt="Upload" class="mb-2">
                                        <p class="text-muted m-0">Drop Here or <a href="#">Browse</a></p>
                                    </div>
                                    <div class="progress mt-3">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-center text-muted mt-1">Upload Progress</small>
                                </div>
                                <div class="mb-3">
                                    <label for="ebookTopic" class="form-label">Topic/Subject *</label>
                                    <select class="form-select" id="ebookTopic" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Mathematics</option>
                                        <option>Science</option>
                                        <option>History</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ebookAgeGroup" class="form-label">Age Group *</label>
                                    <select class="form-select" id="ebookAgeGroup" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>4-6</option>
                                        <option>7-9</option>
                                        <option>10-12</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ebookSeries" class="form-label">Series (Optional)</label>
                                    <select class="form-select" id="ebookSeries">
                                        <option selected disabled value="">Choose...</option>
                                        <option>Series A</option>
                                        <option>Series B</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" onclick="showContentManagement()">Cancel</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="add-quiz-form" style="display: none;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" onclick="showContentManagement()">Content Management</a></li>
                <li class="breadcrumb-item"><a href="#" onclick="showAddQuizForm()">Interactive Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Quiz</li>
            </ol>
        </nav>
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5 class="fw-bold"><img src="{{ asset('icons/speech-bubble_3407022.svg') }}" width="45" class="me-2"> Add New Quiz</h5>
            <div class="d-flex align-items-center gap-2">
                <h6 class="m-0">Status</h6>
                <div class="form-check form-switch p-0">
                    <input class="form-check-input m-0" type="checkbox" role="switch" id="statusToggleQuiz" checked>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-8">
                                <h6 class="fw-bold">Quiz Details</h6>
                                <div class="mb-3">
                                    <label for="quizName" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="quizName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="quizDescription" class="form-label">Description *</label>
                                    <textarea class="form-control" id="quizDescription" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h6 class="fw-bold">Metadata</h6>
                                <div class="mb-3">
                                    <label for="quizThumbnail" class="form-label">Thumbnail</label>
                                    <input class="form-control" type="file" id="quizThumbnail">
                                </div>
                                <div class="mb-3">
                                    <label for="quizTopic" class="form-label">Topic/Subject *</label>
                                    <select class="form-select" id="quizTopic" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Mathematics</option>
                                        <option>Science</option>
                                        <option>History</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="quizAgeGroup" class="form-label">Age Group *</label>
                                    <select class="form-select" id="quizAgeGroup" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>4-6</option>
                                        <option>7-9</option>
                                        <option>10-12</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="quizSeries" class="form-label">Series (Optional)</label>
                                    <select class="form-select" id="quizSeries">
                                        <option selected disabled value="">Choose...</option>
                                        <option>Series A</option>
                                        <option>Series B</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="quizMerits" class="form-label">Merits (Optional)</label>
                                    <select class="form-select" id="quizMerits">
                                        <option selected disabled value="">Choose...</option>
                                        <option>Merit 1</option>
                                        <option>Merit 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <h6 class="fw-bold">Question Builder</h6>
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <label for="questionType" class="form-label m-0">Type</label>
                                <select class="form-select w-25" id="questionType">
                                    <option>Multiple Choice</option>
                                    <option>True/False</option>
                                    <option>Fill-in-the-Blank</option>
                                </select>
                                <button type="button" class="btn btn-outline-success" id="add-new-quiz-question-btn">Add New <img src="{{ asset('icons/add_3755124.svg') }}" width="20" alt="Add"></button>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>1. Question 124</span>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>2. Question 124</span>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>3. Question 124</span>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>4. Question 124</span>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                            <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                            <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" onclick="showContentManagement()">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="add-new-quiz-question-form" style="display: none;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" onclick="showContentManagement()">Content Management</a></li>
                <li class="breadcrumb-item"><a href="#" onclick="showAddQuizForm()">Add New Quiz</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Quiz Question</li>
            </ol>
        </nav>
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5 class="fw-bold"><img src="{{ asset('icons/speech-bubble_3407022.svg') }}" width="45" class="me-2"> Add New Quiz Question</h5>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card p-4 shadow-sm">
                    <form>
                        <div class="row g-4">
                            <div class="col-12">
                                <h6 class="fw-bold">Question Block Elements</h6>
                                <div class="d-flex gap-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="questionTypeRadio" id="textOnly" checked>
                                        <label class="form-check-label" for="textOnly">Text Only</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="questionTypeRadio" id="textPlus">
                                        <label class="form-check-label" for="textPlus">Text+</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="questionTypeRadio" id="image">
                                        <label class="form-check-label" for="image">Image</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="questionTypeRadio" id="audio">
                                        <label class="form-check-label" for="audio">Audio</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="questionTypeRadio" id="video">
                                        <label class="form-check-label" for="video">Video</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="questionText" class="form-label">Question Text</label>
                                    <textarea class="form-control" id="questionText" rows="3"></textarea>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="image-upload-box text-center border p-4 rounded" style="width: 30%;">
                                        <img src="{{ asset('icons/image-placeholder_14168050.svg') }}" width="50" alt="Image Upload">
                                        <p class="m-0 text-muted">Image</p>
                                    </div>
                                    <div class="image-upload-box text-center border p-4 rounded" style="width: 30%;">
                                        <img src="{{ asset('icons/image-placeholder_14168050.svg') }}" width="50" alt="Image Upload">
                                        <p class="m-0 text-muted">Image</p>
                                    </div>
                                    <div class="image-upload-box text-center border p-4 rounded" style="width: 30%;">
                                        <img src="{{ asset('icons/image-placeholder_14168050.svg') }}" width="50" alt="Image Upload">
                                        <p class="m-0 text-muted">Image</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="fw-bold">Answer Type</h6>
                                <div class="d-flex gap-3 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answerTypeRadio" id="multipleChoice" checked>
                                        <label class="form-check-label" for="multipleChoice">Multiple Choice</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answerTypeRadio" id="trueFalse">
                                        <label class="form-check-label" for="trueFalse">True/False</label>
                                    </div>
                                </div>
                                <h6 class="fw-bold">Choices</h6>
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <button type="button" class="btn btn-outline-success">Add New <img src="{{ asset('icons/add_3755124.svg') }}" width="20" alt="Add"></button>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>1. Answer 1</span>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                                <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-info p-1" title="Listen">
                                                <img src="{{ asset('icons/play-button_4981442.svg') }}" width="20" alt="Listen">
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-warning p-1" title="View">
                                                <img src="{{ asset('icons/eye_5210967.svg') }}" width="20" alt="View">
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                                <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                            </button>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>2. Answer 2</span>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-sm btn-outline-primary p-1" title="Edit">
                                                <img src="{{ asset('icons/edit_12435906.svg') }}" width="20" alt="Edit">
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-info p-1" title="Listen">
                                                <img src="{{ asset('icons/play-button_4981442.svg') }}" width="20" alt="Listen">
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-warning p-1" title="View">
                                                <img src="{{ asset('icons/eye_5210967.svg') }}" width="20" alt="View">
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger p-1" title="Delete">
                                                <img src="{{ asset('icons/close_9915981.svg') }}" width="20" alt="Delete">
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" onclick="showAddQuizForm()">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showContentManagement() {
        document.getElementById('content-management').style.display = 'block';
        document.getElementById('add-video-form').style.display = 'none';
        document.getElementById('add-ebook-form').style.display = 'none';
        document.getElementById('add-quiz-form').style.display = 'none';
        document.getElementById('add-new-quiz-question-form').style.display = 'none';
    }

    function showAddVideoForm() {
        document.getElementById('content-management').style.display = 'none';
        document.getElementById('add-video-form').style.display = 'block';
        document.getElementById('add-ebook-form').style.display = 'none';
        document.getElementById('add-quiz-form').style.display = 'none';
        document.getElementById('add-new-quiz-question-form').style.display = 'none';
    }

    function showAddEbookForm() {
        document.getElementById('content-management').style.display = 'none';
        document.getElementById('add-video-form').style.display = 'none';
        document.getElementById('add-ebook-form').style.display = 'block';
        document.getElementById('add-quiz-form').style.display = 'none';
        document.getElementById('add-new-quiz-question-form').style.display = 'none';
    }

    function showAddQuizForm() {
        document.getElementById('content-management').style.display = 'none';
        document.getElementById('add-video-form').style.display = 'none';
        document.getElementById('add-ebook-form').style.display = 'none';
        document.getElementById('add-quiz-form').style.display = 'block';
        document.getElementById('add-new-quiz-question-form').style.display = 'none';
    }

    function showAddNewQuizQuestionForm() {
        document.getElementById('content-management').style.display = 'none';
        document.getElementById('add-video-form').style.display = 'none';
        document.getElementById('add-ebook-form').style.display = 'none';
        document.getElementById('add-quiz-form').style.display = 'none';
        document.getElementById('add-new-quiz-question-form').style.display = 'block';
    }

    document.getElementById('add-new-video-btn').addEventListener('click', function() {
        showAddVideoForm();
    });

    document.getElementById('add-new-ebook-btn').addEventListener('click', function() {
        showAddEbookForm();
    });

    document.getElementById('add-new-quiz-btn').addEventListener('click', function() {
        showAddQuizForm();
    });

    document.getElementById('add-new-quiz-question-btn').addEventListener('click', function() {
        showAddNewQuizQuestionForm();
    });
</script>
@endsection