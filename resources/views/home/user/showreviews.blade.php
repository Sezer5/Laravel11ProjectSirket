<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">

<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <td>Product</td>
        <td>{{ $data->product->title }}</td>
    </tr>
    <tr>
        <td>Rate</td>
        <td>
            @switch($data->rate)
                @case(1)
                    *
                @break

                @case(2)
                    **
                @break

                @case(3)
                    ***
                @break

                @case(4)
                    ****
                @break

                @case(5)
                    *****
                @break

                @default
                    <span>No Rate!</span>
            @endswitch
        </td>
    </tr>
    <tr>
        <td>Subject</td>
        <td>{{ $data->subject }}</td>
    </tr>
    <tr>
        <td>Review</td>
        <td>{{ $data->review }}</td>
    </tr>

    <tr>
        <td>Ip</td>
        <td>{{ $data->IP }}</td>
    </tr>


</table>
