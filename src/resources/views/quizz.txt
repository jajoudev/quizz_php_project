<div>
    @foreach($quizzs as $quizz)
        <p> {{$quizz->title}} </p>
            @foreach ($quizz->getUsers as $users)
            <p> {{$user->name}} </p>
        @endforeach
    @endforeach
</div>