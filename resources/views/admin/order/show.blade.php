<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">
<h3>
    Order Details
</h3>
<hr>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th style="width: 10px">Id</th>
            <th>Status</th>
            <th>Note</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Total</th>
            <th>Change</th>
        </tr>
        @foreach ($main as $rs)
            <form action="{{ route('admin.order.update', ['id' => $rs->id]) }}" method="POST">
                @csrf
                <tr>
                    <td>{{ $rs->id }}</td>
                    <td>
                        <select name="status" class="form-control">
                            <option value="{{ $rs->status }}">{{ $rs->status }}</option>
                            <option value="New">New</option>
                            <option value="Accepted">Accepted</option>
                            <option value="Shipping">Shipping</option>
                            <option value="Completed">Completed</option>
                        </select>
                        
                    </td>
                    <td>
                        <textarea name="note" id="" cols="20" rows="5" class="form-control">{{$rs->note}}</textarea>
                    </td>
                    <td>
                        {{ $rs->name }}
                    </td>
                    <td>{{ $rs->email }}</td>
                    <td>$ {{ $rs->total }}</td>
                    <td>
                        <button class="btn btn-success"><i class=""></i> Change</button>
                    </td>
                    
                    
                </tr>
            </form>
        @endforeach
    </tbody>
</table>
<hr>
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
                <td>$ {{ $rs->price }}</td>
                <td>{{ $rs->quantity }}</td>
                <td>$ {{ $rs->amount }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
