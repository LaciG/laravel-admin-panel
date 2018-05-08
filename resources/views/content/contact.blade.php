<div align="center">
    <form method="post" action=" {{ url('/contact') }} ">
        @csrf
        <table>
            <tr>
                <td>Név: </td><td><input type="text" name="name" /></td><td>E-mail: </td><td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <td>Telefonszám: </td><td><input type="number" name="mobile" /></td><td>Tárgy: </td><td><input type="text" name="subject" /></td>
            </tr>
            <tr align="center">
                <td colspan="4">Üzenet: </td>
            </tr>
            <tr align="center">
                <td colspan="4"><textarea name="message" rows="3"></textarea></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Küldés</button>
    </form>
</div>