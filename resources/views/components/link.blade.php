@php
    $clases=" text-xs text-gray-500 dark:text-gray-400 font-bold
                hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none 
                focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
@endphp
{{-- aqui ampliamos el tema de componenetes 
    por un lado tenemos
    $attributes: esta  variable tiene todos los campos que agregas al compoente en su misma linea
    tienes Slot; que es una variable que toma todo lo que este entre las etiqutas x-"compnent"
    mergue: convierte atributos en un strig unico uniendo todos ellos  
    si el atributo que se envia se llama diferente a una etiqueta html entonces se puede agregar su
    cotejamiento como una variable del arreglo merge ejemplo:  'class'=>$clases
    que indica que la etiqueta class de html sus valores vienen de Clases la variable --}}

<a {{ $attributes->merge([
        'class'=>$clases
]) }} ">
      {{$slot}}
</a>