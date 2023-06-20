@extends('admin.layout.base')

@section('content')

    <section style="background-color: #eee;">




        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card" style="border-radius: 15px;">
                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                             data-mdb-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/12.webp"
                                 style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                 alt="Laptop" />
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p><a href="#!" class="text-dark">{!! $comment->product->name?? 'Not Found' !!}</a></p>
                                    <p class="small text-muted">{!! $comment->product->detail?? 'Not Found' !!}</p>
                                </div>
                                <div>
                                    <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="small text-muted">Rated 4.0/5</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <p><a href="#!" class="text-dark">Description</a></p>
                                <p class="text-dark"></p>
                            </div>

                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                <a href="#!" class="text-dark fw-bold">Cancel</a>
                                <button type="button" class="btn btn-primary">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background-color: #eee;">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <img class="rounded-circle shadow-1-strong me-3"
                                     src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60"
                                     height="60" />
                                <div>
                                    <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                    <p class="text-muted small mb-0">
                                        Shared publicly - Jan 2020
                                    </p>
                                </div>
                            </div>

                            <p class="mt-3 mb-4 pb-2">
                                {{$comment->body}}
                            </p>

                            <div class="small d-flex justify-content-start">
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-thumbs-up me-2"></i>
                                    <p class="mb-0">Like</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-comment-dots me-2"></i>
                                    <p class="mb-0">Comment</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="fas fa-share me-2"></i>
                                    <p class="mb-0">Share</p>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3"
                                     src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                                     height="40" />
                                <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                          style="background: #fff;"  name="body"  placeholder="لطفا کامنتی ارسال کنید"  href="{{ route('admin.comment.store') }}"></textarea>

                                    <label class="form-label" for="textAreaExample">Message</label>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
