@extends('layouts.app')
@section('content')
    <!--=====================================-->
    <!--=        login Area Start          =-->
    <!--=====================================-->
    <section class="login signup text-center">
        <div class="container">
            <div class="login-block">
                <div class="login-content">
                    <img src="{{ asset('media/icon/user.png') }}" alt="" class="user-icon">
                    <h3>Sign up</h3>
                    <form id="loginForm">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" required placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" required placeholder="email address">
                        </div>
                        <div class="form-group password-type-field mb-0">
                            <input class="form-control" type="password" id="password-field" name="password" required
                                placeholder="enter password">
                            <span class="text-end toggle-password" toggle="#password-field"> <i
                                    class="fal fa-eye field-icon toggle-password"></i></span>
                        </div>
                        <div class="form-group password-type-field mb-0">
                            <input class="form-control" type="password" id="password_confirmation"
                                name="password_confirmation" required placeholder="confirm password">
                            <span class="text-end toggle-password" toggle="#password_confirmation"> <i
                                    class="fal fa-eye field-icon toggle-password"></i></span>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="check">
                            <label class="custom-control-label" for="check">By continuing, you agree to Neenime Terms of
                                Use and <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal"
                                    class="active">Privacy Police.</a></label>
                        </div>

                        <button type="submit" class="anime-btn btn-dark border-change">
                            SIGN UP
                        </button>
                        <p class="guide">Already have an account? <a href="{{ route('login') }}">Log in</a></p>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- modal-popup area start  -->
    <div class="modal fade" id="videoModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="top_bar">
                    <h4 class="modal-title">Privacy policy last updated on – 12 December 2023</h4>
                    <button type="button" class="close" id="closeVideoModalButton" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i> <b>Close</b></span>
                    </button>
                    <!--=====================================-->
                    <!--=      Content Area Start        =-->
                    <!--=====================================-->
                    <section class="policy content sec-mar">
                        <div class="container">
                            <h6>Privacy policy last updated on – 12 December 2023</h6>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $("#loginForm").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('register.store') }}",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response);
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses...',
                        text: response.message,
                    }).then(function() {
                        window.location.reload();
                        location.href = '/login';
                    });

                    // yang atas itu cuma SweetAler
                },
                error: function(response) {
                    // console.log(response.responseJSON.message);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error...',
                        text: response.responseJSON.message,
                    });
                }
            })
        })
    </script>
@endsection
