<div>
    <h3> {{ $title }} </h3>
    <p> {{ Str::limit($description, 30, '...') }} </p>
    <a href="{{ route('article.details', ['id' => $articleId]) }}" style="color: blue;">Lire la suite</a>
</div>