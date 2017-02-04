<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WHMCS - Login</title>

        <link href="{$BASE_PATH_CSS}/bootstrap.min.css" rel="stylesheet">
        <link href="templates/login.css" rel="stylesheet">

        <script type="text/javascript" src="{$BASE_PATH_JS}/jquery.min.js"></script>
        <script type="text/javascript" src="{$BASE_PATH_JS}/bootstrap.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body>
        <div class="login-container">
            <h1 class="logo">
                <a href="login.php">
                    <img src="{$BASE_PATH_IMG}/whmcs.png" alt="WHMCS" />
                </a>
            </h1>
            <div class="login-body">
                <h2>{$displayTitle}</h2>
                {if $infoMsg}
                    <div class="alert alert-info text-center" role="alert">
                        {$infoMsg}
                    </div>
                {/if}
                {if $successMsg}
                    <div class="alert alert-success text-center" role="alert">
                        {$successMsg}
                    </div>
                {/if}
                {if $errorMsg}
                    <div class="alert alert-danger text-center" role="alert">
                        {$errorMsg}
                    </div>
                {/if}
                {if $step eq "login"}
                    <form method="post" action="dologin.php">
                        <input type="hidden" name="language" id="inputLanguage" />
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rememberme" value="1">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <input type="submit" value="Login" class='btn btn-primary btn-block'>
                            </div>
                        </div>
                    </form>
                {elseif $step eq "reset"}
                    <form action="login.php" method="post">
                        <input type="hidden" name="action" value="reset" />
                        <input type="hidden" name="sub" value="send" />
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email address" autofocus />
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Reset Password" class="btn btn-primary btn-block" />
                        </div>
                    </form>
                {elseif $step eq "twofa"}
                    <div class="text-center" align="center">
                        {$challengeHtml}
                    </div>
                {elseif $step eq "twofabackupcode"}
                    {if $successMsg}
                        <p>Write this down on paper and keep it safe.<br />It will be needed if you ever lose your 2nd factor device or it is unavailable to you again in future.</p>
                        <form method="post" action="dologin.php">
                            <div class="form-group">
                                <input type="submit" value="Continue &raquo;" class="btn btn-primary btn-block" />
                            </div>
                        </form>
                    {else}
                        <form action="dologin.php" method="post">
                            <input type="hidden" name="backupcode" value="1" />
                            <div class="form-group">
                                <input type="text" name="code" class="form-control" placeholder="Backup code" autofocus />
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-block" />
                            </div>
                        </form>
                    {/if}
                {/if}
            </div>
            <div class="footer">
                {if $step eq "login"}
                    {if $showPasswordResetLink}
                        <a href="login.php?action=reset">
                            Forgot password?
                        </a>
                    {else}
                        <span>&nbsp;</span>
                    {/if}
                {elseif $step eq "reset"}
                    <a href="login.php">
                        &laquo; Back to Login
                    </a>
                {elseif $step eq "twofa"}
                    <a href="login.php?backupcode=1">
                        Can't Access Your 2nd Factor Device?<br />Login using Backup Code
                    </a>
                {/if}
            </div>
        </div>
        <div class="language-chooser">
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span id="languageName">Choose Language</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    {foreach $languages as $language}
                        <li><a href="#">{$language|ucfirst}</a></li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <div class="poweredby text-center">
            <a href="http://www.whmcs.com/" target="_blank">Powered by WHMCS</a>
        </div>
        <script type="text/javascript" src="templates/login.js"></script>
    </body>
</html>
