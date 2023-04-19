<x-layout>
       

    <button class="c-theme" id="themePicker"></button>
    <div class="c-theme-grid" id="themeGrid"></div>
    <a class="c-button" id="button">Cycle Theme</a>





{{-- View code --}}
<select id="theme-selector">
    <option value="default">Default</option>
    <option value="dark">Dark</option>
</select>

<form id="theme-form" action="{{ route('theme.update') }}" method="post\">\n    @csrf
    <input type="hidden" id="theme-input" name="selected_theme">
</form>




</x-layout>