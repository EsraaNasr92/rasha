{!! csrf_field() !!}

@if(!$errors->isEmpty())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
                <!-- END: Top Bar -->
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button type="button" class="btn box mr-2 flex items-center ml-auto sm:ml-0"> <i class="w-4 h-4 mr-2" data-lucide="eye"></i> Preview </button>
                        <input type="submit" class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false" data-tw-toggle="dropdown" value="Save" />
                    </div>
                </div>
                <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
                    <!-- BEGIN: project Content -->
                    <div class="intro-y col-span-12 lg:col-span-8">
                        <input type="text" class="intro-y form-control py-3 px-4 box pr-10" id="title" name="title" value="{{ $model->title }}" placeholder="Title"/>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $model->slug }}" /> 
                        <div class="post intro-y overflow-hidden box mt-5">
                            <ul class="post__tabs nav nav-tabs flex-col sm:flex-row bg-slate-200 dark:bg-darkmode-800" role="tablist">
                                <li class="nav-item">
                                    <button title="Fill in the article content" data-tw-toggle="tab" data-tw-target="#content" class="nav-link tooltip w-full sm:w-40 py-4 active" id="content-tab" role="tab" aria-controls="content" aria-selected="true"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Content </button>
                                </li>
                                <li class="nav-item">
                                    <button title="Adjust the meta title" data-tw-toggle="tab" data-tw-target="#meta-title" class="nav-link tooltip w-full sm:w-40 py-4" id="meta-title-tab" role="tab" aria-selected="false"> <i data-lucide="code" class="w-4 h-4 mr-2"></i> Meta Title </button>
                                </li>
                                <li class="nav-item">
                                    <button title="Use search keywords" data-tw-toggle="tab" data-tw-target="#keywords" class="nav-link tooltip w-full sm:w-40 py-4" id="keywords-tab" role="tab" aria-selected="false"> <i data-lucide="align-left" class="w-4 h-4 mr-2"></i> Keywords </button>
                                </li>
                            </ul>
                            <div class="post__content tab-content">
                                <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                        <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Text Content </div>
                                        <div class="mt-5">
                                            <div class="editor">
                                                <p>Content of the editor.</p>
                                                <textarea class="ckeditor form-control" name="content" id="content" >{{ $model->content }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                        <div class="mt-5">
                                            <div class="mt-3">
                                                <label class="form-label">Upload Image</label>
                                                <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                                    <div class="flex flex-wrap px-4">

                                                    @if($model->image != null)
                                                        <img height="100" width=100 src="{{ asset('uploads/portfolio/' . $model->image) }}">
                                                    @else
                                                        <img style="visibility:hidden"  id="prview" src=" {{ asset('uploads/portfolio/' . $model->image) }} "  width=100 height=100 />     
                                                    @endif

                                                    </div>
                                                    <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                        <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop 
                                                        <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0" name="image" id="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: project Content -->
                    <!-- BEGIN: project Info -->
                    <div class="col-span-12 lg:col-span-4">
                        <div class="intro-y box p-5">
                            <div class="mt-3">
                                <label for="category_id" class="form-label">Categories</label>
                                <select data-placeholder="Select categories" class="tom-select w-full" name="categoryp_id" required>
                                    <option value="">Select a Category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $model->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @if ($category->children)
                                            @foreach ($category->children as $child)
                                                <option value="{{ $child->id }}" {{ $child->id == $model->category_id ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>


                            </div>
                            <div class="mt-3">
                                <label for="post-form-4" class="form-label">Tags</label>
                                <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="post-form-4" multiple>
                                    <option value="1" selected>Leonardo DiCaprio</option>
                                    <option value="2">Johnny Deep</option>
                                    <option value="3" selected>Robert Downey, Jr</option>
                                    <option value="4">Samuel L. Jackson</option>
                                    <option value="5">Morgan Freeman</option>
                                </select>
                            </div>
                            <div class="form-check form-switch flex flex-col items-start mt-3">
                                <label for="post-form-5" class="form-check-label ml-0 mb-2">Published</label>
                                <input id="post-form-5" class="form-check-input" type="checkbox">
                            </div>
                        </div>
                    </div>
                    <!-- END: project Info -->
                </div>

                <!--
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title"
            name="title" value="{{ $model->title }}" />
</div>

<div class="form-group">
    <label for="slug">Url</label>
    <input type="text" class="form-control" id="slug"
            name="slug" value="{{ $model->slug }}" /> 
</div>


<div class="form-group">
    <label for="content">Content</label>
   
    <textarea class="form-control" name="content" id="content" >{{ $model->content }}</textarea>
</div>


<div class="form-group">
    <label for="categoryp_id">Category</label>
    <select class="form-control" name="categoryp_id" required>
        <option value="">Select a Category</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id === old('categoryp_id') ? 'selected' : '' }}>{{ $category->name }}</option>
            @if ($category->children)
                @foreach ($category->children as $child)
                    <option value="{{ $child->id }}" {{ $child->id === old('categoryp_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                @endforeach
            @endif
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="image">Image</label>
    <input type="file" placeholder="Image" name="image" id="image">
    @if($model->image != null)
        <img height="100" width=100 src="{{ asset('uploads/portfolio/' . $model->image) }}">
    @else
        <img style="visibility:hidden"  id="prview" src=" {{ asset('uploads/portfolio/' . $model->image) }} "  width=100 height=100 />     
    @endif
    
</div>

<div class="form-group">
    <input type="submit" class="btn btn-default" value="submit" /> 
</div>-->