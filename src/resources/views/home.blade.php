<div>
    <h1>Welcome to the <span>Frontend Quiz</span></h1>
    <span>Pick a subject to get started.</span>

    <div>
        @foreach($quizzs as $quizz)
            <p>{{ $quizz->title }}</p>
            <img src="{{ $quizz->logo_url }}" alt="Icon">
        @endforeach
    </div>
</div>