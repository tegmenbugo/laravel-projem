<a href="{{route('customers.create')}}">NEW CUSTOMER</a>


@foreach ($customers as $customer)
{{$customer->name}} {{$customer->surname}} <br/>
@endforeach