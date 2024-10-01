@extends('admin.dashboard')

@section('content')
    <!--  Main wrapper -->
        
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title fw-semibold mb-4">انشاء مقالة جديدة</h5>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">العنوان</label>
                                        <input type="text" value="{{@old('title')}}" class="form-control" id="title" name="title"
                                            aria-describedby="emailHelp">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="image" class="form-label">(اختياري)الصورة</label>
                                        <input type="file" class="form-control" value="{{@old('image')}}" id="image" name="image"
                                            aria-describedby="emailHelp">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="tag_id" class="form-label">صفات المقال</label>
                                        <select class="form-select" name="tag_id" multiple
                                            aria-label="multiple select example">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="text" class="form-label">النص</label>
                                        {{-- <div class="form-group"> --}}
                                          <textarea class="form-control" name="text" id="text" rows="3">{{@old('text')}}</textarea>
                                        {{-- </div> --}}
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection
