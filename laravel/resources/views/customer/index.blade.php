<a href="{{ route('customers.create') }}">NEW CUSTOMER</a>
<br /><br /><br />

@foreach ($customers as $customer)
    <a href="{{ route('customers.show', ['customer' => $customer->id]) }}">
        {{ $customer->name }} {{ $customer->surname }}
    </a>
    
    <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}">(Düzenle)</a>

    <form action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <input type="submit" name="submit" value="SİL" />
    </form>

    <br />
@endforeach