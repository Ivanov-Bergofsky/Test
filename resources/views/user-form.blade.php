<div>
    <form action="/AddUser" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Add User</button>
    </form>
</div>