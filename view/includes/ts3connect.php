<?php
/**
 * Created by PhpStorm.
 * User: Hypraz
 * Date: 20/03/2017
 * Time: 22:11
 */
?>

<form class="form-horizontal" action='ts3server://TS3IPHERE?port=9987&nickname='+#nickname>
    <fieldset>

        <!-- Form Name -->
        <legend>Connecte toi au teamspeak !</legend>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">pseudo</label>
            <div class="col-md-2">
                <input id="nickname" name="nickname" type="text" placeholder="pseudo" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ts3">Connection</label>
            <div class="col-md-4">
                <input type="submit" id="ts3" name="ts3" class="btn btn-primary">
            </div>
        </div>

    </fieldset>
</form>
