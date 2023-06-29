<aside class="text-white bg-dark d-flex fw-bold">
  <ul class="my-3">
    {{-- Dashboard --}}
    <li><a href="{{route('admin.home')}}"><i class="fa-solid fa-chart-line "></i> Dashboard </a></li>
    {{-- Project --}}
    <li><a href="{{route('admin.projects.index')}}"><i class="fa-solid fa-list-ul "></i> Elenco Progetti </a></li>
    {{-- Type --}}
    <li><a href="{{route('admin.typeProject')}}"><i class="fa-solid fa-folder-tree"></i> Elenco Tipologie/Progetti </a></li>
    <li><a href="{{route('admin.types.index')}}"><i class="fa-solid fa-sitemap"></i> Gestione Tipologie </a></li>
    {{-- Technology --}}
    <li><a href="#"><i class="fa-solid fa-folder-tree"></i> Elenco Tecnologie/Progetti </a></li>
    <li><a href="{{route('admin.technologies.index')}}"><i class="fa-solid fa-sitemap"></i> Gestione Tecnologie </a></li>
    {{-- Add new --}}
    <li><a href="{{route('admin.projects.create')}}"><i class="fa-solid fa-square-plus "></i> Nuovo Progetto </a></li>
  </ul>
</aside>
