<x-mail::message>
# Correo por aprobar

<x-mail::panel>
<p>Se ha creado un post que necesita ser aprobado</p>
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post)"
    color="success">
Click aquí para aprobar
</x-mail::button>

</x-mail::message>
