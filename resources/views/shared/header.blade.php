<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Test - Laravel</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <header class="main-header">
       <nav>
           <h1>Mattpress</h1>
           <ul>
               <li> <a href="{{ route('home') }}">Home</a> </li>
               <li> <a href="{{ route('blog.index-blog') }}"">Blog</a> </li>
           </ul>
       </nav>
    </header>