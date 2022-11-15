<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title') | Samad Solutions Ltd</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset($setting['favicon'])}}">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"/>
        <link rel="stylesheet" href="{{asset('css/font-awesome-animation.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <meta name="google-site-verification" content="MOZcXYe-eCpZ4Z7HHUVpFVUwDfowFEL3gX8q9zOJRRk" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SJL18H2DGJ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-SJL18H2DGJ');
        </script>
        
        @yield('css')
        <style type="text/css">
            .btn-facebook
            {
                background-color: #2C5A98; 
                padding: 0.5rem 5.2rem;
            }
            .btn-google
            {
                background-color: #de0909d1; 
                padding: 0.5rem 5.2rem;
            }
        </style>
    </head>
<body>
	<div>
		<div id="container">
			<!-- Header -->
			@include('front.component.header');

			@yield('content')

			<!-- Footer -->
			@include('front.component.footer')

		</div>
	</div>

    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/parallax.js')}}"></script>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('js/instafeed.min.js')}}"></script>
    <script src="{{asset('js/ofi.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @elseif(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
        </script>
	<script>
     $(document).on('click','.btn-login',function(){
                
    });
    $(document).on('click','.btn-register',function(){
        $('#login').modal('hide');
        $('#register').modal('show');
    });   
    $(document).on('keyup','.searching',function(){
        if($(this).val() == "") 
        {
            $('#search_item').css('display', 'none');
            $('#search_item').empty();
            return false;
        }
        else
        {   
            $('#search_item').css('display', 'block');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var search = $(this).val();
            $.ajax({
                url:'{{ route("search") }}',
                type: 'post',
                dataType: "json",
                data: {
                   _token: CSRF_TOKEN,
                   search: search
                },
                success: function( response ) {
                    // console.log(response);
                    $('#search_item').empty();
                    $('#search_item').css('display', 'block');
                    response.forEach(searchFunc);
                }
            });
            return true;
        }
    });
    function searchFunc(data) 
    {
        var name = data.name;
      $("#search_item").append('<li class="search_list" data-atr='+data.id+'>' +'<b>' +name+ '</b>'+ '</li>');
    }
    $(document).on('click','.search_list',function(){
        var id = $(this).attr('data-atr');
        $.ajax({
            type: 'GET',
            url: '{{ route("search.course") }}/'+id,
            success: function( response ) {
                // console.log(response.name)
                $('.searching').val(response.name);
                $('.subcourse_id').val(response.id);
                $('#search_item').css('display', 'none');
                $('#search-form').submit();
            }
        });
    });
    $(document).on('change', '#inlineFormInputName32',function(){
        $('#inlineFormInputName1').empty();
        var id=$(this).val();
        $.ajax({
            type: 'GET',
            url: '{{ route("getSubcourse") }}/'+id,
            success: function (response) {
                 for(i=0; i<response.length; i++){
                            response[i].name;   
                            if(response[i].name !== ""){
                                $('#inlineFormInputName1').append('<option value="'+response[i].id+'">'+response[i].name+'</option>');
                            } 
                        }
            }
        });
    });
    </script>
    @yield('js')
</body>
</html>