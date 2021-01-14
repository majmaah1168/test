
<form action="/store" method="POST">
    {{ csrf_field() }}
<input type="text" name="name" placeholder="الإسم" />
<br />
<br />
<input type="text" name="email" placeholder="الإيميل" />
<br />
<br />
<input type="text" name="phone" placeholder="رقم الجوال" />

<input type="submit"  value="تسجيل"/>



</form>
