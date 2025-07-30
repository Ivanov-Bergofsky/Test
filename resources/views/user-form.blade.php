<div>
<<<<<<< HEAD
    <form action="/AddUser" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Add User</button>
    </form>
</div>
=======
  <h1>Add New User</h1>
  <form action="addUser" method="post">
    <div>
        <input type="text" name="username" class="input-wrapper" placeholder="Enter Your Name">
    </div>
    <br>
     <div>
        <input type="text" name="username" class="input-wrapper" placeholder="Enter Your Email">
    </div>
        <br>
     <div>
        <input type="text" name="username" class="input-wrapper" placeholder="Enter Your City">
    </div>
        <br>
     <div>
        <button>Add New User</button>
    </div>
  </form>
</div>

<style>
    .input-wrapper{
        border:orange 2px solid;
        height:35px;
        width:200px;
        border-radius:3px;
        color:orange;

    }
</style>
>>>>>>> 176ad1c (Form action get and post)
