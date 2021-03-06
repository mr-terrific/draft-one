<?php
$ENV = $_SERVER['SERVER_NAME'] == 'dev.draft-one.com' ? 'dev' : 'prod';
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>DraftOne | Get your first draft out of your head!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<?php if ( $ENV == 'prod' ): ?>
  <link rel="stylesheet/less" type="text/css" href="css/style.css" />
<?php else: ?>
  <link rel="stylesheet/less" type="text/css" href="css/style.less?ts=<?= time() ?>" />
<?php endif; ?>

	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
 	<link href='http://fonts.googleapis.com/css?family=Coda:400,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>

<?php if ( $ENV == 'prod' ): ?>
  <script type="text/javascript" src="js/draft-one.min.js"></script>
<?php else: ?>
  <script type="text/javascript" src="js/less.min.js"></script>
  <script type="text/javascript" src="js/lib/showdown.js"></script>
  <script type="text/javascript" src="js/lib/modernizr.js"></script>
  <script type="text/javascript" src="js/lib/underscore-min.js"></script>
  <script type="text/javascript" src="js/lib/backbone-min.js"></script>
  <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/lib/ZeroClipboard.min.js"></script>
  <script type="text/javascript" src="js/views/editor.js"></script>
  <script type="text/javascript" src="js/views/stats.js"></script>
  <script type="text/javascript" src="js/views/tools.js"></script>
  <script type="text/javascript" src="js/views/header.js"></script>
  <script type="text/javascript" src="js/views/settings.js"></script>
  <script type="text/javascript" src="js/app/draft-one.js"></script>
<?php endif; ?>

<?php if ( $ENV == 'prod' ): ?>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-273478-15']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
<?php endif; ?>
</head>

<body>

  <!----- HEADER -->
	<header id="header" title="Click the header to minimize it for more writing space!">
		<div class="container centered relative">
			<div class="row visible-desktop">
				<div class="span8"><h1>DraftOne</h1></div>
				<div class="span4">
					<div class="subhead">
						Keeping your writing feet<br>to the metaphorical fire.</div>
					</div>
			</div>
      <div class="row visible-tablet visible-phone">
        <div class="span10 offset1">
          <h1>DraftOne</h1>
          <p class="subhead">
            Keeping your writing feet to the metaphorical fire.</div>
          </p>
        </div>
      </div>
		</div>
	</header>
  <!----- /HEADER -->

  <!----- TOOLBAR -->
  <section class="toolbar">
    <ul>
      <li><a class="start" alt="" title=""><i class="icon-play"></i></a></li>
      <li><a class="pause" alt="" title=""><i class="icon-pause icon-white"></i></a></li>
      <li><a class="start-over" alt="" title=""><i class="icon-repeat icon-white"></i></a></li>
      <li><a class="settings" alt="" title=""><i class="icon-cog icon-white"></i></a></li>
      <li><a class="settings" alt="" title=""><i class="icon-download icon-white"></i></a></li>
    </ul>
    <div class="site-title">DraftOne</div>
  </section>
  <!----- /TOOLBAR -->

	<section id="about" style="display:none">
		<div class="container">
			<div class="row">
				<h2><a id="open-about">Hey, so just what is this "DraftOne" thing, anyway? &raquo;</a></h2>
			</div>
			<div class="row pushdown">
				<div class="span4 offset2">
					Designed specifically to make you just keep moving forward when working
					on <a href="http://nanowrimo.org" target="_blank">National Novel Writing Month</a>
					&mdash; though you can use it any time, of course &mdash;
					<strong>DraftOne</strong> gives you a quiet space in which to write but gently hassles you if
					your fingers stop typing.
					<br /><br />
					DraftOne was inspired by <a href="http://writeordie.com/#Web+App" target="_blank">Dr. Wicked's Write or Die!</a>,
					which helped me out tremendously during NaNoWriMo 2008.
					I owe him a debt of gratitude for helping me get that thing done, and I hope that DraftOne can help you
					get your own projects finished!
				</div>
				<div class="span4">
						Under the <strong>Settings</strong> menu, you can set a goal for yourself &mdash; either a target number of minutes or number of
						words. Once you hit that goal, <strong>DraftOne</strong> will happily let you know that you've succeeded!
						And if you need the extra help, you can even <em>turn off the backspace key</em> so that you have no choice
						but to keep moving ahead.
				</div>
				<div class="span2">&nbsp;</div>
			</div>
			<div class="row pushdown">
				<div class="span8 offset2">
					<p class="center emphasis">
						It's not about perfection &mdash; it's about getting that first draft <em>done</em>.
					</p>
					<p class="clear center">
						<a id="close-about" href="#">Got it! Thanks! Now LET ME WRITE!</a>
					</p>
				</div>
			</div>
		</div>
	</section>

  <!----- STATS -->
  <section class="stats">
    <div class="container">
      <div class="row">
        <div class="span6">
          <span>Current word count: <span class="current-words">0</span></span>
        </div>
        <div class="span6 text-right">
          <span>Time elapsed: <span class="time-elapsed">0:00</span></span>
        </div>
      </div>
    </div>
  </section>
  <!----- /STATS -->

  <!----- EDITOR -->
  <section class="editor">
    <div class="container">
      <div class="row">
        <div id="textbox" class="span12 text-center">
          <textarea id="the-text" class="paused" readonly="true"></textarea>
          <p>
            The editor allows <a href="http://daringfireball.net/projects/markdown/">Markdown formatting</a> if that's your thing.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!----- /EDITOR -->

	<footer id="footer">
		<div class="container centered">
			<div class="row">
				<div class="span4 offset1">
					&copy; <?= date('Y') ?> <a href="http://allenholt.com/">Allen Holt</a>.<br>
          Follow me on <a href="http://twitter.com/allenholt/" target="_blank">Twitter</a> if you feel like it.
				</div>
        <div class="span2">&nbsp;</div>
				<div class="span4 text-right">
					Got feedback, comments or bug reports?<br><a href="mailto:ajholt@gmail.com?Subject=DraftOne">Send 'em my way.</a>
          <br><br>
					You can check out this project on <a href="https://github.com/mr-terrific/draft-one" target="_blank">GitHub</a> if that's the kind of thing you're into.
				</div>
        <div class="span1">&nbsp;</div>
			</div>
		</div>
	</footer>

  <div class="row">
    <div class="span12">&nbsp;</div>
  </div>

  <!----- SETTINGS MODAL -->
	<div id="settings-modal" class="modal hide fade">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label">
            <input type="radio" name="which" id="which-number-of-words" checked="checked">
            Number of words you want to write
          </label>
          <div class="controls">
            <input type="text" id="number-of-words" placeholder="500" class="input-medium" />
          </div>
        </div>
        <p class="text-center"><b>OR</b></p>
        <div class="control-group">
          <label class="control-label">
            <input type="radio" name="which" id="which-number-of-minutes">
            Number of minutes you want to write
          </label>
          <div class="controls">
            <input type="text" id="number-of-minutes" placeholder="10" class="input-medium" />
          </div>
        </div>
        <hr>
        <label class="checkbox inline">
          <input type="checkbox" name="disable-backspace" id="disable-backspace"> Disable backspacing/deleting
          <div class="alert">
            <strong>Warning!</strong> Disabling backspacing certainly makes you keep going forward, but can also be annoying as hell. Just so you know.
          </div>
        </label>
      </form>
		</div>
		<div class="modal-footer">
			<button class="btn btn-primary" id="save-settings">Save Changes</button>
		</div>
	</div>
  <!----- /SETTINGS MODAL -->

	<div id="success-modal" class="modal hide fade">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Congratulations!</h3>
		</div>
		<div class="modal-body">
      <p>You hit your goal! Well done, you!</p>
      <p class="emphasis">
        Remember to save your work to a word processor or text editor! You can use the "Copy to Clipboard" button
        to grab all of your text, either just as you have it typed or, if you used Markdown, formatted as HTML.
      </p>
    </div>
		<div class="modal-footer">
      <button class="btn btn-primary" id="continue">Continue This Session</button>
      <button class="btn" data-dismiss="modal">Close</button>
    </div>
	</div>

  <div id="text-copied-modal" class="modal hide fade">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3>Woo hoo!</h3>
    </div>
    <div class="modal-body">Your text should now be all up in your clipboard. Paste away.</div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal">Close</button>
    </div>
  </div>

</body>
</html>
