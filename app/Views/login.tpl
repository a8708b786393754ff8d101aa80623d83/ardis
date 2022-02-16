{extends file='base/layout.tpl'}
{block name=content}

    {if isset($message)}
      <div class='container'>
        <div class='row'>
        {foreach from=$message item=$msg}
          <div class="p-3 mb-2 bg-danger text-white">{$msg}</div>                                  
        {/foreach}
        </div>
      </div>

    {/if}
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