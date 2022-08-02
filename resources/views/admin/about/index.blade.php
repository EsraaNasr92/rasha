@extends('layouts.app')

@section('content')

   
        <a class="btn btn-primary" href="{{ route('about.create') }}" >Create about</a>

        @if(session('status'))
            <div class="alert alert-info" >
                {{ session('status') }}
            </div>
        @endif

    
    <!-- BEGIN: HTML Table Data -->
    <div class="col-span-12 lg:col-span-6 mt-8">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">#</th>
                    <th class="whitespace-nowrap">Title</th>
                    <th class="whitespace-nowrap">Right text</th>
                    <th class="whitespace-nowrap">left text</th>
                    <th class="whitespace-nowrap">Title</th>
                    <th class="whitespace-nowrap">Button title</th>
                    <th class="whitespace-nowrap">Button link</th>
                    <th class="whitespace-nowrap">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($model as $about)
                    <tr>
                        <td>#</td>
                        <td> {{ $about -> title}}</td>
                        <td> {{ $about -> text_right}}</td>
                        <td> {{ $about -> text_left}}</td>
                        <td> {{ $about -> title}}</td>
                        <td> {{ $about -> btn_title}}</td>
                        <td> {{ $about -> btn_url}}</td>
                        <td>
                            <div class="tabulator-cell" role="gridcell" style="width: 219px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;" tabulator-field="actions" title=""><div class="flex lg:justify-center items-center">
                                <a class="edit flex items-center mr-3" href="{{ route('about.edit', ['about' => $about->id] ) }}">
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                        icon-name="check-square" data-lucide="check-square" 
                                        class="lucide lucide-check-square w-4 h-4 mr-1">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                    </svg> Edit
                                </a>
                                <a class="delete flex items-center text-danger" href="javascript:;">
                                    <svg 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                        icon-name="trash-2" data-lucide="trash-2" 
                                        class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg> 
                                    <form action="{{ route('about.destroy',$about->id) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('Sure Want Delete?')">Delete</button>
                                    </form>
                                </a>
                            </div>
                                            
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
@endsection
