@extends('layouts.app')

@section('content')


                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Gallery
                    </h2>
                </div>
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <form action="{{ url('admin/gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if(!$errors->isEmpty())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" name="title" class="intro-y form-control py-3 px-4 box pr-10" placeholder="Title">
                            </div>
                            <div class="mt-3">
                                <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                    <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                        <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop 
                                        <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0" name="image" id="image">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <br/>
                                <button type="submit" class="btn btn-primary shadow-md mr-2">Upload</button>
                            </div>
                        </div>
                    </form> <!-- End upload form -->
                </div>



                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    @if(session('status'))
                        <div class="alert alert-info" >
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="intro-y grid grid-cols-12 gap-6 mt-5">
                    <!-- BEGIN: project Layout -->
                    @if($images->count())
                        @foreach($images as $image)
                            <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
                                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                                <div class="ml-3 mr-auto">
                                    <a href="" class="font-medium">Image name: {{ $image->title }}</a> 
                                </div>
                                    <div class="dropdown ml-3">
                                        <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-vertical" class="w-4 h-4"></i> </a>
                                        <div class="dropdown-menu w-40">
                                            <ul class="dropdown-content">
                                                <li>
                                                    <a href="" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> 
                                                    <form action="{{ route('gallery.destroy',$image->id) }}" method="POST" >
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"  onclick="return confirm('Sure Want Delete?')">Delete</button>
                                                    </form>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <div class="h-40 2xl:h-56 image-fit">
                                        <img alt="" class="rounded-md" src="{{ asset('uploads/gallery/' . $image->image) }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>


      <!--   
<div class="container">
                    <form action="{{ url('admin/gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        <div class="row">
                            <div class="col-md-5">
                                <strong>Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>

                            <div class="col-md-5">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <br/>
                                <button type="submit" class="btn btn-success">Upload</button>
                            </div>
                        </div>
                    </form> 
    <div class="row">
    <div class='list-group gallery'>
            @if($images->count())
                @foreach($images as $image)
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{ asset('uploads/gallery/' . $image->image) }}">
                        <img class="img-responsive" alt="" src="{{ asset('uploads/gallery/' . $image->image) }}" />
                        <div class='text-center'>
                            <small class='text-muted'>{{ $image->title }}</small>
                        </div> 

                    </a>
                    </form>

                    <form action="{{ route('gallery.destroy',$image->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                    </form>

                </div> 
                @endforeach
            @endif


        </div> 
    </div> 
</div>
-->
@endsection