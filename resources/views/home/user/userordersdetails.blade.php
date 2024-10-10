<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">

<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th style="width: 10px">Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            
            
            
        </tr>
        @foreach ($data as $rs)
            <tr>
                <td>{{ $rs->id }}</td>
                <td>
                    {{ $rs->product->title }}
                </td>
                <td>{{ $rs->price }}</td>
                <td>{{ $rs->quantity }}</td>
                <td>{{ $rs->amount }}</td>
                
                
                
            </tr>
        @endforeach
    </tbody>
</table>
