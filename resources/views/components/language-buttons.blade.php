@props(['lang',])

<div class="flex flex-col absolute left-5 h-[90vh] justify-center">
    <a href="locale/en" class="border rounded-full p-4 w-14 h-14 my-3" style="background-color: {{$lang == 'en' ? "white" : "none"}}">en</a>
    <a href="locale/ka" class="border rounded-full p-4 w-14 h-14" style="background-color: {{$lang == 'ka' ? "white" : "none"}}">ka</a>
</div>
