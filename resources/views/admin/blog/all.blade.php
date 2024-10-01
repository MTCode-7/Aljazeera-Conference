@extends('admin.dashboard')

@section('content')
    <div class="row">

        @foreach ($blogs as $blog)
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="{{ route('blog.show', $blog) }}"><img src="{{ asset('blogsImages') . '/' . $blog->image }}"
                                class="card-img-top rounded-0" alt="..."></a>
                        <a href="javascript:void(0)"
                            class="bg-danger rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-trash"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">{{ $blog->title }}</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">{{ $blog->added_by }} <span
                                    class="ms-2 fw-normal text-muted fs-3">{{ $blog->created_at->diffForHumans() }}</span>
                            </h6>
                            {{-- <p>{{$blog->created_at->diffForHumans()}}</p> --}}
                        </div>
                    </div>
                </div>
                <form action="{{ route('blog.show', $blog->id) }}" name="delete-form" id="delete-form" method="DELETE">
                    @csrf
                    @method('DELETE')
                </form>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">حذف التدونية؟</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ؟ {{ $blog->title }} هل حقا تريد حذف
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Delete"
                                    onclick="event.preventDefault();
                                                       document.getElementById('delete-form').submit();">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#exampleModal').on('show.bs.modal', event => {
                        var button = $(event.relatedTarget);
                        var modal = $(this);
                        // Use above variables to manipulate the DOM

                    });
                </script>
            </div>


            {{-- @empty

            <center>
                <div class="alert alert-info" role="alert">
                    <strong>لا يوجد مقال بعد</strong>
                </div>
            </center> --}}
        @endforeach

    </div>
@endsection
