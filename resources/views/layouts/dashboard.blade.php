@include('layouts.header')


<head>

    <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">

</head>

<script>

    window.onload = (event) => {
  
      document.getElementsByTagName('a')[2].style.borderBottom = '2px solid green'
  
    };
    
    </script>


<h1>WELCOME  @php echo Session::get('userNameDataDecoded'); @endphp</h1>




