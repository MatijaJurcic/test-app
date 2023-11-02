<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-col gap-4 py-10 mx-auto w-full max-w-7xl sm:px-6 lg:px-8 dark:text-gray-200">
      <table class="table-fixed border-collapse border border-slate-200">
        <thead>
          <tr>
            <th class="border border-slate-200">ID</th>
            <th class="border border-slate-200">Name</th>
            <th class="border border-slate-200">ISIN</th>
            <th class="border border-slate-200">WKN</th>
          </tr>
        </thead>
        <tbody>
        @foreach($funds as $fund)
          <tr>
            <td class="border border-slate-200">{{$fund['id']}}</td>
            <td class="border border-slate-200">{{$fund['name']}}</td>
            <td class="border border-slate-200">{{$fund['isin']}}</td>
            <td class="border border-slate-200">{{$fund['wkn']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$funds->links()}}
    </div>
<div>
</x-app-layout>
