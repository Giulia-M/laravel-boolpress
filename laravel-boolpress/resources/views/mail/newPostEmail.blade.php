<p>

Gentile amministratore,
è appena stato creato un nuovo post. 
<strong>{{$post->title}} </strong>

Prema il link sottostante per visualizzarlo. 

<a href=" {{ route ("admin.posts.show", $post->id) }} "> 
    {{ route ("admin.posts.show", $post->id) }} 
</a>
</p>