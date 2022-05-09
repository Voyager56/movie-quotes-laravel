@props(['lang', 'route'])

<div class="flex flex-col absolute left-5 h-[90vh] justify-center">
    <a href="/en/{{$route}}" class="border rounded-full p-4 w-14 h-14 my-3" style="background-color: {{$lang == 'en' ? "white" : "none"}}">en</a>
    <a href="/ka/{{$route}}" class="border rounded-full p-4 w-14 h-14" style="background-color: {{$lang == 'ka' ? "white" : "none"}}">ka</a>
</div>
