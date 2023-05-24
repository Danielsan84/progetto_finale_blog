<x-layout>
       
    <button class="c-theme" id="themePicker"></button>
    <div class="c-theme-grid" id="themeGrid"></div>
    <button class="c-button" id="button">Cycle Theme</button>
    
    {{-- View code --}}
    <select id="theme-selector">
        <option value="default">Default</option>
        <option value="dark">Dark</option>
    </select>
    @csrf
    <form id="theme-form" action="{{ route('theme.update') }}" method="post"> <!-- remove extra backslash from form tag -->
        <input type="hidden" id="theme-input" name="selected_theme">
    </form>
    

</x-layout>