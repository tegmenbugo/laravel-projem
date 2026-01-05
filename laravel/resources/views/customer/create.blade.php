<form action="{{route('customers.store')}}" mehod=POST>
    <input type="hidden" name="_method" value="PUT"/>
    @csrf
   Name:<input type="text" name="name"/><br/>
    Surname:<input type="text" name="surname"/><br/>
    Gender:<input type="text" name="gender"/><br/>
    Birth Year:<input type="text" name="birthyear"/><br/>
    <input type="submit" name="submit" value="KAYDET"/>
</form>