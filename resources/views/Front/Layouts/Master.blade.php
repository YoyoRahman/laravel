
<!DOCTYPE html>
<html lang="fa" dir="rtl">


@include('Front.Layouts.Head-tag')

<body>

    <div id="wrapper">

@include('Front.Layouts.Header')

@yield('content')







@include('Front.Layouts.Footer')
    </div>


</body>
@include('Front.Layouts.Script')

</html>
