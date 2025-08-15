@props(['active' => 'false'])
<a 
    class="{{ 
        $active 
        ? 'bg-blue-500 dark:bg-slate-900 text-white' 
        : 'text-black dark:text-slate-300 hover:bg-blue-300 dark:hover:bg-slate-700 hover:text-white'}} 
        . rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{$active ? 'page' : 'false'}}"
    {{$attributes}}
>{{$slot}}</a>