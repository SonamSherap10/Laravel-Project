<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Edit Blog - Intra Blog</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="mainPan">
    <div id="leftPan">
        <div id="logoPan">
            <a href="#"><img src="{{asset('frontend/images/logo.jpg')}}" title="Intra Blog" alt="Intra Blog" width="317" height="125" border="0" /></a>
        </div>
        <div id="leftbodyPan">
            <h2>Edit Blog</h2>
            <p class="border">&nbsp;</p>
            
            <!-- Display Validation Errors -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Display Success Message -->
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

            <!-- Edit Form -->
            <form action="/update/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Blog Title -->
                <label for="title">Blog Title:</label>
                <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" required>

                <!-- Blog Description -->
                <label for="description">Description:</label>
                <textarea id="description" name="description" required>{{ old('description', $blog->description) }}</textarea>

                <!-- Blog Image -->
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
                
                <!-- Existing Image Display -->
                @if($blog->image)
                <div>
                    <p>Current Image:</p>
                    <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}" style="width: 100%; height: 150px; object-fit: cover;">
                </div>
                @endif

                <!-- Submit Button -->
                <button type="submit">Update Blog</button>
            </form>

        </div>
    </div>
    <div id="rightPan">
        <div id="rightTopPan">
            <ul>
                <li><a href="/index">Home</a></li>
                <li><a href="/create">Add Blog</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
