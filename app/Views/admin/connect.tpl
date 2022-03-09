{extends file='base/layout.tpl'}
{block name=content}
<section class="container-fluid">
    <div class="row justify-content-center  ">

    <div class="col-3 rounded border shadow p-3 mb-5 bg-white " id="col-Login" >
        <p class="text-center"><strong>Login Admin</strong></p>
        <form class="login-form"  method="POST">
            <div class="form-group" id="errorLogin" >
            </div>
            <div class="form-group">
                <label >Username</label>
                <input type="text" id="user" name="username" class="form-control" placeholder="Pseudo" required>    
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control"  id="password" name="password"  placeholder="Password" required>
            </div>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>                              
            </div>
        </form>
    </div>
</div>
</section>
{/block}
