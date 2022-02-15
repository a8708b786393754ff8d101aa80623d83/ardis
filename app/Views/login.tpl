{extends file='base/layout.tpl'}
{block name=content}
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="{base_url('assets/Images/logo.png')}" id="icon" alt="User Icon" />
        </div>
    
        <!-- Login Form -->
        <form action="{base_url('/visitor/login/')}" method="POST">
          <input type="text" id="login" class="fadeIn second" name="username" placeholder="username or email">
          <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
        
    
      </div>
    </div>
{/block}