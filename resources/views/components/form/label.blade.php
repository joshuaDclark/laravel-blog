@props(['name'])


<label class="block mp-2 uppercase font-bold text-xs text-gray-700"
                    for="{{ $name }}"

                >

                    {{ ucwords($name) }}

                </label>
