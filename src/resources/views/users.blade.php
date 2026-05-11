<div>
       @foreach($quizzs as $quizz)
        <p> {{$user->name}} </p>
            @foreach ($user->getUsers as $users)
            <p> {{$user->name}} </p>
        @endforeach
    @endforeach
</div>
