<?php require('partials/head.php'); ?>
<h1> Kirjuta siia missa must arvad </h1>
<?php foreach ($feedbacks as $feedback) : ?>
    <li><?php echo $feedback->subject; ?> (<?php echo $feedback->added?>)</li>
<?php endforeach; ?>

<form method = "post" action="/add-feedback">
    <input type="text" placeholder ="add subject" class="form-control">
    <textarea name= "body" class="form-control" placeholder="mis mureks?"></textarea>
    <button class="btn btn-success" name="action" value="send">Send</button>

</form>
 
<?php require('partials/footer.php'); ?>