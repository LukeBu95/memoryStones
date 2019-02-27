<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontaktformular</title>
</head>
    <body>
        <form class="pure-form pure-form-aligned" method="post" action="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 py-5">
                        <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="vorname">Vorname *</label>
                                            <input id="vorname" type="text" name="vorname" class="form-control" placeholder="Bitte gib deinen Vornamen ein" required="required" data-error="Vorname benötigt.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nachname">Nachname *</label>
                                            <input id="nachname" type="text" name="nachname" class="form-control" placeholder="Bitte gib deinen Nachnamen ein" required="required" data-error="Nachname benötigt.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">E-Mail *</label>
                                            <input id="email" type="email" name="email" class="form-control" placeholder="Bitte gib deine E-Mail ein" required="required" data-error="Gültige E-Mail Adresse benötigt.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="betreff">Betreff *</label>
                                            <select id="betreff" name="betreff" class="form-control" required="required" data-error="Bitte gib einen Betreff an.">
                                                <option value=""></option>
                                                <option value="Fragen zum Projekt">Fragen zum Projekt</option>
                                                <option value="Kritik">Kritik</option>
                                                <option value="Sonstiges">Sonstiges</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nachricht">Nachricht *</label>
                                            <textarea id="nachricht" name="nachricht" class="form-control" placeholder="Deine Nachricht" rows="4" required="required" data-error="Bitte hinterlasse hier deine Nachricht."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-send" value="Absenden">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-muted">
                                            <strong>*</strong> Diese Felder werden benötigt.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>