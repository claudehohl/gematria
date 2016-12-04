
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Die Gematriakartei</a>
    </div>
    <div id="navbar" class="navbar-collapse">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" name="q" placeholder="Suchen" class="form-control hebrew" value="<?php echo $search; ?>" />
        </div>
      </form>
    </div><!--/.navbar-collapse -->
  </div>
</nav>

<div class="container content">

<?php if($cards) { ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Beschreibung</th>
                <th>Hebräisches Wort</th>
                <th>Zahl</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($cards as $card) { ?>
            <tr data-id="<?php echo $card['id']; ?>">
                <td class="updateclick"><?php echo nl2br($card['description']); ?></td>
                <td class="updateclick largefont"><?php echo $card['hebrew_word']; ?></td>
                <td><a href="<?php echo site_url('?q=' . $card['number']); ?>"><?php echo $card['number']; ?></a></td>
            </tr>
<?php } ?>
        </tbody>
    </table>

<?php } else { ?>

<div class="row-fluid">
      <div class="span8">
        <div class="hero-unit">
            <h1>Anleitung</h1>
            <p>Such nach einem Wort oder einer Zahl im Suchfeld.</p>
            <p>Für hebräische Buchstaben: Benutze den Doppelpunkt.</p>
<img src="<?php echo site_url('/static/images/gematria-showcase.gif'); ?>" alt="" />
            <p>Sourcecode: <a href="https://github.com/claudehohl/gematria" target="_blank">github.com/claudehohl/gematria</a></p>
         </div>
      </div>
</div>

<?php } ?>

<?php if($logged_in) { ?>
<form method="post" action="" class="form-horizontal">
<fieldset>

<?php if($edit_card) { ?>

<!-- Form Name -->
<legend>Wort bearbeiten</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="number">Zahl</label>
  <div class="col-md-2">
  <input id="number" name="number" type="text" placeholder="40" value="<?php if(isset($card)){ echo $card['number']; } ?>" class="form-control input-md">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Beschreibung</label>
  <div class="col-md-4">
    <textarea class="form-control" rows="5" id="description" name="description"><?php echo $edit_card['description']; ?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hebrew_word">Hebräisches Wort</label>
  <div class="col-md-4">
  <input id="hebrew_word" name="hebrew_word" type="text" placeholder=":jod: :he: :vav: :he:" value="<?php echo $edit_card['hebrew_word']; ?>" class="form-control input-md hebrew">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="add"></label>
  <div class="col-md-4">
    <button id="add" name="edit" value="1" class="btn btn-default">Bearbeiten</button>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="delete"></label>
  <div class="col-md-4">
    <button id="delete" name="delete" value="<?php echo $edit_card['id']; ?>" class="btn btn-danger">Löschen</button>
  </div>
</div>

</fieldset>
</form>

<?php } else { ?>

<!-- Form Name -->
<legend>Wort hinzufügen</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="number">Zahl</label>
  <div class="col-md-2">
  <input id="number" name="number" type="text" placeholder="40" value="<?php if(isset($card)){ echo $card['number']; } ?>" class="form-control input-md">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Beschreibung</label>
  <div class="col-md-4">
    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hebrew_word">Hebräisches Wort</label>
  <div class="col-md-4">
  <input id="hebrew_word" name="hebrew_word" type="text" placeholder=":jod: :he: :vav: :he:" class="form-control input-md hebrew">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="add"></label>
  <div class="col-md-4">
    <button id="add" name="add" value="1" class="btn btn-default">Hinzufügen</button>
  </div>
</div>

</fieldset>
</form>
<?php } ?>

<?php } ?>

</div>
