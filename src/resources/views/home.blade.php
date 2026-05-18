<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📋 Menu principal des quizz</title>
    <link rel="stylesheet" href="/src/resources/css/app.css">
</head>

<body>
    <div>
        <img src="/src/public/assets/icon/person.svg" alt="person icon">

        <h1>Welcome to the <span>Frontend Quiz</span></h1>
        <span>Pick a subject to get started.</span>

        <div>
            @foreach($quizzs as $quizz)
            <a href="/quizz/{{ $quizz->id }}">{{ $quizz->title }}</a>
            <img src="{{ $quizz->logo_url }}" alt="Icon">
            @endforeach
        </div>
    </div>
</body>

</html>