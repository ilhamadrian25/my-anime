@extends('layouts.app')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb sec-mar">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    {{-- <li><a href="grid-view.html">Listing</a></li> --}}
                    <li><a href="/detail">My Hero Academia</a></li>
                    <li><a class="active">Episode 1</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Chapter Area Start       	=-->
    <!--=====================================-->
    <section class="chapter sec-mar">
        <div class="container">
            <div class="d-flex justify-content-between mb-4">
                <div class="left">
                    <a href="#" class="anime-btn btn-dark border-change dropdown-toggle" id="country"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Episode
                        <span><i class="fa fa-chevron-down"></i></span></a>
                    <ul class="dropdown-menu" aria-labelledby="country">
                        <ul class="video-sidebar overflow-auto">
                            <div class="container">
                                <li>
                                    <a href="{{ route('wacth-anime') }}" class="active">Episode 01</a>
                                </li>
                                <li>
                                    <a href="{{ route('wacth-anime') }}">Episode 02</a>
                                </li>
                                <li>
                                    <a href="{{ route('wacth-anime') }}">Episode 03</a>
                                </li>
                                <li>
                                    <a href="{{ route('wacth-anime') }}">Episode 04</a>
                                </li>
                                <li>
                                    <a href="{{ route('wacth-anime') }}">Episode 05</a>
                                </li>
                                <li>
                                    <a href="{{ route('wacth-anime') }}">Episode 06</a>
                                </li>
                                <li>
                                    <a href="{{ route('wacth-anime') }}">Episode 07</a>
                                </li>
                                </li>
                            </div>
                        </ul>
                    </ul>
                </div>
                <div class="right">
                    <a href="#" class="anime-btn btn-dark">PREVIOUS</a>
                    <a href="#" class="anime-btn btn-dark">REPORT</a>
                    <a href="#" class="anime-btn btn-dark border-change ms-1">NEXT</a>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         video Area Start          =-->
    <!--=====================================-->
    <section class="video sec-mar">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 col-sm-8 col-13">
                    <div class="img-box">
                        {{-- <img class="detail-image" src="{{ asset('media/banner/banner-img-2.png') }}" alt=""> --}}
                        <div class="overlay">
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-box">
                        <video controls>
                            <source src="{{ asset('media/video/eps.5.mkv') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Comment Area Start        =-->
    <!--=====================================-->
    <section class="comment sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="comment-block">
                        <div class="heading style-1 m-0">
                            <h2>COMMENTS</h2>
                        </div>
                        <p>We hope you have a good time browsing the comment section! <br>
                            Please read our <a href="#">Comment
                                Policy</a> before commenting.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <a href="profile.html"><img src="{{ asset('media/banner/gif1.gif') }}" alt="Gif Image"></a>
                        </div>
                        <div class="col-lg-11 col-10">
                            <form action="#">
                                <div class="input-group form-group footer-email-box">
                                    <input class="form-control" type="text" name="post"
                                        placeholder="Join the discussion">
                                    <button class="input-group-text post-btn" type="submit">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="site-comment">
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="profile"><img src="{{ asset('media/banner/gif1.gif') }}" alt="Gif Image"></a>
                            </div>
                            <div class="col-lg-11 col-10">
                                <h5><a href="profile">{{ auth()->user()->name ?? '@username' }}</a><b>5 minutes ago</b>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nulla dignissimos
                                    voluptates natus magnam laboriosam totam, tempora sapiente id eveniet eligendi
                                    praesentium, doloribus minus, non accusamus! Aspernatur cupiditate explicabo nesciunt
                                    sapiente accusantium totam enim aliquid dolorum? Distinctio quos quam impedit? Dicta
                                    fugiat sunt ad dolorem voluptas adipisci consectetur assumenda officiis perferendis
                                    deserunt sed neque hic quos, quaerat ea quibusdam repellendus ipsam, ex nobis
                                    dignissimos architecto suscipit culpa natus itaque. Ipsam sint inventore dignissimos
                                    illum minima nostrum fugiat repellendus, possimus vitae architecto, adipisci voluptatem
                                    cum similique facere sequi omnis odio? Mollitia nesciunt cupiditate id ad, corporis rem
                                    maxime accusantium deserunt necessitatibus.
                                </p>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i><b></a>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-2">
                                <a href="profile"><img src="{{ asset('media/blog/blog-img-3.png') }}" alt=""></a>
                            </div>
                            <div class="col-lg-11 col-10">
                                <h5><a href="profile"> {{ auth()->user()->name ?? '@username' }}</a><b>5 minutes ago</b>
                                </h5>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
                                </p>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-up"></i></a>
                                <a href="#" class="comment-btn"><i class="fa fa-thumbs-down"></i></a>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="#" class="comment-btn">Load More Comment</a>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="videoModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="top_bar">
                    <h4 class="modal-title">Privacy policy last updated on - 12 December 2023</h4>
                    <button type="button" class="close" id="closeVideoModalButton" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i> <b>Close</b></span>
                    </button>
                    <!--=====================================-->
                    <!--=      Content Area Start        =-->
                    <!--=====================================-->
                    <section class="policy content sec-mar">
                        <div class="container">
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="show policy-content s-1">
                                        <h3>Who we are?</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                            officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                            rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
                                            est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                            possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus
                                            autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet
                                            ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                                            rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores
                                            alias consequatur aut perferendis doloribus asperiores repellat. </p>
                                    </div>
                                    <div class="policy-content s-2">
                                        <h3>Data you provide us whenever you create an account</h3>
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                            minus id quod maxime placeat facere possimus, omnis voluptas assumenda est,
                                            omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut
                                            rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                            molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut
                                            aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                                            asperiores repellat.</p>
                                    </div>
                                    <div class="policy-content s-3">
                                        <h3>Information we automatically collect</h3>
                                        <p>Molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                                            culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et
                                            harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                            soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                            saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                            voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                            repell.</p>
                                    </div>
                                    <div class="policy-content s-4">
                                        <h3>Whenever you leave a comment/reply</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                            officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                            rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
                                            est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                            possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus
                                            autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet
                                            ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                                            rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores
                                            alias consequatur aut perferendis doloribus asperiores repellat. </p>
                                    </div>
                                    <div class="policy-content s-5">
                                        <h3>Cookies that we use</h3>
                                        <p> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                            saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                                            Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                            voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                            repellat. </p>
                                    </div>
                                    <div class="policy-content s-6">
                                        <h3>Third party data collection</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                            officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                            rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis
                                            est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                            possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus
                                            autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet
                                            ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                                            rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores
                                            alias consequatur aut perferendis doloribus asperiores repellat. </p>
                                    </div>
                                    <div class="policy-content s-7">
                                        <h3>How safe is my information?</h3>
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                            minus id quod maxime placeat facere possimus, omnis voluptas assumenda est,
                                            omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut
                                            rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                            molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut
                                            aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus
                                            asperiores repellat.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="policy-item s-1 show" data-count="1">
                                        <span class="d-inline-block policy-icon"><i class="fal fa-plus plus"></i> <i
                                                class="fal fa-times minus"></i></span>
                                        <h2>Who we are?</h2>
                                    </div>
                                    <div class="policy-item s-2" data-count="2">
                                        <span class="d-inline-block policy-icon"><i class="fal fa-plus plus"></i> <i
                                                class="fal fa-times minus"></i></span>
                                        <h2>Data you provide us whenever you create an account</h2>
                                    </div>
                                    <div class="policy-item s-3" data-count="3">
                                        <span class="d-inline-block policy-icon"><i class="fal fa-plus plus"></i> <i
                                                class="fal fa-times minus"></i></span>
                                        <h2>Information we automatically collect</h2>
                                    </div>
                                    <div class="policy-item s-4" data-count="4">
                                        <span class="d-inline-block policy-icon"><i class="fal fa-plus plus"></i> <i
                                                class="fal fa-times minus"></i></span>
                                        <h2>Whenever you leave a comment/reply</h2>
                                    </div>
                                    <div class="policy-item s-5" data-count="5">
                                        <span class="d-inline-block policy-icon"><i class="fal fa-plus plus"></i> <i
                                                class="fal fa-times minus"></i></span>
                                        <h2>Cookies that we use</h2>
                                    </div>
                                    <div class="policy-item s-6" data-count="6">
                                        <span class="d-inline-block policy-icon"><i class="fal fa-plus plus"></i> <i
                                                class="fal fa-times minus"></i></span>
                                        <h2>Third party data collection</h2>
                                    </div>
                                    <div class="policy-item s-7 mb-0" data-count="7">
                                        <span class="d-inline-block policy-icon"><i class="fal fa-plus plus"></i> <i
                                                class="fal fa-times minus"></i></span>
                                        <h2 class="">
                                            How safe is my information?
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
