@extends('admin.dashboard')

@section('content')
    <!--  Main wrapper -->

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title fw-semibold mb-4">انشاء سمة جديدة</h5>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('tags.store')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">الاسم</label>
                                        <input type="text" value="{{@old('title')}}" class="form-control" id="name" name="name"
                                            aria-describedby="emailHelp">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection
