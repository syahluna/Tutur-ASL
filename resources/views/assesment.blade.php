<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/task.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Tutur</title>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="nav-wrapper">
            <a href="{{ route('dashboard.page') }}"><span class="material-symbols-outlined">
                    keyboard_backspace
                </span>Dashboard</a>
            <h3>Sign Language ABCs</h3>
        </div>
    </div>
    <!-- Content -->
    <div class="container">
        <div class="content-container">
            <div class="col-1">
                @foreach ($tasks as $task)
                <div class="box">
                    <div class="box-container">
                        <a href="{{ route('task.page2', ['lesson_id' => $task->lesson_id, 'task_id' => $task->task_id]) }}">{{ $task->task_name }}</a>
                    </div>
                </div>
                @endforeach
                <div class="box">
                    <div class="box-container">
                        <a href="">Assesment</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="camera">
                    <div class="top">
                        <h4>Try It Yourself</h4>
                        <button onclick="toggleCamera()">Camera <span class="material-symbols-outlined">
                                videocam
                            </span></button>
                    </div>
                    <div class="cam">
                        <img src="http://127.0.0.1:5000/video_feed" id="video" style="display: none;" alt="Live Video Stream">
                    </div>
                    <form method="POST" action="{{ route('completeProgress', ['lesson_id' => $lesson_id, 'progress_id' => $progress_id]) }}">
                        @csrf
                        <button type="submit" class="complete">Complete <span class="material-symbols-outlined">
                                trending_flat
                            </span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>