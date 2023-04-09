<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container ">
        <div class="heading_container">
            <h2 class="">
                Contact Us
            </h2>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('create-contact',app()->getLocale()) }}" method="POST" id="form_contact">
                    @csrf
                    <div>
                        <input @if (!Auth::guest())
                            value="{{Auth::user()->name}}" disabled
                        @endif required name="name" type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input @if (!Auth::guest())
                        value="{{Auth::user()->email}}" disabled
                    @endif required name="email" type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input required name="phone" type="text" placeholder="Phone" />
                    </div>
                    <div>
                        <input required name="message" type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex ">
                        <button>
                            Save
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                            width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

@section('customJs')

    <script>
        $('#form_contact').on('submit', function(e) {

            e.preventDefault()

            var form = $(this);
            var actionUrl = form.attr('action');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(res) {
                    if (res.status) {
                        Swal.fire({
                            title: 'Başarılı!',
                            icon: 'success'
                        })
                        form.trigger("reset")
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Hata',
                            icon: 'error'
                        })
                    }
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Hata',
                        icon: 'error'
                    })
                }
            });

        })
    </script>

@endsection